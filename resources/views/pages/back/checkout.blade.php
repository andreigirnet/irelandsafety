@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <style>
        [x-cloak] { display: none !important; }

        /* Overall Layout */
        .checkout-wrapper { display: flex; gap: 30px; margin-top: 25px; align-items: flex-start; }
        .main-form-section { flex: 1; background: #ffffff; border-radius: 24px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.03); border: 1px solid #f1f5f9; }
        .side-summary-section { width: 420px; position: sticky; top: 110px; }

        /* Unified High-End Input Styling */
        .custom-input-group { margin-bottom: 22px; width: 100%; }
        .custom-input-group label { font-weight: 700; color: #334155; font-size: 12px; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 8px; display: block; }

        .custom-field {
            width: 100% !important;
            height: 52px !important;
            padding: 0 18px !important;
            border-radius: 12px !important;
            border: 2px solid #cbd5e1 !important;
            background: #f8fafc !important;
            transition: all 0.2s ease !important;
            font-weight: 500 !important;
            font-size: 15px !important;
            color: #0f172a !important;
            box-sizing: border-box !important;
            outline: none !important;
        }

        .custom-field::placeholder { color: #94a3b8 !important; }

        .custom-field:focus {
            border-color: #6366f1 !important;
            background: #ffffff !important;
            box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.12) !important;
        }

        /* Stripe Card Element Box (Completely untouched structure per request) */
        #card-element { padding: 14px 16px; border-radius: 12px; border: 2px solid #cbd5e1; background: #f8fafc; margin-bottom: 10px; }

        /* Summary Card */
        .glass-summary { background: #0f172a; color: #fff; border-radius: 28px; padding: 35px; box-shadow: 0 25px 50px -12px rgba(15, 23, 42, 0.25); }
        .item-row { display: flex; align-items: center; gap: 15px; padding-bottom: 15px; border-bottom: 1px solid rgba(255,255,255,0.08); margin-bottom: 15px; }
        .item-thumb { width: 60px; height: 60px; border-radius: 12px; object-fit: cover; background: #1e293b; border: 1px solid rgba(255,255,255,0.1); }

        /* Discount Progress Bar */
        .discount-meter { background: rgba(255,255,255,0.1); border-radius: 10px; height: 8px; margin: 15px 0; overflow: hidden; }
        .discount-progress { background: #10b981; height: 100%; transition: width 0.5s ease; }

        /* Main Action Button */
        .pay-button {
            width: 100%; background: linear-gradient(135deg, #6366f1 0%, #4f46e5 100%);
            color: white; border: none; padding: 18px; border-radius: 16px;
            font-weight: 800; font-size: 17px; cursor: pointer; transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(79, 70, 229, 0.3);
        }
        .pay-button:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(79, 70, 229, 0.4); filter: brightness(1.1); }

        @media (max-width: 1100px) { .checkout-wrapper { flex-direction: column; } .side-summary-section { width: 100%; position: static; } }
    </style>

    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Secure Checkout'])

    <div class="container-fluid" x-data="checkoutApp()" x-cloak>
        <div class="checkout-wrapper">

            <div class="main-form-section">
                <div class="d-flex align-items-center gap-3 mb-4">
                    <div style="background: #eef2ff; color: #6366f1; width: 45px; height: 45px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px;">
                        <i class="ri-shield-check-line"></i>
                    </div>
                    <h3 class="fw-bold m-0" style="color: #1e293b;">Payment Information</h3>
                </div>

                <form id="payment-form" method="POST">
                    @csrf
                    <input type="hidden" id="cartTotal" name="cartTotal" :value="$store.cart.cartTotal(discount)">
                    <input type="hidden" id="cartQty" name="cartQty" :value="$store.cart.cartTotalQty()">
                    <input type="hidden" id="cart_items" name="cart_items" :value="JSON.stringify($store.cart.items)">
                    <input type="hidden" id="userId"  name="userId" value="{{auth()->user()->id}}">

                    <div class="custom-input-group">
                        <label>Street Address</label>
                        <input type="text" class="custom-field" id="address" name="address" placeholder="Enter your full address" required>
                    </div>

                    <div class="row">
                        <div class="col-md-6 custom-input-group">
                            <label>County / State</label>
                            <input type="text" class="custom-field" id="county" name="county" placeholder="e.g. Dublin" required>
                        </div>
                        <div class="col-md-6 custom-input-group">
                            <label>City</label>
                            <input type="text" class="custom-field" id="city" name="city" placeholder="e.g. Dublin" required>
                        </div>
                    </div>

                    <div class="custom-input-group mb-4">
                        <label>Country</label>
                        <input type="text" class="custom-field" id="country" name="country" placeholder="e.g. Ireland" required>
                    </div>

                    <div class="pt-3 border-top">

                        <div id="express-checkout-element"></div>
                        <label class="mb-2" style="font-weight: 700; font-size: 12px; color: #334155; text-transform: uppercase; letter-spacing: 0.05em; display: block;">Credit or Debit Card</label>
                        <!-- Card / Standard Payment Element Container -->
                        <div id="payment-element"></div>

                        <!-- Error message container -->
                        <div id="error-message" style="color: #fa755a; margin-top: 15px;"></div>                    </div>

                    <div id="payment-message" class="hidden mt-3"></div>
                </form>
                <button type="submit" form="payment-form" id="submit" class="pay-button">
                    Complete Payment
                </button>
            </div>

            <aside class="side-summary-section">
                <div class="glass-summary">
                    <h4 class="fw-bold mb-4">Your Selection</h4>

                    <div style="max-height: 280px; overflow-y: auto; padding-right: 10px;" class="custom-scrollbar">
                        <template x-for="item in $store.cart.items" :key="item.id">
                            <div class="item-row">
                                <img :src="getImageUrl(item.image)" class="item-thumb">
                                <div style="flex: 1;">
                                    <div class="fw-bold small" x-text="item.title" style="color: #f8fafc; line-height: 1.2; margin-bottom: 4px;"></div>
                                    <div style="font-size: 12px; color: #94a3b8;">Qty: <span x-text="item.quantity"></span> × <span x-text="Number(item.price).toFixed(2)"></span>€</div>
                                </div>
                                <div class="fw-bold" x-text="(item.price * item.quantity).toFixed(2) + '€'"></div>
                            </div>
                        </template>
                    </div>

                    <div class="mt-4 pt-2">
                        <div class="d-flex justify-content-between mb-2">
                            <span style="color: #94a3b8;">Subtotal</span>
                            <span x-text="$store.cart.cartSubTotal().toFixed(2) + '€'"></span>
                        </div>

                        <template x-if="$store.cart.cartTotalQty() > 9">
                            <div class="d-flex justify-content-between mb-2 text-success" style="color: #4ade80 !important; font-weight: 600;">
                                <span>Bulk Discount (10% Off)</span>
                                <span>- <span x-text="($store.cart.cartSubTotal() * 0.1).toFixed(2)"></span>€</span>
                            </div>
                        </template>

                        <template x-if="$store.cart.cartTotalQty() < 10">
                            <div class="mt-3 p-3" style="background: rgba(255,255,255,0.05); border-radius: 12px;">
                                <div class="d-flex justify-content-between small mb-1">
                                    <span style="color: #94a3b8;">Bulk Discount Progress</span>
                                    <span style="color: #f8fafc;" x-text="$store.cart.cartTotalQty() + '/10 items'"></span>
                                </div>
                                <div class="discount-meter">
                                    <div class="discount-progress" :style="'width: ' + ($store.cart.cartTotalQty() * 10) + '%'"></div>
                                </div>
                                <div class="small mt-1" style="font-size: 11px; color: #cbd5e1;">
                                    Add <span x-text="10 - $store.cart.cartTotalQty()"></span> more for 10% off!
                                </div>
                            </div>
                        </template>

                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <span style="font-size: 14px; color: #94a3b8; font-weight: 600;">Grand Total</span>
                            <div class="text-end">
                                <span style="font-size: 28px; font-weight: 800; display: block; line-height: 1;" x-text="$store.cart.cartTotal(discount) + ' €'"></span>
                                <small style="font-size: 10px; color: #64748b; text-transform: uppercase;">SECURE CHECKOUT</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <p style="color: #64748b; font-size: 12px;">
                        <i class="ri-lock-2-line"></i> Encrypted SSL Secure Payment
                    </p>
                </div>
            </aside>
        </div>
    </div>

    <script>
        function checkoutApp() {
            return {
                discount: 10,
                getImageUrl(path) {
                    if (!path) return '';
                    if (path.startsWith('http')) return path;
                    const baseAssetPath = "{{ asset('images/productAdd') }}/";
                    return baseAssetPath + path;
                }
            }
        }
    </script>

    <style>
        /* Custom Scrollbar for dark theme */
        .custom-scrollbar::-webkit-scrollbar { width: 5px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: rgba(255,255,255,0.1); border-radius: 10px; }
    </style>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        window.stripeKey = "{{ env('STRIPE_KEY') }}";
    </script>

    <script src="{{ asset('js/stripe.js') }}"></script>
@endsection
