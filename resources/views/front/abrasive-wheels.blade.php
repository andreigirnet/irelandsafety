@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Industrial Compliance Hub</span>
                    <h1>Abrasive Wheels <br>Training Online</h1>
                    <p class="mh-lead-text">
                        The definitive **Health and Safety Course** for the Irish industrial sector.
                        Secure your **Health and Safety Certification Online** with our 2026 HSA-aligned curriculum. Professional safety for precision engineering.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Abrasive Wheels Safety: The Irish Legal Framework</h2>
            <p>In the Republic of Ireland, the use of abrasive wheels is strictly regulated due to the high risk of catastrophic failure and severe injury. Under the <strong>Safety, Health and Welfare at Work (General Application) Regulations 2007</strong>, specifically Schedule 5, it is a legal requirement that anyone involved in the mounting or use of abrasive wheels must be properly trained.</p>

            <p>This **Health and Safety Course** is designed to satisfy the legal "Duty of Care" placed on employers to provide competent instruction. Without a valid **Health and Safety Certification**, operators are not permitted to mount wheels on grinders, cut-off saws, or bench grinders. Our **Health and Safety Training Online** ensures your workforce meets these HSA thresholds without the downtime associated with classroom learning.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Compliant with HSA Schedule 5 requirements.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** features a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">Core Safety Pillars</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">⚙️</div>
                        <h4>Selection & Storage</h4>
                        <p>Mastering the "A.O.C.R.S" system for identifying wheel types and safe shelf-life.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🔍</div>
                        <h4>Inspection & Testing</h4>
                        <p>Conducting mandatory visual checks and "Ring Tests" to detect internal fractures.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛠️</div>
                        <h4>Mounting Procedure</h4>
                        <p>Step-by-step guidance on flanges, blotters, and torque specifications for safe assembly.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">💨</div>
                        <h4>Hazard Control</h4>
                        <p>Mitigating risks from dust, sparks, vibration, and high-velocity bursts.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Failure: Why Precision Matters</h2>
            <p>An abrasive wheel rotating at high speeds stores immense kinetic energy. A standard 115mm angle grinder wheel can reach speeds of over 11,000 RPM. If a wheel is mismatched to the machine's spindle speed, the centrifugal forces can exceed the tensile strength of the bonding agent, leading to an "explosive" wheel burst.</p>



            <p>Our **Health and Safety Training Online** provides a deep dive into **Wheel Anatomy**. We explain the difference between Vitrified, Resinoid, and Diamond bonds, and how environmental factors like moisture and temperature can degrade these materials over time. Understanding the "Expiry Date" (V-code) marked on the metal center is critical for ensuring that your **Health and Safety Certification Online** actually translates to a safer workshop.</p>

            <h3>Mandatory Inspection: The Ring Test</h3>
            <p>One of the most vital practical skills covered in this **Health and Safety Course** is the Ring Test. By gently tapping a dry, clean wheel with a non-metallic implement, a competent operator can listen for the characteristic "clear ring" that indicates a sound structure. A "dull thud" signals an internal crack, necessitating the immediate destruction and disposal of the wheel.</p>
        </article>

        <article class="mh-container-content">
            <h2>Operational Risk Management</h2>
            <p>Beyond the wheel itself, this **Health and Safety Course** addresses the broader environment. **Vibration White Finger** (Hand-Arm Vibration Syndrome) and **Respiratory Damage** from fine particulate matter are significant long-term health risks in Ireland.</p>



            <ul class="mh-feature-list">
                <li><strong>Guard Placement:</strong> The guard must be adjusted to contain a minimum of 180 degrees of the wheel.</li>
                <li><strong>Blotter Usage:</strong> Blotters must always be larger than the flanges to ensure even pressure distribution.</li>
                <li><strong>PPE Requirements:</strong> Impact-resistant eye protection (EN166 Grade B) and FFP3 respiratory masks are mandatory.</li>
                <li><strong>Spark Control:</strong> Establishing a "Hot Work" permit system and removing flammable vapors or materials.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Industrial Health and Safety Certification Online</h2>
            <p>For Dublin engineering firms and nationwide manufacturing sites, keeping up with safety training is a constant logistical challenge. Our **Health and Safety Certification Online** removes the need for site visits and half-day shutdowns. Your operators can complete their **Health and Safety Course** during quiet periods, ensuring they remain productive while staying compliant.</p>

            <p>With 24/7 access on all devices, our **Health and Safety Training Online** is the most cost-effective solution for modern Irish industry. Join the 50,000+ professionals who trust our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('home')}}" class="btn-gold">Enrol Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
