@extends('front.app')
@section('content')

    <div class="cns-page-wrapper">

        <div class="cns-hero-section" data-aos="fade-up">
            <h1 class="cns-main-title">Safety Advisory & Consulting Services</h1>
        </div>

        <div class="cns-container">

            <div class="cns-info-block" data-aos="fade-up">
                <div class="cns-text-lead">
                    Our extensive industry experience establishes our authority in modern corporate safety protocols focused on incident reduction. We deliver comprehensive online training programs designed to support workplace safety and professional development across Ireland.
                </div>
            </div>

            <div class="cns-info-block" data-aos="fade-up">
                <div class="cns-highlight-box">
                    <h4>Professional Safety Consulting in Dublin</h4>
                    <div class="cns-body-text">
                        We provide specialized safety consultancy across the Dublin region, deploying experts to offer tailored guidance for diverse business sectors. Our approach integrates flexible online learning modules to ensure staff can complete their requirements efficiently.
                    </div>
                </div>
                <div class="cns-body-text">
                    Our team excels in forensic accident investigation and root-cause analysis, ensuring robust preventive strategies are integrated to stop recurring issues and meet regulatory expectations.
                </div>
            </div>

            <div class="cns-info-block" data-aos="fade-up">
                <h2 class="cns-section-label">Our Core Advisory Services</h2>

                <div class="cns-services-grid">
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Safe-T-Cert system management</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">On-site safety inspections</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Deep-dive safety audits</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Cloud-based safety documentation setups</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Drafting workplace workplace and safety policies</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Environmental risk, noise, and COSHH reporting</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Developing corporate safety manifestos</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Project-specific safety planning</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Technical method statements</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Strategic risk mapping</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Post-incident investigations</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">Educational gap analysis and specialized safety seminars</div>
                    </div>
                    <div class="cns-service-item">
                        <img src="{{asset('images/icons/right-arrow.png')}}" class="cns-icon-arrow" alt="Service indicator icon">
                        <div class="cns-service-label">PAT electrical compliance testing</div>
                    </div>
                </div>
            </div>

            <div class="cns-info-block" data-aos="fade-up">
                <div class="cns-body-text">
                    We work alongside your leadership team to define safety milestones and build a sustainable culture of workplace protection. Successful participants receive an industry-compliant Certificate of Completion.
                </div>

                <h2 class="cns-section-label" style="margin-top: 40px;">Our Strategic Approach</h2>

                <div class="cns-body-text">
                    We support businesses looking for external expertise to meet regulatory safety targets, whether for long-term management or specific high-stakes projects.
                </div>
                <div class="cns-body-text">
                    Through a strategic discovery phase, we align our consultancy with your specific organizational goals. Participants can complete training modules online at their own pace.
                </div>
                <div class="cns-body-text">
                    At {{ config('global.business_name') }}, we integrate seamlessly with organizations to maintain active safety standards through regular auditing, hazard-specific procedural development, and outsourced leadership.
                </div>
            </div>

            <div class="cns-contact-banner" data-aos="fade-up">
                <div class="cns-body-text">
                    For more information on our advisory solutions or to clarify regulatory requirements, please connect with our specialists through the Online Chat or review our <a href="{{ route('terms') }}" style="color: #2563eb; text-decoration: underline;">Terms & Conditions</a>.
                </div>
            </div>

        </div>
    </div>

@endsection
