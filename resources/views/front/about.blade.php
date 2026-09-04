@extends('front.app')

@section('content')
    <div class="enterprise-about-wrapper">
        <div class="enterprise-container">

            <!-- Hero Header -->
            <div class="enterprise-hero">
                <div class="hero-badge">
                    <span class="pulse-dot"></span> Official Compliance Portal
                </div>
                <h1 class="enterprise-main-title">About Our Organization</h1>
                <p class="enterprise-lead-text">
                    Delivering standardized workplace safety education and operational compliance training across Ireland via <span class="highlight-domain">ireland-safetycourse.com</span>.
                </p>
            </div>

            <!-- Bento Grid Layout for Content Cards -->
            <div class="enterprise-bento-grid">

                <!-- Corporate Identity & Legal Structure -->
                <div class="bento-card span-two primary-accent">
                    <div class="card-top-row">
                        <div class="icon-badge">🏛️</div>
                        <span class="card-category">Corporate Governance</span>
                    </div>
                    <h3 class="bento-title">Corporate Identity & Legal Structure</h3>
                    <p class="bento-desc">
                        We operate as an authorized educational provider specializing in workplace ergonomics, material handling instruction, and corporate safety modules. Our objective is to deliver standardized operational compliance training for enterprises and independent contractors nationwide.
                    </p>
                    <div class="credentials-flex-box">
                        <div class="cred-pill">
                            <span class="c-label">Legal Entity Name</span>
                            <span class="c-val">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                        </div>
                        <div class="cred-pill">
                            <span class="c-label">Registration Body</span>
                            <span class="c-val">CRO Ireland</span>
                        </div>
                        <div class="cred-pill">
                            <span class="c-label">Registration Number</span>
                            <span class="c-val highlight-num">822301</span>
                        </div>
                        <div class="cred-pill">
                            <span class="c-label">Operational Scope</span>
                            <span class="c-val">Republic of Ireland</span>
                        </div>
                    </div>
                </div>

                <!-- Core Educational Focus & Learning Workflow -->
                <div class="bento-card span-two">
                    <div class="card-top-row">
                        <div class="icon-badge">📚</div>
                        <span class="card-category">Training Methodology</span>
                    </div>
                    <h3 class="bento-title">Core Educational Focus & Process</h3>
                    <p class="bento-desc">
                        Our digital curriculum is structured to support corporate risk management and operational safety education. We specialize in teaching proper lifting mechanics, load management principles, and structural workplace risk reduction.
                    </p>
                    <p class="bento-desc">
                        Every course module ensures corporate teams understand structural compliance, minimizing workplace incidents through verifiable testing assessments and structured video instruction.
                    </p>

                    <!-- Learning Steps Workflow -->
                    <div class="workflow-container mt-4">
                        <h4 class="workflow-heading">How Our Online Training Works</h4>
                        <div class="modern-steps-grid four-cols">
                            <div class="step-card-item">
                                <div class="step-number-tag">01</div>
                                <h4>Secure Enrollment</h4>
                                <p>After you create an account, you can purchase a course and start immediately.</p>
                            </div>
                            <div class="step-card-item">
                                <div class="step-number-tag">02</div>
                                <h4>Video Modules</h4>
                                <p>Learn at your own pace through self-paced online video lessons accessible 24/7 across all devices.</p>
                            </div>
                            <div class="step-card-item">
                                <div class="step-number-tag">03</div>
                                <h4>Interactive Test</h4>
                                <p>Complete the integrated multi-choice test following the course material to verify your practical comprehension.</p>
                            </div>
                            <div class="step-card-item">
                                <div class="step-number-tag">04</div>
                                <h4>Official Certificate</h4>
                                <p>Instantly download your verifiable digital certificate of completion immediately upon passing the final assessment.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corporate Headquarters & Direct Contact -->
                <div class="bento-card span-two">
                    <div class="card-top-row">
                        <div class="icon-badge">📍</div>
                        <span class="card-category">Support & Location</span>
                    </div>
                    <h3 class="bento-title">Headquarters & Communication</h3>
                    <p class="bento-desc">
                        Open channels for institutional compliance verification and customer support.
                    </p>

                    <div class="contact-grid-modern">
                        <div class="address-box-modern">
                            <strong>Registered Office Address</strong><br>
                            PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED<br>
                            51 Bracken Road<br>
                            Dublin, D18 CV48<br>
                            Ireland
                        </div>
                        <div class="contact-box-modern">
                            <div class="c-row">
                                <span>Support Email:</span>
                                <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a>
                            </div>
                            <div class="c-row">
                                <span>Live Chat:</span>
                                <strong>Active On-Site</strong>
                            </div>
                            <div class="c-row">
                                <span>Operational Hours:</span>
                                <strong>Mon – Fri, 9:00 AM – 10:00 PM</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transparency Statement -->
                <div class="bento-card span-two transparency-card">
                    <div class="trust-content-wrapper">
                        <div class="trust-icon">🛡️</div>
                        <div>
                            <h3 class="bento-title text-white">Transparency & Compliance Assurance</h3>
                            <p class="bento-desc text-slate mb-0">
                                This platform operates exclusively as an educational delivery network. All digital transactions, data protection protocols, and course completions are fully transparent, backed by verified corporate registration within the Republic of Ireland.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <style>
        /* Strict X-Axis Containment & 95% Mobile Sizing Optimization */
        html, body {
            width: 100%;
            max-width: 100%;
            overflow-x: hidden !important;
            margin: 0;
            padding: 0;
        }

        .enterprise-about-wrapper *,
        .enterprise-about-wrapper *::before,
        .enterprise-about-wrapper *::after {
            box-sizing: border-box;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .enterprise-about-wrapper {
            width: 100%;
            max-width: 100vw;
            overflow-x: hidden;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            padding: 4rem 0;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #1e293b;
            display: flex;
            justify-content: center;
        }

        .enterprise-container {
            width: 95%;
            max-width: 1100px;
            margin: 0 auto;
            overflow-x: hidden;
        }

        /* Hero Section */
        .enterprise-hero {
            text-align: center;
            margin-bottom: 3.5rem;
            padding: 0 0.5rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            background: #e0f2fe;
            border: 1px solid #bae6fd;
            color: #0369a1;
            font-size: 0.95rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            padding: 0.5rem 1.25rem;
            border-radius: 50px;
            margin-bottom: 1.25rem;
        }

        .pulse-dot {
            width: 10px;
            height: 10px;
            background-color: #0284c7;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(2, 132, 199, 0.4); }
            70% { box-shadow: 0 0 0 10px rgba(2, 132, 199, 0); }
            100% { box-shadow: 0 0 0 0 rgba(2, 132, 199, 0); }
        }

        .enterprise-main-title {
            font-size: clamp(2.2rem, 5vw, 3.75rem);
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }

        .enterprise-lead-text {
            font-size: 1.2rem;
            color: #334155;
            max-width: 750px;
            margin: 0 auto;
            line-height: 1.7;
        }

        .highlight-domain {
            color: #2563eb;
            font-weight: 700;
            word-break: break-all;
        }

        /* Bento Grid Architecture */
        .enterprise-bento-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1.5rem;
            width: 100%;
            max-width: 100%;
        }

        .bento-card {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 24px;
            padding: 2.25rem;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            display: flex;
            flex-direction: column;
            width: 100%;
            min-width: 0;
            overflow: hidden;
        }

        .bento-card.primary-accent {
            border-left: 5px solid #2563eb;
        }

        .bento-card:hover {
            border-color: #94a3b8;
            transform: translateY(-3px);
            box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.08);
        }

        .bento-card.span-two {
            grid-column: span 2;
        }

        .card-top-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.25rem;
            gap: 1rem;
        }

        .icon-badge {
            font-size: 1.5rem;
            background: #f8fafc;
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            border: 1px solid #cbd5e1;
            flex-shrink: 0;
        }

        .card-category {
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: #475569;
            background: #e2e8f0;
            padding: 0.3rem 0.75rem;
            border-radius: 20px;
            text-align: right;
        }

        .bento-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.02em;
            margin-bottom: 0.75rem;
        }

        .bento-desc {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #334155;
            margin-bottom: 1.25rem;
        }

        /* Credentials Grid inside Bento */
        .credentials-flex-box {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-top: auto;
            background: #f8fafc;
            padding: 1.25rem;
            border-radius: 16px;
            border: 1px solid #cbd5e1;
            width: 100%;
            min-width: 0;
        }

        .cred-pill {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
            min-width: 0;
        }

        .c-label {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #475569;
        }

        .c-val {
            font-size: 1rem;
            font-weight: 700;
            color: #0f172a;
            word-break: break-word;
        }

        .highlight-num {
            color: #2563eb;
            font-size: 1.1rem;
        }

        /* Workflow Container Styles */
        .workflow-container {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 16px;
            padding: 1.25rem;
            margin-top: 1.5rem;
        }

        .workflow-heading {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1rem;
        }

        .modern-steps-grid {
            display: grid;
            gap: 1rem;
            width: 100%;
            min-width: 0;
        }

        .modern-steps-grid.four-cols {
            grid-template-columns: repeat(4, minmax(0, 1fr));
        }

        .step-card-item {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 14px;
            padding: 1.25rem;
            display: flex;
            flex-direction: column;
            position: relative;
            min-width: 0;
            width: 100%;
        }

        .step-number-tag {
            font-size: 0.85rem;
            font-weight: 800;
            color: #2563eb;
            background: #eff6ff;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            margin-bottom: 0.75rem;
        }

        .step-card-item h4 {
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.3rem;
        }

        .step-card-item p {
            font-size: 0.85rem;
            color: #334155;
            line-height: 1.45;
            margin: 0;
        }

        /* Contact & Address Grid Modern */
        .contact-grid-modern {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
            margin-top: auto;
        }

        .address-box-modern, .contact-box-modern {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 16px;
            padding: 1.25rem;
            font-size: 1rem;
            line-height: 1.65;
            color: #1e293b;
            min-width: 0;
        }

        .contact-box-modern {
            display: flex;
            flex-direction: column;
            gap: 0.75rem;
            justify-content: center;
        }

        .c-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px dashed #cbd5e1;
            padding-bottom: 0.5rem;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .c-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .c-row a {
            color: #2563eb;
            text-decoration: none;
            font-weight: 700;
            word-break: break-all;
        }

        .c-row a:hover {
            text-decoration: underline;
        }

        /* Transparency Card */
        .transparency-card {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            border: none;
        }

        .trust-content-wrapper {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .trust-icon {
            font-size: 2.5rem;
            background: rgba(59, 130, 246, 0.1);
            width: 70px;
            height: 70px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            flex-shrink: 0;
            border: 1px solid rgba(59, 130, 246, 0.2);
        }

        .text-white { color: #ffffff !important; }
        .text-slate { color: #94a3b8 !important; }
        .mb-0 { margin-bottom: 0; }
        .mt-4 { margin-top: 1.5rem; }

        /* Responsive Breakpoints */
        @media (max-width: 900px) {
            .enterprise-container {
                width: 95%;
            }
            .enterprise-bento-grid {
                grid-template-columns: minmax(0, 1fr);
            }
            .bento-card.span-two {
                grid-column: span 1;
            }
            .modern-steps-grid.four-cols,
            .credentials-flex-box,
            .contact-grid-modern {
                grid-template-columns: minmax(0, 1fr);
            }
            .enterprise-about-wrapper {
                padding: 2.5rem 0;
            }
            .bento-card {
                padding: 1.25rem;
                border-radius: 16px;
            }
            .bento-title {
                font-size: 1.15rem;
            }
            .bento-desc {
                font-size: 0.95rem;
            }
            .trust-content-wrapper {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
    </style>
@endsection
