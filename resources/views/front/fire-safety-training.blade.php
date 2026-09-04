@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">National Compliance Standard 2026</span>
                    <h1>Fire Safety <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The premier **Health and Safety Course** for Irish businesses.
                        Establish total **Fire Safety Compliance Ireland** with our HSA-aligned curriculum. Secure your **Health and Safety Certification Online** and protect your workforce today.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Course — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Compliance Portal</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Fire Safety Law: Your Legal Obligations in Ireland</h2>
            <p>In the Republic of Ireland, fire safety is a non-negotiable legal requirement governed by two primary pieces of legislation: the <strong>Fire Services Acts 1981 and 2003</strong> and the <strong>Safety, Health and Welfare at Work Act 2005</strong>. Under Section 18 of the Fire Services Act, the "person having control" over a premises must take all reasonable measures to prevent a fire from starting and ensure the safety of all persons on-site if a fire occurs.</p>

            <p>This **Health and Safety Course** is designed to satisfy the requirement for "appropriate training and instruction" for all staff members. Without a verified **Health and Safety Certification**, an employer may be held liable for criminal negligence in the event of an incident. Our **Health and Safety Training Online** platform ensures your business remains audit-ready for HSA inspections while building a proactive culture of fire prevention.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Fully compliant with the 2005 Safety Act and 2025 Fire Service updates.</li>
                <li><strong>Nationwide Trust:</strong> Accepted by Irish insurers and the Health and Safety Authority.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 4 Pillars of Workplace Fire Safety</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔥</div>
                        <h4>1. Fire Science</h4>
                        <p>Understanding the Fire Triangle—Heat, Fuel, and Oxygen—to effectively disrupt fire growth.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🕵️</div>
                        <h4>2. Hazard Recognition</h4>
                        <p>Identifying common ignition sources: electrical faults, hot works, and poor housekeeping.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📢</div>
                        <h4>3. Emergency Response</h4>
                        <p>Mastering alarm systems, evacuation routes, and assembly point protocols for Irish sites.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧯</div>
                        <h4>4. Equipment Mastery</h4>
                        <p>Selecting and operating the correct fire extinguishers using the PASS technique.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Fire: Behavior and Spread</h2>
            <p>A central component of this **Health and Safety Training Online** is the study of fire development. Fire is a chemical reaction that follows a predictable path of growth: Incipient, Growth, Fully Developed, and Decay. In modern Irish offices and warehouses, fires can reach "Flashover"—the point where every combustible surface in a room ignites simultaneously—in less than five minutes.</p>



            <p>Our **Health and Safety Course** explores the three methods of fire spread: <strong>Conduction</strong> (through solid materials), <strong>Convection</strong> (through hot air/smoke), and <strong>Radiation</strong> (through infrared waves). Understanding that smoke is the primary killer in building fires—carrying toxic gases like Carbon Monoxide—is essential for any worker seeking **Health and Safety Certification Online**. We emphasize the role of "Compartmentation" and fire-rated doors in containing these hazards to protect escape routes.</p>

            <h3>Common Causes of Workplace Fires</h3>
            <p>Recent statistics from the HSA highlight preventable causes as the main drivers of Irish workplace fires:</p>
            <ul class="mh-v8-list">
                <li><strong>Electrical Faults:</strong> Overloaded sockets and poorly maintained equipment.</li>
                <li><strong>Hot Works:</strong> Unmanaged welding or grinding activities on construction sites.</li>
                <li><strong>Arson:</strong> Poor perimeter security or external waste storage.</li>
                <li><strong>Negligent Smoking:</strong> Improper disposal of smoking materials in non-designated areas.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Emergency Evacuation & First-Aid Firefighting</h2>
            <p>In a fire emergency, human behavior often shifts to "Panic" or "Denial." Our **Health and Safety Training Online** uses behavioral psychology to train workers to recognize the alarm immediately and proceed to the nearest exit without hesitation.</p>



            <p>While the primary goal is always evacuation, there are instances where using a portable fire extinguisher can prevent a minor incident from becoming a catastrophe. This course covers the **PASS Technique** (Pull, Aim, Squeeze, Sweep) and the critical decision-making process: knowing when to fight and exactly when to flee.</p>

            <ul class="mh-feature-list">
                <li><strong>Classification A (Solids):</strong> Water or Foam extinguishers.</li>
                <li><strong>Classification B (Liquids):</strong> Foam or CO2 extinguishers.</li>
                <li><strong>Electrical Risks:</strong> CO2 (Black) or Dry Powder (Blue) only.</li>
                <li><strong>Assembly Points:</strong> The legal requirement for headcount and roll-call procedures.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Workplace Health and Safety Certification Online</h2>
            <p>For HR Managers in Dublin, Cork, and Galway, coordinating in-person safety training is a logistical and financial burden. Our **Health and Safety Certification Online** removes these barriers, offering a 100% digital, self-paced curriculum that can be completed on any device in just 45-60 minutes.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most cost-effective path to compliance for modern Irish businesses. Join over 350,000 professionals who have trusted our platform to secure their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
