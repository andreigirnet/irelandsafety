@extends('front.app')

@section('content')
    <div class="mh-leadership-page">
        <header class="mh-hero-corporate">
            <div class="mh-container">
                <div class="mh-hero-content">
                    <span class="mh-top-badge">Emergency Response Leadership</span>
                    <h1>Fire Warden <br>(Fire Marshal) Training</h1>
                    <p class="mh-lead-text">
                        The gold standard **Health and Safety Course** for Irish fire safety officers.
                        Establish total **Fire Safety Compliance Ireland** with our 2026 digital certification. Professional, HSA-aligned, and ready for immediate deployment.
                    </p>
                    <div class="mh-btn-row">
                        <a href="{{route('register')}}" class="btn-exclusive-teal">Start Warden Training — €{{ config('global.course_price') }}</a>
                        <a href="{{route('register')}}" class="btn-exclusive-ghost">Group Compliance Portal</a>
                    </div>
                </div>
            </div>
        </header>

        <article class="mh-container-content">
            <h2>Fire Safety Law in Ireland: The Warden's Role</h2>
            <p>In the Republic of Ireland, fire safety is not an option—it is a strict legal requirement governed by the <strong>Fire Services Acts 1981 and 2003</strong> and the <strong>Safety, Health and Welfare at Work Act 2005</strong>. Under these acts, every employer is legally obligated to appoint and train a sufficient number of staff to assist in fire prevention and emergency evacuation.</p>

            <p>This **Health and Safety Course** is specifically tailored to meet the criteria for a "Competent Person" as defined by Irish law. Without a trained Fire Warden, your business is at significant risk of failing a fire safety audit or, worse, failing to evacuate staff during a real emergency. Our **Health and Safety Training Online** ensures your wardens are equipped with the knowledge to manage fire drills, identify ignition sources, and lead evacuations with total confidence.</p>

            <div class="mh-feature-list">
                <li><strong>Legal Shield:</strong> Compliant with the 2005 Safety Act and Fire Services Acts.</li>
                <li><strong>Digital Credentials:</strong> Your **Health and Safety Certification Online** is audit-ready.</li>
            </div>
        </article>

        <section class="mh-pillar-section">
            <div class="mh-container">
                <h2 style="text-align: center; margin-bottom: 50px;">The 4 Pillars of a Fire Marshal</h2>
                <div class="mh-pillar-grid">
                    <div class="pillar-card">
                        <div class="pillar-icon">🕵️</div>
                        <h4>1. Risk Identification</h4>
                        <p>Daily proactive checks for ignition sources, fuel loads, and obstructed exit routes.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📢</div>
                        <h4>2. Evacuation Control</h4>
                        <p>Leading the "sweep" of floors, managing assembly points, and accounting for all staff.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">🧯</div>
                        <h4>3. Extinguisher Mastery</h4>
                        <p>Understanding the "Fire Triangle" and identifying the correct extinguisher for each class of fire.</p>
                    </div>
                    <div class="pillar-card">
                        <div class="pillar-icon">📝</div>
                        <h4>4. Logbook Management</h4>
                        <p>Maintaining the fire register and ensuring all fire doors and alarms are tested weekly.</p>
                    </div>
                </div>
            </div>
        </section>

        <article class="mh-container-content">
            <h2>The Chemistry of Fire: Prevention through Science</h2>
            <p>A central component of obtaining your **Health and Safety Certification Online** is understanding the "Fire Triangle". Fire requires three elements to exist: Heat, Fuel, and Oxygen. By removing just one of these elements, a fire is extinguished. Our **Health and Safety Course** explores how different materials—from office paper to industrial chemicals—fuel fires in unique ways.</p>



            <p>Furthermore, this **Health and Safety Training Online** covers the critical danger of **Smoke Inhalation** and "Flashovers". Most fatalities in building fires are not caused by heat, but by the toxic gases produced by burning synthetic materials. A Fire Warden must understand the speed at which smoke travels and the importance of fire-rated doors in maintaining "compartmentation".</p>

            <h3>Emergency Evacuation: The "Sweep" Method</h3>
            <p>One of the most vital practical skills covered in this course is the floor sweep. A Fire Warden is trained to check all areas—including restrooms and storage rooms—without putting their own life at risk. We teach the "Tag" or "Visual Mark" system to ensure that emergency services are updated immediately on which areas have been cleared.</p>
        </article>

        <article class="mh-container-content">
            <h2>Fire Classification and Mitigation</h2>
            <p>Not all fires are the same. Using the wrong extinguisher on a fire can be more dangerous than doing nothing at all. For example, using a Water (Red) extinguisher on a Class F fat fire or a Class C electrical fire can result in explosive results.</p>



            <ul class="mh-feature-list">
                <li><strong>Class A (Wood/Paper):</strong> Water or Foam extinguishers.</li>
                <li><strong>Class B (Flammable Liquids):</strong> Foam, CO2, or Dry Powder.</li>
                <li><strong>Class C (Gases):</strong> Dry Powder is the primary choice.</li>
                <li><strong>Electrical Risks:</strong> CO2 (Black) or Dry Powder (Blue) only.</li>
            </ul>
        </article>

        <article class="mh-container-content">
            <h2>Secure Your Fire Marshal Health and Safety Certification Online</h2>
            <p>For Dublin offices and nationwide factories, training multiple Fire Wardens is often a logistical challenge. Our **Health and Safety Certification Online** removes the need for site visits and expensive on-site trainers. Your wardens can complete their **Health and Safety Course** at their own pace, ensuring your building is never left without a "Competent Person" on-site.</p>

            <p>Our **Health and Safety Training Online** is the most cost-effective solution for modern Irish safety management. Join the 50,000+ professionals who trust our platform for their mandatory Fire Warden credentials.</p>

            <div style="text-align: center; margin-top: 50px;">
                <a href="{{route('register')}}" class="btn-gold">Enrol Now — €{{ config('global.course_price') }}</a>
            </div>
        </article>
    </div>
@endsection
