@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Life-Critical Response Training</span>
                    <h1>Emergency First Aid <br>at the Workplace</h1>
                    <p class="mh-lead-text">
                        The essential **Health and Safety Course** for the modern Irish workforce.
                        Secure your **Health and Safety Certification Online** with our 2026 HSA-aligned curriculum. Professional readiness for every workplace emergency.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start First Aid Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Workplace First Aid: The Irish Legal Requirement</h2>
            <p>In the Republic of Ireland, the provision of first aid is a strict statutory requirement under the <strong>Safety, Health and Welfare at Work (General Application) Regulations 2007</strong>, Part 7, Chapter 2. Employers are legally obligated to provide a sufficient number of "First Aid Responders" and adequate equipment to ensure that employees receive immediate assistance if injured or taken ill at work.</p>

            <p>This **Health and Safety Course** serves as a vital "Awareness and Theory" foundation for all staff members, complementing the physical practical requirements mandated for designated responders. Without a baseline of **Health and Safety Training Online**, the "Chain of Survival" is often broken before professional medical help arrives. Our platform ensures your team is compliant with HSA guidelines and prepared to act decisively during the "Golden Hour" of emergency care.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Aligned with the 2007 General Application Regulations.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** includes a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The Core Pillars of First Aid</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🚑</div>
                        <h4>1. Scene Assessment</h4>
                        <p>Ensuring the area is safe before approaching the casualty (Danger, Response, Airway, Breathing, Circulation).</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">❤️</div>
                        <h4>2. CPR & AED</h4>
                        <p>Mastering the 30:2 compression-to-breath ratio and the rapid deployment of Automated External Defibrillators.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🩹</div>
                        <h4>3. Wound Management</h4>
                        <p>Controlling major bleeds and treating burns, scalds, and fractures with standard workplace kits.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧠</div>
                        <h4>4. Unconsciousness</h4>
                        <p>Managing the airway through the recovery position and monitoring for signs of shock or concussion.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Primary Survey: The DRABC Protocol</h2>
            <p>The foundation of all **Health and Safety Training Online** regarding first aid is the <strong>Primary Survey</strong>. This systematic approach ensures that life-threatening conditions are identified and treated in order of priority. In a high-pressure workplace emergency, following a memorized acronym prevents "tunnel vision" and saves lives.</p>



            <p>Our **Health and Safety Course** provides a deep dive into <strong>CPR (Cardiopulmonary Resuscitation)</strong> mechanics. We explain the physiological importance of high-quality chest compressions—at least 5cm deep and at a rate of 100-120 beats per minute—to maintain oxygenated blood flow to the brain. This is particularly critical in Dublin’s industrial and office environments where cardiac events are a leading cause of sudden collapse.</p>

            <h3>Managing the Unconscious Casualty</h3>
            <p>If a casualty is unconscious but breathing normally, they must be placed in the <strong>Recovery Position</strong>. This prevents the tongue from obstructing the airway and allows fluids (like vomit) to drain safely.</p>


        </article>

        <article class="mh-container-content">
            <h2>Common Workplace Injuries & Treatments</h2>
            <p>Every **Health and Safety Certification Online** must address the specific risks found in Irish workplaces, from retail to heavy manufacturing.</p>

            <ul class="mh-feature-list">
                <li><strong>Choking:</strong> Utilizing the "5 Back Blows and 5 Abdominal Thrusts" protocol for adults.</li>
                <li><strong>Severe Bleeding:</strong> Applying direct pressure and using sterile dressings to prevent hypovolemic shock.</li>
                <li><strong>Burns & Scalds:</strong> Irrigation with cool running water for a minimum of 20 minutes (the 20/20 rule).</li>
                <li><strong>Seizures:</strong> Protecting the head and timing the event without restraining the individual.</li>
            </ul>


        </article>

        <article class="mh-container-content">
            <h2>Secure Your Workplace Health and Safety Certification Online</h2>
            <p>For Dublin HR managers and nationwide facilities supervisors, the logistics of first aid training can be overwhelming. Our **Health and Safety Certification Online** removes the need for expensive classroom hire and travel for the theoretical portion of the training. Your team can complete their **Health and Safety Course** at their own pace, ensuring they are certified and audit-ready in under an hour.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most cost-effective path to compliance for modern Irish industry. Join the 350,000+ professionals who trust our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('home')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
