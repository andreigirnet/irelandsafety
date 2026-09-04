@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">National Safety Standard 2026</span>
                    <h1>Manual Handling <br>Course Online Ireland</h1>
                    <p class="mh-lead-text">
                        The ultimate **Health and Safety Course** for the Irish workforce.
                        Secure your **Health and Safety Certification Online** with our 2026 HSA-aligned curriculum. Professional mastery of safe lifting and injury prevention.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Manual Handling — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Corporate Team Packages</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Manual Handling Law: The Irish Legal Framework</h2>
            <p>In the Republic of Ireland, manual handling is strictly governed by the <strong>Safety, Health and Welfare at Work Act 2005</strong> and the <strong>General Application Regulations 2007</strong> (Chapter 4 of Part 2). The legislation defines manual handling as any activity involving the transporting or supporting of a load, including lifting, putting down, pushing, pulling, or carrying.</p>

            <p>This **Health and Safety Course** satisfies the legal requirement for employers to provide "appropriate" training to any employee involved in the movement of loads that pose a risk of injury. Without a valid **Health and Safety Certification**, both employers and employees are exposed to significant legal liability and the risk of Health and Safety Authority (HSA) fines. Our **Health and Safety Training Online** ensures your team meets these legal thresholds while drastically reducing workplace absenteeism due to Musculoskeletal Disorders (MSDs).</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Fully compliant with the 2007 General Application Regulations.</li>
                <li><strong>Audit Ready:</strong> Every **Health and Safety Certification Online** features a unique verification ID.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 8 Pillars of Safe Manual Handling</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">👣</div>
                        <h4>1. Base of Support</h4>
                        <p>Maintaining a stable, hip-width stance with one foot slightly forward for balance.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧘</div>
                        <h4>2. Neutral Spine</h4>
                        <p>Keeping the back's natural S-curve to ensure even distribution of weight.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🦵</div>
                        <h4>3. Leg Strength</h4>
                        <p>Utilizing the body's strongest muscles—the glutes and quads—to power the movement.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📦</div>
                        <h4>4. Load Closeness</h4>
                        <p>Keeping the load tight to the body to reduce the "lever effect" on the spine.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Physics of Injury: Spinal Biomechanics</h2>
            <p>A central component of this **Health and Safety Course** is understanding the "Lever Effect". When you bend at the waist to lift a load, your lower back acts as a fulcrum. Lifting a 10kg box with a rounded back can exert over 100kg of pressure on your lumbar vertebrae.</p>



            <p>Our **Health and Safety Training Online** provides a deep dive into the anatomy of <strong>Intervertebral Discs</strong>. We explain how improper lifting leads to "Bulging" or "Herniated" discs, where the gel-like center of the disc is pushed out, causing agonizing nerve compression. Maintaining a "Neutral Spine" and avoiding "Asymmetrical Loading" (twisting while lifting) are the most critical skills for achieving total **Health and Safety Certification Online** for your industrial staff.</p>

            <h3>Dynamic Risk Assessment: The TILE Method</h3>
            <p>Before any physical movement begins, we train your staff to perform a TILE assessment:</p>



            <ul class="mh-v8-list">
                <li><strong>Task:</strong> Does the movement involve twisting, stooping, or excessive reaching?</li>
                <li><strong>Individual:</strong> Does the worker have the physical capacity or a pre-existing injury?</li>
                <li><strong>Load:</strong> Is the object bulky, unstable, hot, or difficult to grip?</li>
                <li><strong>Environment:</strong> Are there slippery floors, poor lighting, or restrictive spaces?</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Ergonomics & Team Handling</h2>
            <p>Possessing a **Health and Safety Certification Online** means understanding when a task is too dangerous for a single person. We cover the use of mechanical aids (trolleys, pallet trucks) and the protocols for "Team Lifting," where communication is the primary safety tool.</p>



            <ul class="mh-feature-list">
                <li><strong>Mechanical Aids:</strong> Identifying when a trolley is safer than a manual carry.</li>
                <li><strong>Grip Mastery:</strong> Using the palms and "root of the thumb" rather than just fingertips.</li>
                <li><strong>Path Planning:</strong> Ensuring the route is clear of obstructions before lifting.</li>
                <li><strong>Height Optimization:</strong> Storing heavy items at "waist height" to avoid overhead reaching.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Workplace Health and Safety Certification Online</h2>
            <p>For Dublin logistics firms and nationwide retail managers, the logistics of manual handling training are a significant hurdle. Our **Health and Safety Certification Online** removes the need for expensive classroom hire and travel. Your team can complete their **Health and Safety Course** at their own pace—whether in the warehouse or working from home—ensuring they are certified and audit-ready in just 45 minutes.</p>

            <p>With 24/7 access and instant PDF delivery, our **Health and Safety Training Online** is the most cost-effective path to compliance for modern Irish businesses. Join the 350,000+ professionals who trust our platform for their mandatory safety credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Today — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
