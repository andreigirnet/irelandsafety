<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\CertificateMail;
use App\Mail\ConfirmPaymentMail;
use App\Models\Basket;
use App\Models\Certificate;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Jackiedo\Cart\Cart;
use Stripe\Stripe;



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
            if (isset($json_obj->payment_method_id)) {
                # Create the PaymentIntent
                $customer = \Stripe\Customer::create([
                    'email' => auth()->user()->email,
                    'description' => 'New customer',
                    'metadata' => [
                        'name' => auth()->user()->name,
                    ],
                ]);
                $intent = \Stripe\PaymentIntent::create([
                    'payment_method' => $json_obj->payment_method_id,
                    'amount' => $amountToInt,
                    'currency' => 'eur',
                    'confirmation_method' => 'manual',
                    'confirm' => true,
                    'statement_descriptor' => 'IrelandSafetyCourse',
                    'customer'=> $customer->id,
                    'description' => 'Payment made by '. auth()->user()->email,
                    'return_url' => url('/payment/success')
                ]);
            }
            if (isset($json_obj->payment_intent_id)) {
                $intent = \Stripe\PaymentIntent::retrieve(
                    $json_obj->payment_intent_id
                );
                $intent->confirm();
            }
            $this->generateResponse($intent, $request);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            # Display error on client
            echo json_encode([
                'error' => $e->getMessage()
            ]);
        }

    }
    public function generateResponse($intent, Request $request) {
        # Note that if your API version is before 2019-02-11, 'requires_action'
        # appears as 'requires_source_action'.
        if ($intent->status == 'requires_action' &&
            $intent->next_action->type == 'redirect_to_url') {
            # Tell the client to handle the action
            echo json_encode([
                'requires_action' => true,
                'payment_intent_client_secret' => $intent->client_secret
            ]);
        } else if ($intent->status == 'succeeded') {
            $cartItems = json_decode($request->cart_items, true);

            $orderTitles = '';
            foreach ($cartItems as $cartItem) {
                $orderTitles .= $cartItem['title'] . ', ';
            }

            $orderTitles = rtrim($orderTitles, ', ');

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

            $cartItems = json_decode($request->cart_items, true);

            foreach ($cartItems as $cartItem) {

                for ($i = 0; $i < $cartItem['quantity']; $i++) {

                    $package = new Package();
                    $package->product_id = $cartItem['id'];
                    $package->user_id = auth()->user()->id;
                    $package->course_name = $cartItem['title'];
                    $package->status = "purchased";
                    $package->save();

                }

            }
//            $this->cart->clearItems();

            Mail::to(auth()->user()->email)->send(new ConfirmPaymentMail());

            $request->session()->flash('success', 'Payment has been received successfully');
            echo json_encode([
                "success" => true
            ]);
        } else {
            # Invalid status
            http_response_code(500);
            echo json_encode(['error' => 'Invalid PaymentIntent status']);
        }
    }

    public function processMobileStripePayment(Request $request)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        // Support both raw JSON input body and standard Laravel request payloads
        $json_str = file_get_contents('php://input');
        $json_obj = json_decode($json_str);

        // Safely extract properties handling both JSON payload and standard form request data
        $paymentMethodId = $json_obj->payment_method_id ?? $request->input('payment_method_id');
        $paymentIntentId = $json_obj->payment_intent_id ?? $request->input('payment_intent_id');
        $cartTotal = $request->cartTotal ?? $json_obj->cartTotal ?? 0;

        $amountToInt = round($cartTotal * 100, 0, PHP_ROUND_HALF_UP);
        $intent = null;

        // Get the authenticated user safely
        $user = auth()->user();
        if (!$user) {
            return response()->json(['error' => 'Unauthorized user'], 401);
        }

        try {
            if (!empty($paymentMethodId)) {
                // Create the Customer profile
                $customer = \Stripe\Customer::create([
                    'email' => $user->email,
                    'description' => 'Mobile App Customer',
                    'metadata' => [
                        'name' => $user->name,
                    ],
                ]);

                // Create the PaymentIntent without conflicting manual parameters
                $intent = \Stripe\PaymentIntent::create([
                    'payment_method' => $paymentMethodId,
                    'amount' => $amountToInt,
                    'currency' => 'eur',
                    'confirm' => true,
                    'statement_descriptor' => 'IrelandSafetyCourse',
                    'customer' => $customer->id,
                    'description' => 'Payment made by ' . $user->email,
                    'return_url' => url('/payment/success'),
                    'automatic_payment_methods' => [
                        'enabled' => true,
                        'allow_redirects' => 'never'
                    ]
                ]);
            }

            if (!empty($paymentIntentId)) {
                $intent = \Stripe\PaymentIntent::retrieve($paymentIntentId);
                $intent->confirm();
            }

            return $this->finalizeMobileOrderResponse($intent, $request);

        } catch (\Stripe\Exception\ApiErrorException $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 400);
        }
    }

    public function finalizeMobileOrderResponse($intent, Request $request)
    {
        $user = auth()->user();

        if ($intent->status == 'requires_action' && optional($intent->next_action)->type == 'redirect_to_url') {
            return response()->json([
                'requires_action' => true,
                'payment_intent_client_secret' => $intent->client_secret
            ]);
        }
        else if ($intent->status == 'succeeded') {
            // Decode cart items from request payload safely
            $json_str = file_get_contents('php://input');
            $json_obj = json_decode($json_str);
            $cartItemsRaw = $request->cart_items ?? ($json_obj->cart_items ?? '[]');
            $cartItems = is_string($cartItemsRaw) ? json_decode($cartItemsRaw, true) : $cartItemsRaw;

            $orderTitles = '';
            if (is_array($cartItems)) {
                foreach ($cartItems as $cartItem) {
                    $orderTitles .= ($cartItem['title'] ?? 'Course') . ', ';
                }
            }
            $orderTitles = rtrim($orderTitles, ', ');

            // Create the main Order record preserving all your tracking requirements
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

            // Generate specific package records per item quantity
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

            // Send confirmation email safely
            try {
//                Mail::to($user->email)->send(new ConfirmPaymentMail());
            } catch (\Exception $mailEx) {
                // Log mailing error without crashing payment completion
            }

            if ($request->hasSession()) {
                $request->session()->flash('success', 'Payment has been received successfully');
            }

            return response()->json([
                "success" => true,
                "message" => "Payment processed and order generated successfully."
            ]);
        }
        else {
            return response()->json([
                'success' => false,
                'error' => 'Invalid PaymentIntent status: ' . $intent->status
            ], 500);
        }
    }
    /**
     * Display the specified resource.
     */

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
