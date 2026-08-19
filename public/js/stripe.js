const stripe = Stripe(window.stripeKey);
const elements = stripe.elements();

// Set up Stripe.js and Elements to use in checkout form
const style = {
    base: {
        color: "#32325d",
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
            color: "#aab7c4"
        }
    },
    invalid: {
        color: "#fa755a",
        iconColor: "#fa755a"
    },
};

const cardElement = elements.create('card', {
    hidePostalCode: true, // Hide the postal code (zip) field
    style,
});

cardElement.mount('#card-element');
const form = document.getElementById('payment-form');
const button = document.getElementById('submit')
button.disabled = false;

const expressCheckoutElement = elements.create('expressCheckout', {
    buttonType: {
        applePay: 'buy',
        googlePay: 'buy'
    },
    buttonHeight: 50
});

expressCheckoutElement.mount('#express-checkout-element');
form.addEventListener('submit', async (event) => {
    // We don't want to let default form submission happen here,
    // which would refresh the page.
    event.preventDefault();
    button.disabled = true;
    button.style.opacity = '0.7';
    const result = await stripe.createPaymentMethod({
        type: 'card',
        card: cardElement,
        billing_details: {
            // Include any additional collected billing details.
            name: 'Jenny Rosen',
        },
    })

    stripePaymentMethodHandler(result);
});

const stripePaymentMethodHandler = async (result) => {
    if (result.error) {
        // Show error in payment form
        const errorElement = document.getElementById('card-errors');
        errorElement.innerHTML = result.error.message;
        button.disabled = false;
        button.style.opacity = '1';
    } else {
        console.log('Cart Total Element:', document.getElementById('cartTotal'));
        // Otherwise send paymentMethod.id to your server (see Step 4)
        const res = await fetch('/payment', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({
                payment_method_id: result.paymentMethod.id,
                address: document.getElementById('address').value,
                county: document.getElementById('county').value,
                city: document.getElementById('city').value,
                country: document.getElementById('country').value,
                cartTotal: document.getElementById('cartTotal').value,
                cartQty: document.getElementById('cartQty').value,
                cart_items: document.getElementById('cart_items').value,
                userId: document.getElementById('userId').value
            }),
        })
        const paymentResponse = await res.json();
        // Handle server response (see Step 4)
        handleServerResponse(paymentResponse);
    }
}


const handleServerResponse = async (response) => {

    if (response.error) {
        document.getElementById('card-errors').textContent = response.error;
        const button = document.getElementById('submit');
        if (button) { button.disabled = false; button.style.opacity = '1'; }
    }
    else if (response.success) {
        // 2. Clear local storage and redirect to Stripe's 3DS page
        localStorage.removeItem('cart');
        window.location.href = '/payment/success';
    }
    else if (response.requires_action && response.redirect_url) {
        // 👉 Clears cart and redirects the entire browser window straight to Stripe's hosted 3DS flow
        const cart = localStorage.getItem('cart');

        const redirectUrl = new URL(response.redirect_url);
        redirectUrl.searchParams.set('cart', cart);

        localStorage.removeItem('cart');

        window.location.href = redirectUrl.toString();
    }
};


expressCheckoutElement.on('confirm', async (event) => {

    const res = await fetch('/payment', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            wallet_payment: true,
            address: document.getElementById('address').value,
            county: document.getElementById('county').value,
            city: document.getElementById('city').value,
            country: document.getElementById('country').value,
            cartTotal: document.getElementById('cartTotal').value,
            cartQty: document.getElementById('cartQty').value,
            cart_items: document.getElementById('cart_items').value,
            userId: document.getElementById('userId').value
        }),
    });

    const paymentResponse = await res.json();

    if (paymentResponse.error) {
        document.getElementById('card-errors').textContent =
            paymentResponse.error;
        return;
    }

    if (paymentResponse.client_secret) {

        const result = await stripe.confirmPayment({
            elements,
            clientSecret: paymentResponse.client_secret,
            confirmParams: {
                return_url: window.location.origin + '/payment/success'
            },
            redirect: 'if_required'
        });

        if (result.error) {
            document.getElementById('card-errors').textContent =
                result.error.message;
        }
    }
});
