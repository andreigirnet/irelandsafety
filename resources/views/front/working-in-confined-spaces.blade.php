@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">High-Risk Entry Compliance</span>
                    <h1>Working in Confined <br> Spaces Training Online</h1>
                    <p class="mh-lead-text">
                        The definitive **Safe Operation Curriculum** for Irish industrial and utility sectors.
                        Secure your **Operator Proficiency Verification** with our 2026 standards-aligned framework. Professional mastery of life-critical entry protocols.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Entry Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Confined Space Law: The Irish Legal Framework</h2>
            <p>In the Republic of Ireland, working in confined spaces is one of the most hazardous activities an employee can undertake. Legislation is strictly enforced under the <strong>Safety, Health and Welfare at Work (Confined Spaces) Regulations 2001</strong>. These regulations mandate that no person shall enter a confined space unless it is not "reasonably practicable" to achieve the purpose without entry.</p>

            <p>This **Safe Operation Curriculum** provides the essential theoretical foundation for "Competent Persons". Before any entry occurs, a rigorous Risk Assessment and a site-specific **Permit to Work** must be issued. Without a valid **Operator Proficiency Verification**, workers are not legally permitted to act as entrants, observers (top-men), or supervisors. Our **Digital Safety Instruction Online** ensures your team meets these critical regulatory thresholds with total auditability.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Fully compliant with the 2001 Confined Spaces Regulations.</li>
                <li><strong>Audit Ready:</strong> Every **Operator Proficiency Verification** features a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">Core Safety Pillars</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">☣️</div>
                        <h4>1. Atmospheric Testing</h4>
                        <p>Detecting Oxygen deficiency, flammable gases (LEL), and toxic vapors like H2S or CO.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📇</div>
                        <h4>2. Permit to Work</h4>
                        <p>Formalizing entry protocols, isolation (LOTO), and communication methods.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧗</div>
                        <h4>3. Access & Egression</h4>
                        <p>Mastering the use of tripods, winches, and fall-arrest systems for vertical entry.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🆘</div>
                        <h4>4. Emergency Rescue</h4>
                        <p>Establishing non-entry rescue plans and the mandatory role of the "Standby Person."</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Science of Invisible Killers: Gas & Atmosphere</h2>
            <p>A central component of this **Safe Operation Curriculum** is the study of atmospheric hazards. Many fatal accidents in confined spaces involve "Invisible Killers"—gases that cannot be seen or smelled. For instance, Hydrogen Sulphide (H2S) can desensitize the sense of smell in seconds, leading to rapid unconsciousness and death.</p>

            <p>Our **Digital Safety Instruction Online** provides a deep dive into <strong>Oxygen Displacement</strong>. Normal air contains 20.9% Oxygen; if this drops below 19.5%, the environment becomes "Oxygen Deficient," leading to impaired judgment and physical failure. Conversely, "Oxygen Enrichment" (above 23.5%) creates an extreme fire risk where even fire-resistant clothing can burn vigorously. Understanding these thresholds is a prerequisite for achieving total **Operator Proficiency Verification**.</p>

            <h3>Defining a Confined Space</h3>
            <p>A confined space is not just "small"—it is any space of an enclosed nature where there is a risk of death or serious injury from hazardous substances or dangerous conditions. We train your staff to recognize:</p>
            <ul class="mh-feature-list">
                <li><strong>Enclosed Spaces:</strong> Vats, silos, sewers, and utility vaults.</li>
                <li><strong>Restricted Access:</strong> Areas where egress is limited during an emergency.</li>
                <li><strong>Engulfment Risks:</strong> Grain silos or trenches where loose materials may flow.</li>
                <li><strong>Thermal Extremes:</strong> High-temperature boilers or refrigerated units.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>The Standby Person & Rescue Protocols</h2>
            <p>Possessing an **Operator Proficiency Verification** means understanding the critical role of the **Standby Person (Top-Man)**. Over 60% of confined space fatalities involve "would-be rescuers" who enter a space without proper equipment and succumb to the same hazard as the initial victim.</p>

            <p>Our **Safe Operation Curriculum** outlines the <strong>Non-Entry Rescue</strong> system. If an entrant collapses, the Standby Person must never enter the space. Instead, they must initiate the emergency plan, communicate via radio, and utilize mechanical retrieval systems (tripods and winches) to extract the casualty safely. This discipline is what separates a controlled incident from a multi-fatality tragedy.</p>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Confined Space Operator Proficiency Verification</h2>
            <p>For Dublin utility firms and nationwide industrial contractors, training staff for high-risk entry is a logistical challenge. Our **Operator Proficiency Verification** removes the need for expensive classroom hire and travel for the theoretical portion of the training. Your workers can complete their **Safe Operation Curriculum** on-site, ensuring they are certified and audit-ready in just 60 minutes.</p>

            <p>With 24/7 access and instant PDF delivery, our **Digital Safety Instruction Online** is the most cost-effective path to compliance for modern Irish industry. Join the 350,000+ professionals who trust our platform for their mandatory compliance credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
