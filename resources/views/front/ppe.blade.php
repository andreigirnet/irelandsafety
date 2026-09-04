@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">The Last Line of Defense</span>
                    <h1>PPE Training Online <br> (Personal Protective Equipment)</h1>
                    <p class="mh-lead-text">
                        The essential **Health and Safety Course** for the Irish industrial workforce.
                        Secure your **Health and Safety Certification Online** with our 2026 HSA-aligned curriculum. Master the selection, use, and maintenance of life-critical equipment.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start PPE Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>PPE Law in Ireland: The Legal Framework</h2>
            <p>In the Republic of Ireland, the provision and use of Personal Protective Equipment are strictly governed by the <strong>Safety, Health and Welfare at Work (General Application) Regulations 2007</strong>, Part 2, Chapter 3. Employers are legally obligated to provide suitable PPE to employees where risks cannot be avoided or sufficiently limited by other means.</p>

            <p>This **Health and Safety Course** serves as a vital foundation for understanding the "Hierarchy of Control". PPE is legally defined as the "last resort" in workplace safety—it only protects the wearer and does not eliminate the hazard itself. Without a baseline of **Health and Safety Training Online**, employees often use equipment that is ill-fitting, damaged, or inappropriate for the specific hazard. Our platform ensures your team is compliant with HSA guidelines and prepared to maintain their "Last Line of Defense" with total confidence.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Aligned with the 2007 General Application Regulations and CE/UKCA standards.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** includes a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 4 Pillars of PPE Compliance</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">👷</div>
                        <h4>1. Head & Face</h4>
                        <p>Understanding EN397 safety helmets, impact-resistant eye protection, and hearing conservation (EN352).</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🫁</div>
                        <h4>2. Respiratory (RPE)</h4>
                        <p>Mastering the selection of FFP2/FFP3 masks and the critical importance of "Face Fit Testing."</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧤</div>
                        <h4>3. Hand & Skin</h4>
                        <p>Selecting the correct EN388 mechanical or EN374 chemical resistant gloves for specific industrial tasks.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🥾</div>
                        <h4>4. Body & Feet</h4>
                        <p>High-visibility apparel (EN ISO 20471) and safety footwear (S1-S5) for total environmental protection.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Hierarchy of Control: Why PPE is the Last Resort</h2>
            <p>The foundation of all **Health and Safety Training Online** regarding protective equipment is the <strong>Hierarchy of Control</strong>. PPE is positioned at the very bottom of this pyramid. In a high-pressure workplace, we must first attempt to Eliminate, Substitute, or use Engineering Controls before relying on personal equipment.</p>



            <p>Our **Health and Safety Course** provides a deep dive into the <strong>CE and UKCA Marking</strong> systems. We explain the technical importance of ensuring all equipment is independently tested and certified for the Irish market. This is particularly critical in Dublin’s construction and pharmaceutical sectors where "counterfeit" or sub-standard PPE can lead to immediate respiratory failure or ocular damage.</p>

            <h3>The Importance of Compatibility</h3>
            <p>A common failure in workplace safety is the lack of "PPE Compatibility". For example, wearing a specific safety helmet may interfere with the "seal" of an ear defender or a respiratory mask. Our training ensures workers know how to perform a "Seal Check" and a compatibility audit before entering a high-risk zone.</p>
        </article>

        <article class="mh-container-content">
            <h2>Maintenance, Storage & Shelf-Life</h2>
            <p>Every **Health and Safety Certification Online** must address the "Shelf-Life" of safety equipment, particularly polymers used in hard hats and fall-arrest lanyards.</p>


            <ul class="mh-feature-list">
                <li><strong>Pre-Use Inspection:</strong> Checking for UV degradation, cracks, and chemical pitting in plastics.</li>
                <li><strong>Sanitization:</strong> Proper cleaning protocols for reusable RPE and ear protection to prevent infection.</li>
                <li><strong>Correct Storage:</strong> Keeping PPE away from direct sunlight, moisture, and hazardous chemicals.</li>
                <li><strong>Defect Reporting:</strong> The legal requirement for employees to report any loss or damage to their equipment.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Industrial Health and Safety Certification Online</h2>
            <p>For Dublin project managers and nationwide warehouse supervisors, the logistics of PPE training can be overwhelming. Our **Health and Safety Certification Online** removes the need for expensive classroom hire and travel. Your team can complete their **Health and Safety Course** at their own pace, ensuring they are certified and audit-ready in under an hour.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most cost-effective path to compliance for modern Irish industry. Join the 350,000+ professionals who trust our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
