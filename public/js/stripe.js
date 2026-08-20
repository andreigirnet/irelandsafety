document.addEventListener('DOMContentLoaded', () => {
    if (!window.stripeKey) {
        console.error('Stripe key is missing.');
        return;
    }

    const stripe = Stripe(window.stripeKey);

    // Grab dynamic amount from the hidden input
    const cartTotalInput = document.getElementById('cartTotal');
    const currentTotalValue = cartTotalInput ? parseFloat(cartTotalInput.value) || 25 : 25;
    const amountInCents = Math.round(currentTotalValue * 100);

    // 1. Initialize Elements instance cleanly
    const elements = stripe.elements({
        mode: 'payment',
        amount: amountInCents,
        currency: 'eur'
    });

    // 2. Mount Express Checkout (Strictly Google Pay and Apple Pay)
    const expressContainer = document.getElementById('express-checkout-element');
    let expressCheckoutElement = null;
    if (expressContainer) {
        expressCheckoutElement = elements.create('expressCheckout', {
            buttonType: {
                applePay: 'buy',
                googlePay: 'buy'
            },
            buttonHeight: 50,
            paymentMethods: {
                applePay: 'always',
                googlePay: 'always',
                link: 'never',
                paypal: 'never',
                klarna: 'never',
                amazonPay: 'never'
            }
        });
        expressCheckoutElement.mount('#express-checkout-element');
    }

    // 3. Mount Standard Payment Element with clean layout options to remove unwanted side tabs
    const paymentContainer = document.getElementById('payment-element');
    if (paymentContainer) {
        const paymentElement = elements.create('payment', {
            layout: {
                type: 'accordion',
                defaultCollapsed: false,
                radios: false,
                spacedAccordionItems: false
            }
        });
        paymentElement.mount('#payment-element');
    }

    const form = document.getElementById('payment-form');
    const button = document.getElementById('submit');
    if (button) {
        button.style.display = 'block';
        button.disabled = false;
    }

    const getCheckoutPayload = () => {
        const liveTotal = document.getElementById('cartTotal')?.value || currentTotalValue;
        return {
            address: document.getElementById('address')?.value || '',
            county: document.getElementById('county')?.value || '',
            city: document.getElementById('city')?.value || '',
            country: document.getElementById('country')?.value || '',
            cartTotal: liveTotal,
            cartQty: document.getElementById('cartQty')?.value || 0,
            cart_items: document.getElementById('cart_items')?.value || '[]',
            userId: document.getElementById('userId')?.value || ''
        };
    };

    // Card Form Submission Handler
    if (form) {
        form.addEventListener('submit', async (event) => {
            event.preventDefault();
            if (button) {
                button.disabled = true;
                button.style.opacity = '0.7';
            }
            const errorElement = document.getElementById('error-message');
            if (errorElement) errorElement.textContent = '';

            const { error: submitError } = await elements.submit();
            if (submitError) {
                if (errorElement) errorElement.textContent = submitError.message;
                if (button) {
                    button.disabled = false;
                    button.style.opacity = '1';
                }
                return;
            }

            try {
                const res = await fetch('/payment', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                    },
                    body: JSON.stringify(getCheckoutPayload()),
                });

                const data = await res.json();

                if (data.error) {
                    if (errorElement) errorElement.textContent = data.error;
                    if (button) { button.disabled = false; button.style.opacity = '1'; }
                    return;
                }

                const clientSecret = data.clientSecret || data.client_secret;
                localStorage.removeItem('cart');

                const { error } = await stripe.confirmPayment({
                    elements,
                    clientSecret: clientSecret,
                    confirmParams: {
                        return_url: window.location.origin + '/payment/success',
                    },
                });

                if (error) {
                    if (errorElement) errorElement.textContent = error.message;
                    if (button) {
                        button.disabled = false;
                        button.style.opacity = '1';
                    }
                }
            } catch (err) {
                console.error(err);
                if (errorElement) errorElement.textContent = 'An unexpected network error occurred.';
                if (button) { button.disabled = false; button.style.opacity = '1'; }
            }
        });
    }

    // Express Checkout Confirmation Handler (Google Pay / Apple Pay)
    if (expressCheckoutElement) {
        expressCheckoutElement.on('confirm', async (event) => {
            const errorElement = document.getElementById('error-message');
            if (errorElement) errorElement.textContent = '';

            const res = await fetch('/payment', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || ''
                },
                body: JSON.stringify({
                    wallet_payment: true,
                    ...getCheckoutPayload()
                }),
            });

            const paymentResponse = await res.json();

            if (paymentResponse.error) {
                if (errorElement) errorElement.textContent = paymentResponse.error;
                return;
            }

            const clientSecret = paymentResponse.clientSecret || paymentResponse.client_secret;

            if (clientSecret) {
                const result = await stripe.confirmPayment({
                    elements,
                    clientSecret: clientSecret,
                    confirmParams: {
                        return_url: window.location.origin + '/payment/success'
                    },
                    redirect: 'if_required'
                });

                if (result.error) {
                    if (errorElement) errorElement.textContent = result.error.message;
                } else {
                    localStorage.removeItem('cart');
                    window.location.href = window.location.origin + '/payment/success';
                }
            }
        });
    }
});
