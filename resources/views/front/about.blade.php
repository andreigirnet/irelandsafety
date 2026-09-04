@extends('front.app')

@section('content')
    <div class="about-wrapper">
        <div class="about-container">

            <!-- Hero Header -->
            <div class="about-hero">
                <span class="about-badge">Official Compliance Portal</span>
                <h1 class="about-title">About Our Organization</h1>
                <p class="about-subtitle">Delivering standardized workplace safety education and operational compliance training across Ireland.</p>
            </div>

            <!-- Grid Layout for Content Cards -->
            <div class="about-grid">

                <!-- Corporate Identity & Legal Structure -->
                <div class="about-card primary-accent">
                    <div class="about-card-header">
                        <div class="card-icon">🏛️</div>
                        <div>
                            <h3 class="about-card-title">Corporate Identity & Legal Structure</h3>
                            <p class="about-card-subtitle">Verified business credentials and registration data</p>
                        </div>
                    </div>
                    <div class="about-card-body">
                        <p class="about-text">
                            We operate as an authorized educational provider specializing in workplace ergonomics, material handling instruction, and corporate safety modules. Our objective is to deliver standardized operational compliance training for enterprises and independent contractors nationwide.
                        </p>
                        <div class="about-data-grid">
                            <div class="data-item">
                                <span class="data-label">Legal Entity Name</span>
                                <span class="data-value">PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</span>
                            </div>
                            <div class="data-item">
                                <span class="data-label">Registration Body</span>
                                <span class="data-value">CRO Ireland</span>
                            </div>
                            <div class="data-item">
                                <span class="data-label">Registration Number</span>
                                <span class="data-value highlight">822301</span>
                            </div>
                            <div class="data-item">
                                <span class="data-label">Operational Scope</span>
                                <span class="data-value">Republic of Ireland</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Core Educational Focus & Learning Workflow -->
                <div class="about-card">
                    <div class="about-card-header">
                        <div class="card-icon">📚</div>
                        <div>
                            <h3 class="about-card-title">Core Educational Focus & Process</h3>
                            <p class="about-card-subtitle">End-to-end digital training and certification pathway</p>
                        </div>
                    </div>
                    <div class="about-card-body">
                        <p class="about-text">
                            Our digital curriculum is structured to support corporate risk management and operational safety education. We specialize in teaching proper lifting mechanics, load management principles, and structural workplace risk reduction.
                        </p>
                        <p class="about-text">
                            Every course module ensures corporate teams understand structural compliance, minimizing workplace incidents through verifiable testing assessments and structured video instruction.
                        </p>

                        <!-- Learning Steps Workflow -->
                        <div class="workflow-container mt-4">
                            <h4 class="workflow-heading">How Our Online Training Works</h4>
                            <div class="workflow-steps">
                                <div class="workflow-step">
                                    <div class="step-num">1</div>
                                    <div class="step-content">
                                        <h5>Secure Enrollment</h5>
                                        <p>After you create an account, you can purchase a course and start immediately</p>
                                    </div>
                                </div>
                                <div class="workflow-step">
                                    <div class="step-num">2</div>
                                    <div class="step-content">
                                        <h5>Online Video Modules</h5>
                                        <p>Learn at your own pace through self-paced online video lessons accessible 24/7 across all devices.</p>
                                    </div>
                                </div>
                                <div class="workflow-step">
                                    <div class="step-num">3</div>
                                    <div class="step-content">
                                        <h5>Interactive Assessment</h5>
                                        <p>Complete the integrated multi-choice test following the course material to verify your practical comprehension.</p>
                                    </div>
                                </div>
                                <div class="workflow-step">
                                    <div class="step-num">4</div>
                                    <div class="step-content">
                                        <h5>Official Certification</h5>
                                        <p>Instantly download your verifiable digital certificate of completion immediately upon passing the final assessment.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Corporate Headquarters & Direct Contact -->
                <div class="about-card">
                    <div class="about-card-header">
                        <div class="card-icon">📍</div>
                        <div>
                            <h3 class="about-card-title">Headquarters & Communication</h3>
                            <p class="about-card-subtitle">Open channels for institutional and customer support</p>
                        </div>
                    </div>
                    <div class="about-card-body">
                        <div class="contact-grid">
                            <div class="contact-box">
                                <h4 class="contact-title">Registered Office Address</h4>
                                <p class="contact-detail">
                                    <strong>PROGRESSIVE VELOCITY FAST SOLUTIONS LIMITED</strong><br>
                                    51 Bracken Road<br>
                                    Dublin, D18 CV48<br>
                                    Ireland
                                </p>
                            </div>
                            <div class="contact-box">
                                <h4 class="contact-title">Direct Communication</h4>
                                <p class="contact-detail mb-2">
                                    <strong>Support Email:</strong><br>
                                    <a href="mailto:info@ireland-safetycourse.com">info@ireland-safetycourse.com</a>
                                </p>
                                <p class="contact-detail mb-0">
                                    <strong>Operational Hours:</strong><br>
                                    Monday – Friday, 9:00 AM – 10:00 PM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Transparency Statement -->
                <div class="about-card transparency-card">
                    <div class="transparency-content">
                        <h3 class="about-card-title text-center mb-2">Transparency & Compliance Assurance</h3>
                        <p class="about-text text-center mb-0">
                            This platform operates exclusively as an educational delivery network. All digital transactions, data protection protocols, and course completions are fully transparent, backed by verified corporate registration within the Republic of Ireland.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <style>
        /* Modern SaaS High-End UI Stylesheet */
        .about-wrapper {
            width: 100%;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            min-height: 100vh;
            padding: 5rem 1.5rem;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            color: #1e293b;
        }

        .about-container {
            max-width: 1000px;
            margin: 0 auto;
        }

        /* Hero Section */
        .about-hero {
            text-align: center;
            margin-bottom: 4rem;
        }

        .about-badge {
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

        .about-title {
            font-size: 3.25rem;
            font-weight: 800;
            color: #0f172a;
            letter-spacing: -0.03em;
            margin-bottom: 1rem;
        }

        .about-subtitle {
            font-size: 1.25rem;
            color: #64748b;
            max-width: 650px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Grid Layout */
        .about-grid {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        /* Modern Glass Cards */
        .about-card {
            background: #ffffff;
            border-radius: 24px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 30px -5px rgba(0, 0, 0, 0.04);
            padding: 2.5rem;
            transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            position: relative;
            overflow: hidden;
        }

        .about-card.primary-accent {
            border-left: 5px solid #2563eb;
        }

        .about-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.08);
            border-color: #cbd5e1;
        }

        .about-card-header {
            display: flex;
            align-items: center;
            gap: 1.25rem;
            margin-bottom: 1.75rem;
            border-bottom: 1px solid #f1f5f9;
            padding-bottom: 1.25rem;
        }

        .card-icon {
            font-size: 2rem;
            background: #f8fafc;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
        }

        .about-card-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #0f172a;
            letter-spacing: -0.02em;
            margin: 0 0 0.25rem 0;
        }

        .about-card-subtitle {
            font-size: 0.95rem;
            color: #64748b;
            margin: 0;
        }

        .about-text {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #334155;
            margin-bottom: 1.5rem;
        }

        .about-text.mb-0 {
            margin-bottom: 0;
        }

        /* Data Grid / Badges */
        .about-data-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1rem;
            margin-top: 2rem;
            background: #f8fafc;
            padding: 1.5rem;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
        }

        .data-item {
            display: flex;
            flex-direction: column;
            gap: 0.25rem;
        }

        .data-label {
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: #64748b;
        }

        .data-value {
            font-size: 1rem;
            font-weight: 700;
            color: #0f172a;
            word-break: break-word;
        }

        .data-value.highlight {
            color: #2563eb;
            font-size: 1.1rem;
        }

        /* Workflow Container Styles */
        .workflow-container {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 1.75rem;
            margin-top: 2rem;
        }

        .workflow-heading {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 1.25rem;
        }

        .workflow-steps {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .workflow-step {
            display: flex;
            align-items: flex-start;
            gap: 1rem;
            background: #ffffff;
            padding: 1rem;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
        }

        .step-num {
            background: #2563eb;
            color: #ffffff;
            font-weight: 700;
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            flex-shrink: 0;
            font-size: 0.9rem;
        }

        .step-content h5 {
            font-size: 1rem;
            font-weight: 700;
            color: #0f172a;
            margin: 0 0 0.25rem 0;
        }

        .step-content p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }

        /* Contact Grid */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }

        .contact-box {
            background: #f8fafc;
            padding: 1.5rem;
            border-radius: 16px;
            border: 1px solid #e2e8f0;
        }

        .contact-title {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.75rem;
        }

        .contact-detail {
            font-size: 1.05rem;
            color: #475569;
            line-height: 1.6;
        }

        .contact-detail a {
            color: #2563eb;
            font-weight: 600;
            text-decoration: none;
        }

        .contact-detail a:hover {
            text-decoration: underline;
        }

        .mb-2 { margin-bottom: 0.5rem; }
        .mb-0 { margin-bottom: 0; }
        .text-center { text-align: center; }

        /* Transparency Card Styling */
        .transparency-card {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #ffffff;
            border: none;
        }

        .transparency-card .about-card-title {
            color: #ffffff;
        }

        .transparency-card .about-text {
            color: #94a3b8;
        }

        /* Responsive Scaling */
        @media (max-width: 768px) {
            .about-title {
                font-size: 2.25rem;
            }
            .about-data-grid, .contact-grid {
                grid-template-columns: 1fr;
            }
            .about-card {
                padding: 1.5rem;
            }
            .about-card-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
    </style>
@endsection
