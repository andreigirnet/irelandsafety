@extends('front.app')

@section('content')
    <style>
        .refund-wrapper {
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            min-height: 100vh;
            padding: 4rem 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .refund-container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .refund-header {
            background: #0f172a;
            color: #ffffff;
            padding: 3rem 2.5rem;
            position: relative;
        }
        .refund-header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }
        .refund-header p {
            color: #94a3b8;
            font-size: 0.95rem;
            margin: 0;
        }
        .refund-body {
            padding: 2.5rem;
        }
        .refund-section {
            margin-bottom: 2.5rem;
        }
        .refund-section h2 {
            font-size: 1.35rem;
            font-weight: 700;
            color: #1e293b;
            margin-top: 2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        .refund-section h2::before {
            content: "";
            display: inline-block;
            width: 6px;
            height: 20px;
            background: #3b82f6;
            margin-right: 10px;
            border-radius: 3px;
        }
        .refund-section h1.main-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: #1e293b;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }
        .refund-text {
            color: #475569;
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 1rem;
        }
        .refund-text a {
            color: #2563eb;
            text-decoration: underline;
            font-weight: 500;
        }
        .refund-text a:hover {
            color: #1d4ed8;
        }
        .refund-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.75rem;
            box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.01);
            margin-bottom: 1.5rem;
        }
        .refund-list {
            list-style: none;
            padding: 0;
            margin: 0 0 1rem 0;
        }
        .refund-list li {
            position: relative;
            padding-left: 1.75rem;
            margin-bottom: 0.75rem;
            color: #475569;
            line-height: 1.6;
        }
        .refund-list li::before {
            content: "•";
            position: absolute;
            left: 0.5rem;
            color: #2563eb;
            font-weight: 900;
            font-size: 1.25rem;
        }
        @media (max-width: 768px) {
            .refund-wrapper {
                padding: 1.5rem 0.5rem;
            }
            .refund-header {
                padding: 2rem 1.5rem;
            }
            .refund-header h1 {
                font-size: 1.75rem;
            }
            .refund-body {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="refund-wrapper" data-aos="fade-up">
        <div class="refund-container">

            <div class="refund-header">
                <h1>Refund Policy</h1>
                <p>{{ config('global.business_name') }}</p>
            </div>

            <div class="refund-body">
                <div class="refund-section" style="margin-bottom: 0;">

                    <h1 class="main-title">Refund & Cancellation Policy</h1>

                    <p class="refund-text">
                        At <strong>{{ config('global.business_name') }}</strong>, we strive to ensure complete satisfaction with our online training programs provided via
                        <a href="https://www.ireland-safetycourse.com/" target="_blank">https://www.ireland-safetycourse.com/</a>.
                        Please review our policy regarding course purchases, cancellations, and refunds below.
                    </p>

                    <div class="refund-card" style="margin-top: 1.5rem;">
                        <h2 style="margin-top: 0;">Support Contact for Refunds:</h2>
                        <p class="refund-text" style="margin-bottom: 0;">
                            <strong>Online Irish Safety Training</strong><br>
                            Email: <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a>
                        </p>
                    </div>

                    <h2>Eligibility for Refunds:</h2>
                    <p class="refund-text">
                        Because our services involve instant access to digital learning modules, training videos, and courseware, refunds are generally evaluated under the following conditions:
                    </p>
                    <ul class="refund-list">
                        <li><strong>Unaccessed Courses:</strong> If you have purchased a course by mistake or experience technical blockades preventing access, you may request a full refund within 14 days of purchase.</li>
                        <li><strong>Completed Courses:</strong> Once a training module has been fully completed and a certificate of completion has been generated, refund requests can no longer be honored due to the fulfillment of digital delivery. </li>
                        <li><strong>Duplicate Charges:</strong> In the event of a billing error or accidental duplicate payment processed through our secure payment provider (Stripe), a full refund will be issued immediately upon verification.</li>
                    </ul>

                    <h2>How to Request a Refund:</h2>
                    <p class="refund-text">
                        To submit a refund or cancellation inquiry, please email our support team directly at
                        <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a>
                        with your full name, registered email address, transaction reference, and the reason for your request. Alternatively, you can also request a refund directly through our Live Chat support. All valid claims are processed back to your original payment card securely.
                    </p>

                    <h2>Processing Times:</h2>
                    <p class="refund-text" style="margin-bottom: 0;">
                        Once a refund is approved by our team, please allow up to 5 to 10 business days for the funds to reflect back on your card statement, depending on your banking provider or card issuer's processing timelines.
                    </p>

                </div>
            </div>

        </div>
    </div>
@endsection
