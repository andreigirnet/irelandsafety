@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Accredited Food Safety Hub</span>
                    <h1>HACCP Level 1 & 2 <br> Catering & Retail</h1>
                    <p class="mh-lead-text">
                        The definitive **Health and Safety Course** for the Irish food industry.
                        Secure your **Health and Safety Certification Online** with our 2026 FSAI-aligned curriculum. Professional mastery of food safety management systems.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start HACCP Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>HACCP Law in Ireland: The Food Safety Framework</h2>
            <p>In the Republic of Ireland, food safety is strictly governed by **EU Regulation 852/2004** on the hygiene of foodstuffs. This legislation mandates that all food business operators must implement a food safety management system based on the principles of **HACCP** (Hazard Analysis and Critical Control Points).</p>

            <p>This **Health and Safety Course** is designed to meet the training standards set out by the **Food Safety Authority of Ireland (FSAI)** for Levels 1 & 2. Without a valid **Health and Safety Certification**, food handlers in catering and retail are not legally permitted to manage high-risk foods. Our **Health and Safety Training Online** ensures your team meets these legal thresholds while reducing the risk of foodborne illness and Environmental Health Officer (EHO) closures.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Fully aligned with EU 852/2004 and FSAI Level 1/2.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** features a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 7 Pillars of HACCP Compliance</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔬</div>
                        <h4>1. Hazard Analysis</h4>
                        <p>Identifying biological, chemical, physical, and allergenic hazards in the food chain.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🎯</div>
                        <h4>2. Determine CCPs</h4>
                        <p>Pinpointing Critical Control Points where hazards can be prevented or eliminated.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🌡️</div>
                        <h4>3. Critical Limits</h4>
                        <p>Establishing mandatory parameters, such as the 75°C core cooking temperature.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📋</div>
                        <h4>4. Monitoring</h4>
                        <p>Implementing rigorous tracking systems to ensure CCPs remain within limits.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>Microbiological Hazards: The "Danger Zone"</h2>
            <p>A central component of this **Health and Safety Course** is the study of bacterial growth. Bacteria require four conditions to thrive: Time, Food, Moisture, and Warmth. In the Irish catering and retail sectors, managing the <strong>"Danger Zone"</strong> (between 5°C and 63°C) is the single most critical factor in preventing food poisoning.</p>



            <p>Our **Health and Safety Training Online** provides a deep dive into <strong>Pathogen Control</strong>. We explain the technical importance of preventing cross-contamination from raw to ready-to-eat foods. This is particularly critical in high-turnover deli and restaurant environments where <i>Salmonella</i>, <i>E. coli</i>, and <i>Campylobacter</i> pose significant public health risks.</p>

            <h3>The 4 Cs of Food Hygiene</h3>
            <p>Mastering the fundamental 4 Cs is a prerequisite for achieving total **Health and Safety Certification Online** for your food handling staff:</p>
            <ul class="mh-v8-list">
                <li><strong>Cleaning:</strong> Effective sanitization of surfaces and equipment.</li>
                <li><strong>Cooking:</strong> Reaching a core temperature of 75°C to kill pathogens.</li>
                <li><strong>Chilling:</strong> Rapidly cooling and storing food below 5°C.</li>
                <li><strong>Cross-Contamination:</strong> Strict separation of raw and cooked processes.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Documentation & Corrective Action</h2>
            <p>Possessing a **Health and Safety Certification Online** means understanding the 7th principle of HACCP: Record Keeping. If a CCP fails—for example, if a fridge rises above 5°C—staff must be trained to implement immediate <strong>Corrective Actions</strong>.</p>



            <ul class="mh-feature-list">
                <li><strong>Traceability:</strong> Maintaining the "One Step Back, One Step Forward" supplier records.</li>
                <li><strong>Allergen Management:</strong> Legally declaring the 14 mandatory allergens in all dishes.</li>
                <li><strong>Pest Control:</strong> Identifying signs of infestation and managing waste disposal.</li>
                <li><strong>Personal Hygiene:</strong> Mandatory handwashing protocols and protective clothing.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Food Safety Health and Safety Certification Online</h2>
            <p>For Dublin restaurateurs and nationwide retail managers, the logistics of food safety training are complex. Our **Health and Safety Certification Online** removes the need for expensive on-site trainers and half-day shutdowns. Your team can complete their **Health and Safety Course** at their own pace, ensuring they are certified and audit-ready in just 60 minutes.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most cost-effective path to compliance for modern Irish businesses. Join the 350,000+ professionals who trust our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
