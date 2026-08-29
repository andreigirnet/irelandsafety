@extends('front.app')

@section('content')
    <style>
        .terms-wrapper {
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            min-height: 100vh;
            padding: 4rem 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .terms-container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .terms-header {
            background: #0f172a;
            color: #ffffff;
            padding: 3rem 2.5rem;
            position: relative;
        }
        .terms-header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }
        .terms-header p {
            color: #94a3b8;
            font-size: 0.95rem;
            margin: 0;
        }
        .terms-body {
            padding: 2.5rem;
        }
        .terms-section {
            margin-bottom: 2.5rem;
        }
        .terms-section h2 {
            font-size: 1.35rem;
            font-weight: 700;
            color: #1e293b;
            margin-top: 2rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        .terms-section h2::before {
            content: "";
            display: inline-block;
            width: 6px;
            height: 20px;
            background: #3b82f6;
            margin-right: 10px;
            border-radius: 3px;
        }
        .terms-section h1.main-title {
            font-size: 1.75rem;
            font-weight: 800;
            color: #1e293b;
            margin-top: 0;
            margin-bottom: 1.5rem;
        }
        .terms-text {
            color: #475569;
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 1rem;
        }
        .terms-text a {
            color: #2563eb;
            text-decoration: underline;
            font-weight: 500;
        }
        .terms-text a:hover {
            color: #1d4ed8;
        }
        .terms-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.75rem;
            box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.01);
            margin-bottom: 1.5rem;
        }
        @media (max-width: 768px) {
            .terms-wrapper {
                padding: 1.5rem 0.5rem;
            }
            .terms-header {
                padding: 2rem 1.5rem;
            }
            .terms-header h1 {
                font-size: 1.75rem;
            }
            .terms-body {
                padding: 1.5rem;
            }
        }
    </style>

    <div class="terms-wrapper" data-aos="fade-up">
        <div class="terms-container">

            <div class="terms-header">
                <h1>Terms & Conditions</h1>
                <p>{{ config('global.business_name') }}</p>
            </div>

            <div class="terms-body">
                <div class="terms-section" style="margin-bottom: 0;">

                    <h1 class="main-title">Terms and Conditions</h1>

                    <p class="terms-text">
                        Welcome to Online Ireland Safety Training! These terms and conditions outline the rules and regulations for using our website at
                        <a href="https://www.ireland-safetycourse.com/" target="_blank">https://www.ireland-safetycourse.com/</a>.
                        By accessing this platform, you agree to comply with these terms. If you do not agree with any part of these terms, please discontinue use of our website immediately.
                    </p>

                    <div class="terms-card" style="margin-top: 1.5rem;">
                        <h2 style="margin-top: 0;">Company Information:</h2>
                        <p class="terms-text" style="margin-bottom: 0;">
                            <strong>Online Irish Safety Training</strong><br>
                            Email: <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a><br>
                            Registered and licensed training provider.
                        </p>
                    </div>

                    <h2>Services & Access:</h2>
                    <p class="terms-text">
                        We provide professional, industry-compliant online safety training modules designed for individuals and businesses across Ireland and Europe. Purchasing a course grants you personal access to complete your training online through our secure browser platform.
                    </p>

                    <h2>Intellectual Property & Content Protection:</h2>
                    <p class="terms-text">
                        All course content, training videos, graphics, text, and logos hosted on this website are the exclusive intellectual property of {{ config('global.business_name') }}. None of our training materials, videos, or course contents may be copied, redistributed, resold, or shared publicly under any circumstances.
                    </p>

                    <h2>User Responsibilities:</h2>
                    <p class="terms-text">
                        Users agree to provide accurate information during registration and to complete their training courses individually. Account sharing or allowing unauthorized individuals to access training modules under another user's profile is strictly prohibited.
                    </p>

                    <h2>Contact Us:</h2>
                    <p class="terms-text" style="margin-bottom: 0;">
                        If you have any questions or require support regarding these terms and conditions, please reach out to our team at
                        <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a>.
                    </p>

                </div>
            </div>

        </div>
    </div>
@endsection
