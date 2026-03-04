@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Professional Height Safety Ecosystem</span>
                    <h1>Working at Heights <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The definitive **Health and Safety Course** for the Irish construction and industrial sectors.
                        Secure your **Health and Safety Certification Online** through our HSA-aligned 2026 digital platform.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Enrol Individual — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Request Enterprise Quote</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>The Legal Mandate: Part 4 of the General Application Regulations</h2>
            <p>In the Republic of Ireland, "Working at Height" is not defined by a specific distance (such as the old "2-meter rule"). Instead, it is defined as any place where, if measures were not taken, a person could fall a distance liable to cause personal injury. This broad definition means that **Health and Safety Training Online** is required for tasks ranging from changing a lightbulb on a step-ladder to erecting steel on a skyscraper.</p>

            <p>The **Safety, Health and Welfare at Work Act 2005** places the primary burden of responsibility on the employer to ensure a "Safe System of Work". This must be documented through a written Risk Assessment and a Method Statement (RAMS). Our **Health and Safety Course** provides the specific knowledge required to draft these documents, ensuring that your organization remains fully compliant with HSA inspections.</p>

            <div class="mh-feature-list">
                <li><strong>Employer Duty:</strong> To provide adequate training and equipment.</li>
                <li><strong>Employee Duty:</strong> To utilize safety systems and report defects.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The Hierarchy of Fall Protection</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🚫</div>
                        <h4>1. Avoidance</h4>
                        <p>Can the work be done from the ground? Using long-reach tools or drones is the highest level of safety.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛡️</div>
                        <h4>2. Prevention</h4>
                        <p>Using collective protection like guardrails or scaffolding to prevent a fall from occurring.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🪂</div>
                        <h4>3. Mitigation</h4>
                        <p>Using personal fall protection (harnesses/nets) to minimize the distance and consequences of a fall.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🆘</div>
                        <h4>4. Rescue</h4>
                        <p>A mandatory requirement for any height work—planning for the immediate recovery of a fallen worker.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of a Fall: Impact & Suspension Trauma</h2>
            <p>A central component of obtaining your **Health and Safety Certification Online** is understanding the physics involved in a fall. A worker falling just 2 meters will reach a speed of nearly 23km/h before impact. Without a deceleration device (like a shock-absorbing lanyard), the "arresting force" on the human body can exceed 10kN, which is sufficient to cause internal organ damage or skeletal failure.</p>



            <p>Furthermore, this **Health and Safety Course** covers the critical danger of **Suspension Trauma** (Orthostatic Intolerance). When a worker is suspended upright in a harness, blood can pool in the legs, leading to a rapid decrease in oxygen to the brain. If a rescue plan is not executed within 10 to 15 minutes, the results can be fatal. Our **Health and Safety Training Online** ensures every worker knows how to use "relief straps" and how to assist in a rescue operation.</p>
        </article>

        <article class="mh-container-content">
            <h2>Essential Equipment & Inspection Protocols</h2>
            <p>To maintain **Health and Safety Certification**, workers must be competent in the pre-use inspection of their equipment. This includes "The ABC of Fall Protection": **A**nchorage, **B**ody Support (Harness), and **C**onnecting Device (Lanyard/SRL).</p>



            <ul class="mh-feature-list">
                <li><strong>Ladders:</strong> Must only be used for low-risk, short-duration work (less than 30 mins).</li>
                <li><strong>Fragile Surfaces:</strong> 22% of fatalities involve falls through fragile materials like roof-lights.</li>
                <li><strong>Edge Protection:</strong> Guardrails must be at least 950mm high with no gap larger than 470mm.</li>
                <li><strong>Anchor Points:</strong> Must be rated to withstand the force of a fall (typically 12kN for a single person).</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Streamlining Compliance with Online Certification</h2>
            <p>For Dublin-based contractors and nationwide facilities managers, the administrative burden of safety training is significant. Our **Health and Safety Certification Online** solves this by providing a centralized dashboard for managing employee records. No more lost paper certs or expired training; our system automatically notifies you when a refresher is due.</p>

            <p>Our **Health and Safety Course** is designed for the modern professional. You can pause the modules, resume on your mobile, and download your **Health and Safety Training Online** certificate the moment you pass the assessment. Join over 50,000 Irish workers who have chosen the fastest, most reliable path to safety compliance.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('home')}}" class="btn-gold">Get Certified Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
