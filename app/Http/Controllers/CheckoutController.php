<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\CertificateMail;
use App\Mail\ConfirmPaymentMail;
use App\Models\Basket;
use App\Models\Certificate;
use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Jackiedo\Cart\Cart;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\Customer;


class CheckoutController extends Controller
{
    protected Cart $cart;

    public function __construct(Cart $cart)
    {
        $this->cart = $cart;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $cartDetails = $this->cart->getDetails();
        return view("pages.back.checkout")->with('cartDetails',$cartDetails);
    }

    public function indexS(): \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $cartDetails = $this->cart->getDetails();
        return view("admin.administrator.checkoutS")->with('cartDetails',$cartDetails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function setPayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $json_str = file_get_contents('php://input');
        $json_obj = json_decode($json_str);
        $amountToInt = round($request->cartTotal * 100, 0, PHP_ROUND_HALF_UP);

        $intent = null;

        try {
            if (isset($json_obj->payment_intent_id)) {
                $intent = \Stripe\PaymentIntent::retrieve($json_obj->payment_intent_id);


                if ($intent->status == 'requires_confirmation' || $intent->status == 'requires_action') {
                    $intent = $intent->confirm();
                }
            }

            else if (isset($json_obj->payment_method_id)) {
                $customer = \Stripe\Customer::create([
                    'email' => auth()->user()->email,
                    'description' => 'New customer',
                    'metadata' => [
                        'name' => auth()->user()->name,
                    ],
                ]);
                $cartItemsJson = $request->cart_items;
                $intent = \Stripe\PaymentIntent::create([
                    'payment_method' => $json_obj->payment_method_id,
                    'amount' => $amountToInt,
                    'currency' => 'eur',
                    'confirm' => true,
                    'customer' => $customer->id,
                    'description' => 'Payment made by '. auth()->user()->email,
                    'return_url' => url('/payment/success'),
                    'metadata' => [
                        'user_id' => auth()->id(),
                        'cart_items' => $cartItemsJson,
                        'cart_qty' => $request->cartQty,
                        'address' => $request->address,
                        'city' => $request->city,
                        'county' => $request->county,
                        'country' => $request->country,
                    ]
                ]);
            }

            if (!$intent) {
                http_response_code(400);
                echo json_encode(['error' => 'Invalid payment request.']);
                return;
            }

            $this->generateResponse($intent, $request);

        } catch (\Stripe\Exception\ApiErrorException $e) {
            http_response_code(400);
            echo json_encode([
                'error' => $e->getMessage()
            ]);
        }
    }

    public function generateResponse($intent, Request $request) {

        if ($intent->status == 'requires_action') {
            echo json_encode([
                'requires_action' => true,
                'payment_intent_client_secret' => $intent->client_secret,
                'redirect_url' => $intent->next_action->redirect_to_url->url ?? null
            ]);
            return;
        }


        if ($intent->status == 'succeeded' || $intent->status == 'requires_capture' || $intent->status == 'processing') {

            $existingOrder = Order::where('charge_id', $intent->id)->first();
            if (!$existingOrder) {
                $cartItems = json_decode($request->cart_items, true);

                $orderTitles = '';
                if (!empty($cartItems)) {
                    foreach ($cartItems as $cartItem) {
                        $orderTitles .= ($cartItem['title'] ?? 'Course') . ', ';
                    }
                    $orderTitles = rtrim($orderTitles, ', ');
                } else {
                    $orderTitles = 'Course Purchase';
                }

                Order::create([
                    'user_id' => auth()->user()->id,
                    'product_name' => $orderTitles,
                    'quantity' => $request->cartQty,
                    'paid' => $request->cartTotal,
                    'charge_id' => $intent->id,
                    'invoice_id' => $intent->id,
                    'address' => $request->address,
                    'city' => $request->city,
                    'county' => $request->county,
                    'country' => $request->country,
                    'status' => 'paid',
                ]);

                if (!empty($cartItems)) {
                    foreach ($cartItems as $cartItem) {
                        $qty = $cartItem['quantity'] ?? 1;
                        for ($i = 0; $i < $qty; $i++) {
                            $package = new Package();
                            $package->product_id = $cartItem['id'] ?? 1;
                            $package->user_id = auth()->user()->id;
                            $package->course_name = $cartItem['title'] ?? 'Course';
                            $package->status = "purchased";
                            $package->save();
                        }
                    }
                }

                Mail::to(auth()->user()->email)->send(new ConfirmPaymentMail());
            }

            if (session()->isStarted()) {
                $request->session()->flash('success', 'Payment has been received successfully');
            }

            echo json_encode([
                "success" => true
            ]);
            return;
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Invalid PaymentIntent status: ' . $intent->status]);
        }
    }
    public function paymentSuccess(Request $request)
    {
        $paymentIntentId = $request->query('payment_intent');

        if ($paymentIntentId) {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            try {
                $intent = PaymentIntent::retrieve($paymentIntentId);
                // Verify the payment actually succeeded after 3DS redirect
                if ($intent->status == 'succeeded') {
                    $existingOrder = Order::where('charge_id', $intent->id)->first();

                    if (!$existingOrder) {
                        $metadata = $intent->metadata;
                        $userId = $metadata->user_id ?? auth()->id();
                        $cartItems = json_decode($metadata->cart_items ?? '[]', true);
                        $orderTitles = '';
                        if (!empty($cartItems)) {
                            foreach ($cartItems as $cartItem) {
                                $orderTitles .= ($cartItem['title'] ?? 'Course') . ', ';
                            }
                            $orderTitles = rtrim($orderTitles, ', ');
                        } else {
                            $orderTitles = $metadata->product_name ?? 'Course Purchase';
                        }

                        // 1. Create the Order
                        Order::create([
                            'user_id' => $userId,
                            'product_name' => $orderTitles,
                            'quantity' => $metadata->cart_qty ?? 1,
                            'paid' => $intent->amount / 100,
                            'charge_id' => $intent->id,
                            'invoice_id' => $intent->id,
                            'address' => $metadata->address ?? null,
                            'city' => $metadata->city ?? null,
                            'county' => $metadata->county ?? null,
                            'country' => $metadata->country ?? null,
                            'status' => 'paid',
                        ]);

                        // 2. Create the Packages
                        if (!empty($cartItems)) {
                            foreach ($cartItems as $cartItem) {
                                $qty = $cartItem['quantity'] ?? 1;

                                for ($i = 0; $i < $qty; $i++) {
                                    $package = new Package();
                                    $package->product_id = $cartItem['id'] ?? 1;
                                    $package->user_id = $userId;
                                    $package->course_name = $cartItem['title'] ?? 'Course';
                                    $package->status = "purchased";
                                    $package->save();
                                }
                            }
                        }
                        // 3. Send Confirmation Email
                        $user = User::find($userId);
                        if ($user) {
                            Mail::to($user->email)->send(new ConfirmPaymentMail());
                        }
                    }
                }
            } catch (\Stripe\Exception\ApiErrorException $e) {
                // Handle Stripe API errors if retrieval fails
                \Log::error('Stripe payment success retrieval error: ' . $e->getMessage());
            }
        }

        // Flash session message for your view if needed
        if (session()->isStarted()) {
            session()->flash('success', 'Payment has been received successfully');
        }

        return view('pages.back.payment');
    }


