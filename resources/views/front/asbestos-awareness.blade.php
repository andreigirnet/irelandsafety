@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Hazardous Materials Compliance</span>
                    <h1>Asbestos Awareness <br>Training Online Ireland</h1>
                    <p class="mh-lead-text">
                        The definitive **Health and Safety Course** for Irish construction and maintenance sectors.
                        Secure your **Health and Safety Certification Online** with our 2026 HSA-aligned curriculum. Professional protection against the "Silent Killer."
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Awareness Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Group Rates</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Asbestos Safety Law: The Irish Legal Framework</h2>
            <p>In the Republic of Ireland, asbestos remains the single greatest cause of work-related deaths. Legislation is strictly enforced under the <strong>Safety, Health and Welfare at Work (Exposure to Asbestos) Regulations 2006 and 2010</strong>. These regulations mandate that any worker who may come into contact with Asbestos-Containing Materials (ACMs) during their work must receive mandatory **Health and Safety Training Online**.</p>

            <p>This **Health and Safety Course** is designed to provide "Awareness" level training, which is the legal minimum for tradespeople, architects, and surveyors working on buildings constructed before the year 2000. Without a valid **Health and Safety Certification**, workers are not legally permitted to begin any demolition, maintenance, or refurbishment project where asbestos risk exists. Our digital platform ensures your team meets these HSA thresholds with total auditability.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Fully compliant with the 2006/2010 Asbestos Regulations.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** features a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">Core Safety Pillars</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🔬</div>
                        <h4>ACM Identification</h4>
                        <p>Recognizing Asbestos Insulation Board (AIB), Lagging, and Cement in pre-2000 buildings.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">⚠️</div>
                        <h4>Risk Evaluation</h4>
                        <p>Understanding the "Friability" of materials and the likelihood of fiber release.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🛑</div>
                        <h4>Emergency Protocol</h4>
                        <p>What to do when ACMs are accidentally disturbed: Stop, Seal, and Report.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🏥</div>
                        <h4>Health Hazards</h4>
                        <p>Detailed insight into Mesothelioma, Asbestosis, and Lung Cancer risks.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Asbestos: Why It Is So Deadly</h2>
            <p>Asbestos is a naturally occurring mineral composed of microscopic fibers. These fibers are so small that they can remain airborne for up to 72 hours once disturbed. Unlike standard dust, asbestos fibers are shaped like tiny needles (specifically Crocidolite and Amosite) that, when inhaled, bypass the body's natural filters and lodge permanently in the lining of the lungs (the Pleura).</p>

            [Image showing microscopic asbestos fibers lodged in lung tissue]

            <p>Our **Health and Safety Training Online** provides a deep dive into the <strong>Latency Period</strong>. Asbestos-related diseases typically take 15 to 40 years to manifest symptoms. Because the damage is cumulative and often irreversible, this **Health and Safety Course** emphasizes that there is "no safe level" of exposure. Understanding this medical reality is the primary driver for achieving total **Health and Safety Certification Online** for your workforce.</p>

            <h3>Common Locations of ACMs</h3>
            <p>Asbestos was used in over 3,000 different building products in Ireland between 1950 and 1999. We train your staff to look for:</p>
            <ul class="mh-feature-list">
                <li><strong>Asbestos Cement:</strong> Common in roof sheeting and water tanks.</li>
                <li><strong>Textured Coatings:</strong> Such as "Artex" used on ceilings and walls.</li>
                <li><strong>Vinyl Floor Tiles:</strong> Often containing high concentrations of Chrysotile.</li>
                <li><strong>Loose Fill Insulation:</strong> One of the most dangerous and friable forms of asbestos.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>The Asbestos Management Plan</h2>
            <p>Possessing a **Health and Safety Certification Online** means understanding your role within a broader safety system. Every building owner in Ireland has a duty to maintain an **Asbestos Register**. Before any work begins, tradespeople must consult the **Management Survey** or request a **Refurbishment/Demolition Survey**.</p>



            <p>Our **Health and Safety Course** outlines the <strong>Permit to Work</strong> system. If you encounter a material you suspect to be asbestos, the procedure is simple: Stop work immediately, evacuate the area, and inform the site supervisor. Do not attempt to "clean up" or dispose of the material yourself—this requires a specialist licensed contractor.</p>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Asbestos Health and Safety Certification Online</h2>
            <p>For Dublin construction firms and nationwide maintenance contractors, training hundreds of staff members is a significant hurdle. Our **Health and Safety Certification Online** removes the need for expensive classroom hire and travel. Your workers can complete their **Health and Safety Course** on-site or at home, ensuring they are certified and audit-ready in just 45 minutes.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most cost-effective path to compliance for modern Irish industry. Join the 50,000+ professionals who trust our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
