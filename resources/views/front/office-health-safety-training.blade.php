@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Corporate Compliance & Ergonomics</span>
                    <h1>Office Health & <br>Safety Training Online</h1>
                    <p class="mh-lead-text">
                        The definitive **Health and Safety Course** for the modern Irish office environment.
                        Secure your **Health and Safety Certification Online** with our 2026 HSA-aligned curriculum. Professional safety for the digital workplace.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('home')}}" class="btn-exclusive-teal">Start Office Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('home')}}" class="btn-exclusive-ghost">Corporate Team Packages</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Office Safety Law: The Irish Legal Framework</h2>
            <p>In the Republic of Ireland, office-based work is strictly governed by the <strong>Safety, Health and Welfare at Work Act 2005</strong> and the <strong>General Application Regulations 2007</strong>. Many employers mistakenly believe that "low-risk" office environments require less oversight; however, the HSA actively inspects corporate offices for compliance in ergonomics, fire safety, and psychosocial well-being.</p>

            <p>This **Health and Safety Course** provides the essential "Duty of Care" foundation for office managers and staff alike. Under the 2007 Regulations (Chapter 5), employers are legally mandated to perform Display Screen Equipment (DSE) assessments for all employees who use a computer for more than one hour per day. Our **Health and Safety Training Online** ensures your workforce meets these legal thresholds while reducing the risk of costly litigation and absenteeism.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Compliant with DSE and 2005 Safety Act standards.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** features a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">Core Office Safety Pillars</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🪑</div>
                        <h4>1. DSE Ergonomics</h4>
                        <p>Optimizing workstations to prevent Repetitive Strain Injury (RSI) and chronic back pain.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🔌</div>
                        <h4>2. Electrical Safety</h4>
                        <p>Managing cable hazards and ensuring PAT testing compliance for office hardware.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧘</div>
                        <h4>3. Mental Wellbeing</h4>
                        <p>Identifying workplace stress, burnout, and promoting a positive "Safety Culture."</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🚧</div>
                        <h4>4. Slips & Trips</h4>
                        <p>Managing the #1 cause of office injuries: loose cabling and wet kitchen floors.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of the Workstation: DSE Ergonomics</h2>
            <p>A central component of this **Health and Safety Course** is the study of **Postural Alignment**. Prolonged sitting in a non-ergonomic position leads to "Static Loading" of the spinal muscles and compression of the intervertebral discs. This results in Musculoskeletal Disorders (MSDs) that currently account for 30% of lost workdays in the Dublin corporate sector.</p>



            [Image of the correct ergonomic workstation setup]


            <p>Our **Health and Safety Training Online** provides a deep dive into the <strong>90-Degree Rule</strong>. We demonstrate how to adjust seat height, monitor distance (arm's length), and keyboard position to ensure the body remains in a "neutral" state. Understanding the importance of the "20-20-20 rule" for eye health and the necessity of micro-breaks is critical for achieving total **Health and Safety Certification Online** for your administrative staff.</p>

            <h3>Electrical Safety & Cable Management</h3>
            <p>Offices are high-density electrical environments. We train your staff to identify "Daisy Chaining" (overloading extension leads) and the dangers of damaged insulation on laptop chargers. Cable management isn't just about tidiness; it is a primary fire prevention strategy under Irish law.</p>
        </article>

        <article class="mh-container-content">
            <h2>Beyond the Desk: Environmental Safety</h2>
            <p>Possessing a **Health and Safety Certification Online** means understanding the broader office ecosystem. Fire safety in a multi-story office building requires specific knowledge of "Fire Compartmentation" and the role of fire-rated doors in protecting escape routes.</p>



            <ul class="mh-feature-list">
                <li><strong>Manual Handling:</strong> Even light loads (moving paper or water bottles) require TILE assessment.</li>
                <li><strong>Stress Management:</strong> Employers have a legal duty to assess psychosocial risks under the 2005 Act.</li>
                <li><strong>Kitchen Safety:</strong> Managing hot liquids and hygiene in communal breakrooms.</li>
                <li><strong>Emergency Procedures:</strong> Understanding the location of First Aid kits and AEDs.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Corporate Health and Safety Certification Online</h2>
            <p>For Dublin HR managers and nationwide operations directors, coordinating safety training for a hybrid workforce is a logistical challenge. Our **Health and Safety Certification Online** removes the need for expensive on-site consultants and "all-hands" shutdowns. Your team can complete their **Health and Safety Course** at their own pace—whether in the office or working from home—ensuring they are certified and audit-ready in just 45 minutes.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most cost-effective path to compliance for modern Irish businesses. Join the 350,000+ professionals who trust our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('home')}}" class="btn-gold">Enrol Your Team — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