    public function processMobileStripePayment(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $json_str = file_get_contents('php://input');
        $json_obj = json_decode($json_str);

        $cartTotal = $request->cartTotal ?? ($json_obj->cartTotal ?? 0);
        $amountToInt = round($cartTotal * 100, 0, PHP_ROUND_HALF_UP);

        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized user'], 401);
        }

        try {
            // 1. Create a Customer profile via Stripe SDK with leading backslash
            $customer = \Stripe\Customer::create([
                'email' => $user->email,
                'description' => 'Mobile App Customer',
                'metadata' => [
                    'name' => $user->name,
                ],
            ]);

            // 2. Create the PaymentIntent via Stripe SDK with leading backslash
            $paymentIntent = \Stripe\PaymentIntent::create([
                'amount' => $amountToInt,
                'currency' => 'eur',
                'customer' => $customer->id,
                'automatic_payment_methods' => [
                    'enabled' => true,
                    'allow_redirects' => 'always'
                    ],
                'metadata' => [
                    'user_id' => $user->id,
                ],
            ]);

            return response()->json([
                'success' => true,
                'clientSecret' => $paymentIntent->client_secret,
                'paymentIntentId' => $paymentIntent->id,
            ]);

        } catch (\Stripe\Exception\ApiErrorException $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function completeMobileCheckout(Request $request)
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $json_str = file_get_contents('php://input');
        $json_obj = json_decode($json_str);

        // Safely capture payment_intent_id from either source
        $paymentIntentId = $request->payment_intent_id ?? ($json_obj->payment_intent_id ?? null);

        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized user'], 401);
        }

        if (!$paymentIntentId) {
            return response()->json(['success' => false, 'error' => 'Missing payment intent ID in request payload.'], 400);
        }

        try {
            $intent = \Stripe\PaymentIntent::retrieve($paymentIntentId);

            if ($intent->status !== 'succeeded') {
                return response()->json([
                    'success' => false,
                    'error' => 'Payment has not succeeded yet. Status: ' . $intent->status
                ], 400);
            }

            $cartItemsRaw = $request->cart_items ?? ($json_obj->cart_items ?? '[]');
            $cartItems = is_string($cartItemsRaw) ? json_decode($cartItemsRaw, true) : $cartItemsRaw;

            $orderTitles = '';
            if (is_array($cartItems)) {
                foreach ($cartItems as $cartItem) {
                    $orderTitles .= ($cartItem['title'] ?? 'Course') . ', ';
                }
            }
            $orderTitles = rtrim($orderTitles, ', ');

            Order::create([
                'user_id' => $user->id,
                'product_name' => $orderTitles,
                'quantity' => $request->cartQty ?? ($json_obj->cartQty ?? 1),
                'paid' => $request->cartTotal ?? ($json_obj->cartTotal ?? 0),
                'charge_id' => $intent->id,
                'invoice_id' => $intent->id,
                'address' => $request->address ?? ($json_obj->address ?? ''),
                'city' => $request->city ?? ($json_obj->city ?? ''),
                'county' => $request->county ?? ($json_obj->county ?? ''),
                'country' => $request->country ?? ($json_obj->country ?? ''),
                'status' => 'paid',
            ]);

            if (is_array($cartItems)) {
                foreach ($cartItems as $cartItem) {
                    $quantity = $cartItem['quantity'] ?? 1;
                    for ($i = 0; $i < $quantity; $i++) {
                        $package = new Package();
                        $package->product_id = $cartItem['id'] ?? 1;
                        $package->user_id = $user->id;
                        $package->course_name = $cartItem['title'] ?? 'Course';
                        $package->status = "purchased";
                        $package->save();
                    }
                }
            }

            return response()->json([
                "success" => true,
                "message" => "Payment verified and order generated successfully."
            ]);

        } catch (\Stripe\Exception\ApiErrorException $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 400);
        }
    }
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
