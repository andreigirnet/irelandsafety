@extends('front.app')
@section('content')
    <style>
        .compliance-wrapper {
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            min-height: 100vh;
            padding: 4rem 1rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }
        .compliance-container {
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 16px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            border: 1px solid #e2e8f0;
        }
        .compliance-header {
            background: #0f172a;
            color: #ffffff;
            padding: 3rem 2.5rem;
            position: relative;
        }
        .compliance-header h1 {
            font-size: 2.25rem;
            font-weight: 800;
            letter-spacing: -0.025em;
            margin: 0 0 0.5rem 0;
            line-height: 1.2;
        }
        .compliance-header p {
            color: #94a3b8;
            font-size: 0.95rem;
            margin: 0;
        }
        .compliance-body {
            padding: 2.5rem;
        }
        .compliance-section {
            margin-bottom: 2.5rem;
        }
        .compliance-section h2 {
            font-size: 1.35rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }
        .compliance-section h2::before {
            content: "";
            display: inline-block;
            width: 6px;
            height: 20px;
            background: #3b82f6;
            margin-right: 10px;
            border-radius: 3px;
        }
        .compliance-text {
            color: #475569;
            line-height: 1.7;
            font-size: 1.05rem;
            margin-bottom: 1rem;
        }
        .compliance-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.75rem;
            box-shadow: inset 0 2px 4px 0 rgba(0, 0, 0, 0.01);
        }
        .compliance-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .compliance-list li {
            position: relative;
            padding-left: 1.75rem;
            margin-bottom: 1rem;
            color: #475569;
            line-height: 1.6;
        }
        .compliance-list li::before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #2563eb;
            font-weight: 900;
            font-size: 1.1rem;
        }
        .compliance-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.25rem;
        }
        .compliance-grid-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 1.25rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .compliance-grid-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        .compliance-grid-item .label {
            font-weight: 700;
            color: #1e293b;
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 0.35rem;
        }
        .compliance-grid-item .value {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            word-break: break-word;
        }
        .compliance-links {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            margin-top: 1rem;
        }
        .compliance-links a {
            background: #eff6ff;
            color: #1d4ed8;
            padding: 0.75rem 1.25rem;
            border-radius: 8px;
            font-weight: 600;
            font-size: 0.95rem;
            text-decoration: none;
            border: 1px solid #dbeafe;
            transition: background 0.2s ease, color 0.2s ease;
        }
        .compliance-links a:hover {
            background: #2563eb;
            color: #ffffff;
        }
        @media (max-width: 768px) {
            .compliance-wrapper {
                padding: 1.5rem 0.5rem;
            }
            .compliance-header {
                padding: 2rem 1.5rem;
            }
            .compliance-header h1 {
                font-size: 1.75rem;
            }
            .compliance-body {
                padding: 1.5rem;
            }
            .compliance-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>

    <main class="compliance-wrapper">
        <div class="compliance-container">

            <!-- Header -->
            <div class="compliance-header">
                <h1>Accreditation & Compliance Standards</h1>
                <p>Last updated: August 2026</p>
            </div>

            <div class="compliance-body">
                <!-- Introduction / Transparency Statement -->
                <section class="compliance-section">
                    <h2>Institutional Overview & Transparency</h2>
                    <p class="compliance-text">
                        Welcome to our official Compliance and Educational Standards page. We are committed to complete transparency regarding our course programming, curriculum design, and the nature of the certificates we issue. Reviewing this document ensures clarity for all prospective students, corporate partners, and advertising networks regarding our operational scope.
                    </p>
                </section>

                <!-- Nature of Certificates & Compliance Framework -->
                <section class="compliance-section">
                    <div class="compliance-card">
                        <h2 style="margin-top:0;">Curriculum Compliance & Professional Certification</h2>
                        <p class="compliance-text">
                            Our courses are designed and structured to be <strong>industry-compliant</strong>, adhering strictly to modern professional best practices, operational benchmarks, and technical requirements.
                        </p>
                        <ul class="compliance-list">
                            <li><strong>Certificate of Completion:</strong> Upon successfully finalizing our training programs, students receive a professional Certificate of Completion.</li>
                            <li><strong>Non-Academic Credit:</strong> Our programs provide professional skill development and continuing education enrichment. They do <strong>not</strong> grant formal college credits, academic degrees, or state-sanctioned occupational licenses unless explicitly indicated.</li>
                            <li><strong>Regulatory Alignment:</strong> While our training is built to align with current industry standards and technical guidelines, students are solely responsible for checking local or regional occupational licensing prerequisites in their specific jurisdiction.</li>
                        </ul>
                    </div>
                </section>

                <!-- Business Identity & Verification -->
                <section class="compliance-section">
                    <h2>Entity Verification & Contact Information</h2>
                    <p class="compliance-text">
                        We operate as a registered digital education provider. To comply with consumer protection standards and platform advertising guidelines, our core business credentials are listed below:
                    </p>
                    <div class="compliance-grid">
                        <div class="compliance-grid-item">
                            <div class="label">Legal Business Name</div>
                            <p class="value">{{ config('global.business_name') }}</p>
                        </div>
                        <div class="compliance-grid-item">
                            <div class="label">Registration / Tax ID</div>
                            <p class="value">{{ config('global.business_number') }}</p>
                        </div>
                        <div class="compliance-grid-item">
                            <div class="label">Corporate Headquarters</div>
                            <p class="value">{{ config('global.business_address') }}</p>
                        </div>
                        <div class="compliance-grid-item">
                            <div class="label">Support Contact</div>
                            <p class="value">Email: info@ireland-safetycourse.com</p>
                        </div>
                    </div>
                </section>

                <!-- Terms, Refunds, and Disclaimers -->
                <section class="compliance-section" style="margin-bottom: 0;">
                    <h2>Consumer Policies & Disclaimers</h2>
                    <p class="compliance-text">
                        For detailed information regarding user agreements, payment safety, and our satisfaction guarantees, please review our core legal documents:
                    </p>
                    <div class="compliance-links">
                        <a href="/terms">Terms of Service</a>
                        <a href="/privacy">Privacy Policy</a>
                        <a href="/refund-policy">Refund Policy</a>
                    </div>
                </section>
            </div>

        </div>
    </main>
@endsection
