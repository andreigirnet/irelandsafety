@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
    <style>
        [x-cloak] { display: none !important; }

        /* Global Background Tweak */
        .content-page { background-color: #f4f7fa; }

        /* Left Side: Items */
        .items-container { flex: 1; }
        .cart-item {
            background: #ffffff;
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            gap: 20px;
            border: 1px solid #f1f5f9;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.02), 0 2px 4px -1px rgba(0, 0, 0, 0.01);
            transition: all 0.3s ease;
            position: relative;
        }

        .cart-wrapper {
            display: flex;
            column-gap: 20px;
        }

        .cart-sidebar {
            width: 400px;
            position: sticky;
            top: 100px;
            height: fit-content;
        }

        .item-image-placeholder {
            width: 80px; height: 80px; border-radius: 12px;
            background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%);
            display: flex; align-items: center; justify-content: center;
            color: white; font-size: 30px; margin-right: 0;
            flex-shrink: 0;
        }

        .item-main-info { flex: 1; }
        .item-title { font-size: 18px; font-weight: 700; color: #1e293b; margin-bottom: 4px; }
        .item-meta { font-size: 13px; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }

        /* Quantity Pill */
        .qty-pill {
            display: flex; align-items: center; justify-content: space-between;
            background: #f8fafc; border: 1px solid #e2e8f0;
            border-radius: 99px; padding: 6px 16px; margin: 0 20px;
        }
        .qty-btn {
            background: none; border: none; font-size: 18px; font-weight: bold;
            color: #64748b; cursor: pointer; padding: 0 10px; transition: color 0.2s;
        }
        .qty-btn:hover { color: #6366f1; }
        .qty-num { width: 30px; text-align: center; border: none; background: none; font-weight: 700; color: #1e293b; }

        /* Right Side: Sidebar Summary */
        .summary-glass {
            background: #ffffff;
            border-radius: 24px;
            padding: 32px;
            border: 1px solid rgba(255,255,255,0.8);
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.08);
        }

        .summary-title { font-size: 22px; font-weight: 800; color: #0f172a; margin-bottom: 24px; }

        .row-detail { display: flex; justify-content: space-between; margin-bottom: 16px; font-size: 15px; color: #64748b; }
        .row-total {
            display: flex; justify-content: space-between;
            margin-top: 24px; padding-top: 24px;
            border-top: 2px dashed #f1f5f9;
            font-size: 24px; font-weight: 800; color: #0f172a;
        }

        .discount-tag {
            background: #f0fdf4; color: #16a34a;
            padding: 8px 16px; border-radius: 12px;
            font-size: 13px; font-weight: 600; margin-bottom: 24px;
            display: flex; align-items: center; gap: 8px;
        }

        .checkout-button {
            width: 100%; padding: 18px; border-radius: 16px;
            background: #0f172a; color: white; border: none;
            font-size: 16px; font-weight: 700; cursor: pointer;
            transition: all 0.3s ease; box-shadow: 0 10px 15px -3px rgba(15, 23, 42, 0.3);
            margin-top: 10px;
        }
        .checkout-button:hover { background: #334155; transform: scale(1.02); }

        .delete-circle {
            width: 40px; height: 40px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            background: #fff1f2; color: #e11d48; cursor: pointer; transition: 0.2s;
        }
        .delete-circle:hover { background: #ffe4e6; transform: rotate(90deg); }

        /* Mobile Responsive Optimizations (Screens under 768px) */
        @media (max-width: 768px) {
            .cart-wrapper{
                flex-direction: column;
                column-gap: 0;
            }
            .cart-sidebar {
                width: 100% !important;
                position: static !important;
            }

            .cart-item {
                flex-direction: row;
                align-items: center;
                padding: 14px;
                gap: 12px;
                border-radius: 12px;
            }

            .item-image-placeholder,
            .item-image-wrapper {
                width: 64px !important;
                height: 64px !important;
                min-width: 64px !important;
                font-size: 20px !important;
                border-radius: 10px !important;
                margin-right: 0 !important;
            }

            .item-main-info {
                flex: 1;
                margin-bottom: 0 !important;
            }

            .item-title {
                font-size: 14px !important;
                font-weight: 600;
                color: #0f172a;
                line-height: 1.25;
                margin-bottom: 2px;
            }

            .item-meta {
                font-size: 11px !important;
            }

            .qty-pill {
                width: auto !important;
                margin: 0 !important;
                padding: 2px 8px !important;
            }

            .qty-btn {
                font-size: 14px !important;
                padding: 0 6px !important;
            }

            .qty-num {
                width: 20px !important;
                font-size: 13px !important;
            }

            .delete-circle {
                width: 32px !important;
                height: 32px !important;
                background: #fff1f2 !important;
                color: #e11d48 !important;
                box-shadow: none !important;
                position: static !important;
                flex-shrink: 0;
            }
        }
    </style>

    @include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Basket'])

    <div class="container-fluid" x-data="cartApp()" x-cloak>

        <template x-if="$store.cart.items.length === 0">
            <div style="text-align: center; padding: 120px 20px;">
                <div style="background: #e2e8f0; width: 100px; height: 100px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 24px;">
                    🛒
                </div>
                <h1 style="font-weight: 800; color: #1e293b;">Your basket is empty</h1>
                <p style="color: #64748b; margin-bottom: 32px;">Start adding courses to build your career!</p>
                <a href="/home" class="btn btn-dark px-4 py-2 rounded-pill">Find Courses</a>
            </div>
        </template>

        <div x-show="$store.cart.items.length > 0" class="cart-wrapper">

            <div class="items-container">
                <template x-for="(item, index) in $store.cart.items" :key="item.id">
                    <div class="cart-item">
                        <div class="item-image-wrapper" style="width: 80px; height: 80px; flex-shrink: 0; border-radius: 12px; overflow: hidden; background: #f1f5f9;">
                            <template x-if="item.image">
                                <img :src="$store.cart.getImageUrl(item.image)"
                                     :alt="item.title"
                                     style="width: 100%; height: 100%; object-fit: cover;">
                            </template>

                            <template x-if="!item.image">
                                <div style="width: 100%; height: 100%; display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #6366f1 0%, #a855f7 100%); color: white; font-size: 24px;">
                                    🎓
                                </div>
                            </template>
                        </div>

                        <div class="item-main-info">
                            <div class="item-meta" x-text="'REF: 00' + item.id"></div>
                            <div class="item-title" x-text="item.title"></div>
                            <div style="font-weight: 700; color: #6366f1;">
                                <span x-text="Number(item.price).toFixed(2)"></span> €
                            </div>
                        </div>

                        <div class="qty-pill">
                            <button class="qty-btn" @click="$store.cart.updateQty(item.id, item.quantity - 1)">−</button>
                            <input class="qty-num" type="number" x-model.number="item.quantity" @input="$store.cart.updateQty(item.id, item.quantity)" min="1">
                            <button class="qty-btn" @click="$store.cart.updateQty(item.id, item.quantity + 1)">+</button>
                        </div>

                        <div class="delete-circle" @click="$store.cart.removeItem(item.id)">
                            <img src="{{ asset('images/icons/bin.png') }}" style="width: 16px;" alt="delete">
                        </div>
                    </div>
                </template>
            </div>

            <aside class="cart-sidebar">
                <div class="summary-glass">
                    <div class="summary-title">Order Details</div>

                    <div class="row-detail">
                        <span>Course Subtotal</span>
                        <span style="font-weight: 700; color: #1e293b;" x-text="$store.cart.cartSubTotal().toFixed(2) + ' €'"></span>
                    </div>

                    <div class="row-detail">
                        <span>Tax (Estimated)</span>
                        <span style="font-weight: 700; color: #1e293b;">0.00 €</span>
                    </div>

                    <template x-if="$store.cart.cartTotalQty() > 9">
                        <div class="discount-tag">
                            <span>✨ Bulk Discount Applied!</span>
                            <span style="margin-left: auto;">-10%</span>
                        </div>
                    </template>

                    <div x-show="$store.cart.cartTotalQty() < 10" style="padding: 12px; background: #fffbeb; border-radius: 12px; color: #92400e; font-size: 12px; margin-bottom: 20px;">
                        Add <strong x-text="10 - $store.cart.cartTotalQty()"></strong> more course(s) to get a 10% discount!
                    </div>

                    <div class="row-total">
                        <span>Total</span>
                        <span x-text="$store.cart.cartTotal(discount) + ' €'"></span>
                    </div>

                    <a :href="$store.cart.items.length > 0 ? '/checkout' : '/cart'">
                        <button class="checkout-button">
                            Complete Purchase
                        </button>
                    </a>
                </div>
            </aside>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('cart', {
                items: JSON.parse(localStorage.getItem('cart') || '[]'),
                save() { localStorage.setItem('cart', JSON.stringify(this.items)) },
                removeItem(id){
                    this.items = this.items.filter(i => i.id !== id);
                    this.save();
                },
                getImageUrl(path) {
                    if (!path) return '';
                    // If it's already a full URL, return it
                    if (path.startsWith('http')) return path;
                    const baseAssetPath = "{{ asset('images/productAdd') }}/";
                    return baseAssetPath + path;
                },
                updateQty(id, qty){
                    let item = this.items.find(i => i.id === id);
                    if(item){
                        item.quantity = Math.max(1, qty);
                        this.save();
                    }
                },
                cartSubTotal(){
                    return this.items.reduce((sum, i) => sum + (Number(i.price) * i.quantity), 0);
                },
                cartTotalQty(){
                    return this.items.reduce((sum, i) => sum + i.quantity, 0);
                },
                cartTotal(discount = 0){
                    let total = this.cartSubTotal();
                    if(this.cartTotalQty() > 9) total = total * (1 - discount / 100);
                    return total.toFixed(2);
                }
            });
        });

        function cartApp() {
            return {
                discount: 10
            }
        }
    </script>
@endsection
