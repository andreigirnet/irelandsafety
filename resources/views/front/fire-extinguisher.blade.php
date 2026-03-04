@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Accredited Fire Safety Hub</span>
                    <h1>Fire Extinguisher <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The definitive **Health and Safety Course** for fire combat in the Irish workplace.
                        Secure your **Health and Safety Certification Online** with our 2026 HSA-aligned curriculum. Professional mastery of I.S. 291:2015 standards.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Corporate Group Enrolment</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Fire Extinguisher Law: The Irish Compliance Standard</h2>
            <p>In the Republic of Ireland, the provision and maintenance of fire-fighting equipment are strictly governed by the <strong>Fire Services Acts 1981 and 2003</strong> and the <strong>Safety, Health and Welfare at Work Act 2005</strong>. It is a legal requirement for employers to ensure that "competent persons" are trained to use the specific fire-fighting equipment provided in the workplace.</p>

            <p>This **Health and Safety Course** is designed to satisfy the rigorous requirements of <strong>I.S. 291:2015</strong>—the Irish Standard for the selection, commissioning, and maintenance of portable fire extinguishers. Without a valid **Health and Safety Certification**, employees may lack the confidence or knowledge to act during the critical "early stages" of a fire, potentially leading to catastrophic property damage or loss of life. Our **Health and Safety Training Online** ensures your team is compliant and ready for any HSA inspection.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Fully aligned with I.S. 291:2015 and HSA guidelines.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** features a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 5 Classes of Fire Extinguishers</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔴</div>
                        <h4>Water (Red)</h4>
                        <p>For Class A fires involving solid combustibles like wood, paper, and textiles.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🟡</div>
                        <h4>Foam (Cream)</h4>
                        <p>Highly effective for Class A and B fires involving flammable liquids like petrol or oil.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🔵</div>
                        <h4>Dry Powder (Blue)</h4>
                        <p>Versatile for Class A, B, and C (Gas) fires. Best for industrial environments.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⚫</div>
                        <h4>CO2 (Black)</h4>
                        <p>The standard for electrical fires. Leaves no residue on sensitive equipment.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Extinction: The PASS Technique</h2>
            <p>Understanding the "Fire Triangle" is the foundation of this **Health and Safety Course**. Fire requires three elements: Heat, Fuel, and Oxygen. A fire extinguisher works by removing one or more of these elements. However, even the correct extinguisher is useless without the proper application technique.</p>


            <p>Our **Health and Safety Training Online** provides a deep dive into the <strong>PASS Technique</strong>, the internationally recognized standard for fire combat:</p>
            <ul class="mh-v8-list">
                <li><strong>P – Pull:</strong> Pull the safety pin to break the tamper seal.</li>
                <li><strong>A – Aim:</strong> Aim low, pointing the nozzle at the base of the fire, not the flames.</li>
                <li><strong>S – Squeeze:</strong> Squeeze the handle to release the extinguishing agent.</li>
                <li><strong>S – Sweep:</strong> Sweep from side to side at the base of the fire until it is out.</li>
            </ul>

            <p>Furthermore, we cover the critical "Fight or Flight" decision-making process. If a fire is larger than a standard wastepaper basket, or if the room is filling with toxic smoke, the priority shifts from combat to immediate evacuation.</p>
        </article>

        <article class="mh-container-content">
            <h2>I.S. 291:2015 Maintenance Protocols</h2>
            <p>Possessing a **Health and Safety Certification Online** also implies a knowledge of equipment maintenance. In Ireland, fire extinguishers must be serviced annually by a competent person. Additionally, 33% of your water, foam, and powder units must be test-discharged and refilled every three years.</p>


            <ul class="mh-feature-list">
                <li><strong>Monthly Visual Checks:</strong> Ensuring the unit is in its designated place and unobstructed.</li>
                <li><strong>Gauge Verification:</strong> The needle must remain in the "Green" zone to ensure adequate pressure.</li>
                <li><strong>Seal Integrity:</strong> Checking that the safety pin and plastic tamper seal are intact.</li>
                <li><strong>Hydrostatic Testing:</strong> CO2 units must undergo pressure testing every 10 years.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Fire Safety Health and Safety Certification Online</h2>
            <p>For Dublin-based enterprises and nationwide retailers, the logistics of fire safety training are complex. Our **Health and Safety Certification Online** removes the need for expensive on-site visits and half-day shutdowns. Your staff can complete their **Health and Safety Course** on any device, ensuring they are certified and audit-ready in just 45 minutes.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most efficient path to compliance for modern Irish businesses. Join over 350,000 professionals who have trusted our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('home')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
