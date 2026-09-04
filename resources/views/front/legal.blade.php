@extends('front.app')

@section('content')
    <div class="legal-wrapper">
        <div class="legal-container">

            <!-- Hero Header -->
            <div class="legal-hero">
                <span class="legal-badge">Regulatory & Compliance</span>
                <h1 class="legal-title">Legal Information & Disclosures</h1>
                <p class="legal-subtitle">Official terms, governance policies, and statutory compliance framework for PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED.</p>
            </div>

            <!-- Content Grid -->
            <div class="legal-grid">

                <!-- Section 1: Corporate Registration & Governance -->
                <div class="legal-card">
                    <div class="legal-header">
                        <div class="legal-icon">🏛️</div>
                        <h3 class="legal-heading">Corporate Registration & Jurisdiction</h3>
                    </div>
                    <div class="legal-body">
                        <p class="legal-text">
                            This digital platform and its associated services are operated and maintained by <strong>PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</strong>, a legally incorporated entity registered under the laws of the Republic of Ireland.
                        </p>
                        <div class="legal-data-box">
                            <div class="data-row">
                                <span class="d-label">Registered Legal Name</span>
                                <span class="d-val">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                            </div>
                            <div class="data-row">
                                <span class="d-label">Registration Office</span>
                                <span class="d-val">CRO Ireland (Companies Registration Office)</span>
                            </div>
                            <div class="data-row">
                                <span class="d-label">Company Registration Number</span>
                                <span class="d-val highlight">822301</span>
                            </div>
                            <div class="data-row">
                                <span class="d-label">Registered Office Address</span>
                                <span class="d-val">19 Harcourt Street, Dublin, D02 H364, Ireland</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Section 2: Educational Services & Scope -->
                <div class="legal-card">
                    <div class="legal-header">
                        <div class="legal-icon">📜</div>
                        <h3 class="legal-heading">Educational Scope & Operational Terms</h3>
                    </div>
                    <div class="legal-body">
                        <p class="legal-text">
                            We function exclusively as a digital educational provider offering standardized safety modules, ergonomic training content, and professional development programs via <a href="https://ireland-safetycourse.com">ireland-safetycourse.com</a>.
                        </p>
                        <p class="legal-text">
                            All users agree that course completion grants a digital certificate of training participation, verifying that the user has completed our self-paced online curriculum and passed the integrated testing framework.
                        </p>
                    </div>
                </div>

                <!-- Section 3: Pricing, Transactions & Refunds -->
                <div class="legal-card">
                    <div class="legal-header">
                        <div class="legal-icon">💳</div>
                        <h3 class="legal-heading">Transactions, Pricing & Fulfillment Policy</h3>
                    </div>
                    <div class="legal-body">
                        <p class="legal-text">
                            All transactions processed through our platform are billed in Euros (EUR) and are fully itemized prior to checkout. Upon successful digital payment processing, automated credentials are issued instantly granting immediate access to the purchased online portal module.
                        </p>
                        <p class="legal-text mb-0">
                            Because our educational service offers instant digital access and certification processing, refund requests are evaluated on a case-by-case basis before course module completion. For billing disputes or support, contact our team directly at <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a> or via our live chat support.
                        </p>
                    </div>
                </div>

                <!-- Section 4: Contact & Dispute Resolution -->
                <div class="legal-card">
                    <div class="legal-header">
                        <div class="legal-icon">✉️</div>
                        <h3 class="legal-heading">Official Contact & Inquiry Handling</h3>
                    </div>
                    <div class="legal-body">
                        <p class="legal-text">
                            For any regulatory inquiries, legal notices, or consumer support concerns, official communication channels are actively monitored during regular business hours (Monday through Friday, 9:00 AM – 10:00 PM GMT). You can reach us via email, our dedicated contact page, or through our real-time website live chat system.
                        </p>
                        <div class="legal-contact-strip">
                            <div><strong>Email Support:</strong> <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a></div>
                            <div><strong>Instant Assistance:</strong> Available via On-Site Live Chat Widget</div>
                            <div><strong>Governing Law:</strong> Courts and Legislation of the Republic of Ireland</div>
                        </div>
                    </div>
                </div>

                <!-- Section 5: Platform Directory & Transparency Navigation -->
                <div class="legal-card">
                    <div class="legal-header">
                        <div class="legal-icon">🔗</div>
                        <h3 class="legal-heading">Regulatory Directory & Platform Policies</h3>
                    </div>
                    <div class="legal-body">
                        <p class="legal-text">
                            To ensure total transparency for users, participants, and automated compliance evaluators, please review our comprehensive corporate documentation links below:
                        </p>
                        <div class="legal-nav-grid">
                            <a href="{{ route('front.about') }}" class="legal-nav-link">About Our Organization</a>
                            <a href="{{ route('terms') }}" class="legal-nav-link">Terms & Conditions</a>
                            <a href="{{ route('front.privacy') }}" class="legal-nav-link">Privacy & Data Policy</a>
                            <a href="{{ route('front.refund') }}" class="legal-nav-link">Refund Policy</a>
                            <a href="{{ route('front.accreditation') }}" class="legal-nav-link">Accreditations</a>
                            <a href="{{ route('front.cookies') }}" class="legal-nav-link">Cookie Policy</a>
                            <a href="{{ route('front.faq') }}" class="legal-nav-link">Help & FAQ</a>
                            <a href="{{ route('front.contact') }}" class="legal-nav-link">Contact Department</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <style>
        /* Modern Legal Page Stylesheet */
        .legal-wrapper {
            width: 100%;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            padding: 5rem 1.5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #1e293b;
        }

        .legal-container {
            max-width: 950px;
            margin: 0 auto;
        }

        .legal-hero {
            text-align: center;
            margin-bottom: 4rem;
        }

        .legal-badge {
            display: inline-block;
            background: #e0f2fe;
            color: #0369a1;
            font-size: 0.875rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            margin-bottom: 1.25rem;
        }

        .legal-title {
            font-size: 3rem;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }

        .legal-subtitle {
            font-size: 1.15rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
            line-height: 1.6;
        }

        .legal-grid {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .legal-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04);
            padding: 2.5rem;
        }

        .legal-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 1rem;
        }

        .legal-icon {
            font-size: 1.5rem;
            background: #f8fafc;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .legal-heading {
            font-size: 1.3rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0;
        }

        .legal-text {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #334155;
            margin-bottom: 1.25rem;
        }

        .legal-text.mb-0 {
            margin-bottom: 0;
        }

        .legal-data-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 1.25rem;
            margin-top: 1.5rem;
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
        }

        .data-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.95rem;
            border-bottom: 1px dashed #e2e8f0;
            padding-bottom: 0.5rem;
        }

        .data-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .d-label {
            font-weight: 600;
            color: #64748b;
        }

        .d-val {
            font-weight: 700;
            color: #0f172a;
            text-align: right;
        }

        .d-val.highlight {
            color: #2563eb;
        }

        .legal-contact-strip {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.25rem;
            margin-top: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            font-size: 0.95rem;
            color: #475569;
        }

        .legal-contact-strip a {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
        }

        .legal-contact-strip a:hover {
            text-decoration: underline;
        }

        .legal-nav-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.75rem;
            margin-top: 1.25rem;
        }

        .legal-nav-link {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 0.75rem 1rem;
            border-radius: 10px;
            font-size: 0.95rem;
            font-weight: 600;
            color: #2563eb;
            text-decoration: none;
            text-align: center;
            transition: all 0.2s ease;
        }

        .legal-nav-link:hover {
            background: #e0f2fe;
            border-color: #bae6fd;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .legal-title {
                font-size: 2.25rem;
            }
            .legal-card {
                padding: 1.5rem;
            }
            .data-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 0.2rem;
            }
            .d-val {
                text-align: left;
            }
            .legal-nav-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
@endsection
