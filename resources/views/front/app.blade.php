<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N4X9SGX6');</script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Title --}}
    <title>Online Safety Courses Ireland | CPD Certified Training from €30 - {{ config('app.name') }}</title>
    {{-- Meta description --}}
    <meta name="description" content="25€ CPD-certified online safety courses in Ireland. Manual Handling, Fire Safety, First Aid & more. Instant certificate. Fully compliant training.">
    <meta name="keywords" content="Manual Handling Courses Online, Best Manual Handling Training Ireland, Manual Handling Certification & Courses, Manual Handling Instructor Certification, Expert Manual Handling Assessment, Compliance with Manual Handling Regulations, Safety in Manual Handling Techniques, Ergonomic Lifting Practices, Efficient Load Handling Methods, Preventing Manual Handling Injuries, Top-Rated Manual Handling Practices in Ireland, Manual Handling Guidelines and Certification, Advanced Manual Handling Training Solutions, Certified Manual Handling Programs, Affordable Manual Handling Certification in Ireland, Professional Manual Handling Courses">
    {{-- Open Graph / Facebook --}}
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-ie" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en-gb" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    <meta name="format-detection" content="telephone=yes">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Online Safety Courses Ireland | CPD Certified - {{ config('app.name') }}">
    <meta property="og:description" content="Complete your CPD-certified safety training online. Manual Handling, Fire Safety, First Aid & more. Instant certificate included.">
    <meta property="og:image:alt" content="Ireland Safety Course - Accredited Online Training">
    <meta property="og:image" content="https://www.irelandsafetycourse.com/images/metaImage.png">
    <link rel = "icon" href ="{{asset('/favicon.ico')}}" type = "image/x-icon">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/registerInclude.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/footer.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/brandSwiper.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/landing.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/products.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/product.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/teamTraining.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/faq.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/contact.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/consulting.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/login.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/working-at-heights.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/blog.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminProduct.css")}}">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

<meta name="google-site-verification" content="LzejX2Dd-6oj32ZQRq5981tz74cTlalGjMXEwe6ZeiI" />


</head>

<body x-data="app()">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N4X9SGX6"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
{{--@include("frontIncludes/hamburger")--}}
{{--@include("frontIncludes/responsiveNav")--}}
@include("frontIncludes/frontNav")
@include("frontIncludes/subNav")
{{--@include("frontIncludes/subNavMobile")--}}

@yield('content')


{{--<script>--}}
{{--    window.replainSettings = { id: '4ca76446-067f-4bd3-bf12-f8cdcd962c13' };--}}
{{--    (function(u){var s=document.createElement('script');s.async=true;s.src=u;--}}
{{--        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);--}}
{{--    })('https://widget.replain.cc/dist/client.js');--}}
{{--</script>--}}
<script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>
@include("frontIncludes/registerInclude")
@include("frontIncludes/footer")
@include("frontIncludes/brandSwiper")
<script src="{{asset("js/hamburgerAction.js")}}"></script>
<script src="{{asset("js/brandSwiper.js")}}"></script>
<script src="{{asset("js/accordion.js")}}"></script>
<script src="{{asset("js/review.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{asset("js/swiper.js")}}"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
{{--<script src="{{asset('js/mainScript.js')}}"></script>--}}
<script>
    AOS.init();
</script>
<script src="{{asset('js/prevent.js')}}"></script>
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Is Health and Safety training a legal requirement for my business?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, under the Safety, Health and Welfare at Work Act 2005, providing safety training is a fundamental legal obligation for all Irish employers. Employers must provide necessary instruction and training to ensure employee safety."
          }
        },
        {
          "@type": "Question",
          "name": "How long is a Health and Safety certificate valid for?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While law varies by course, the industry standard and HSA best practice is that most safety certificates (such as Manual Handling or Fire Safety) remain valid for 3 years. High-risk certifications like First Aid Response (FAR) require a refresher every 2 years."
          }
        },
        {
          "@type": "Question",
          "name": "Are online safety certificates recognized by Irish regulators?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Online E-Learning safety courses are widely accepted for theory-based subjects. For practical skills, we utilize a Blended Learning model that combines online theory with a focused practical assessment to meet full HSA regulatory standards."
          }
        },
        {
          "@type": "Question",
          "name": "What is a workplace Risk Assessment and why do I need one?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A Risk Assessment identifies workplace hazards that could cause injury. Under the 2005 Act, every employer in Ireland must have a written Safety Statement based on these assessments to eliminate or control dangers effectively."
          }
        },
        {
          "@type": "Question",
          "name": "Who is responsible for the cost of health and safety training?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Legally, the employer is responsible for all costs associated with mandatory health and safety training. Section 25 of the 2005 Act specifies that training must be provided during paid working hours at no cost to the employee."
          }
        },
        {
          "@type": "Question",
          "name": "What are the penalties for non-compliance with safety laws?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Penalties include summary fines up to €3,000 per offense or fines up to €3 million on indictment. Directors can face prison, and lack of training often leads to the voiding of insurance policies during injury claims."
          }
        },
        {
          "@type": "Question",
          "name": "How many First Aiders does my company legally require?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Determined by a First Aid Needs Assessment, low-risk offices typically need one First Aid Responder (FAR) per 50 employees. High-risk sites require higher coverage to ensure a responder is available at all times."
          }
        },
        {
          "@type": "Question",
          "name": "Is Fire Safety training mandatory for every member of staff?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every staff member must receive basic Fire Safety Awareness training upon induction. Businesses must also appoint and train Fire Wardens responsible for managing evacuations and fire checks."
          }
        },
        {
          "@type": "Question",
          "name": "What is COSHH and do my employees require it?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "COSHH (Control of Substances Hazardous to Health) training is required if staff handle chemicals, dusts, or fumes. It teaches how to read Safety Data Sheets (SDS) and use PPE correctly to prevent occupational illness."
          }
        },
        {
          "@type": "Question",
          "name": "Does safety training include mental health and well-being?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Modern occupational health includes psychosocial risk management. Providing Mental Health First Aid and stress management is an essential part of a robust safety culture to reduce burnout and improve retention."
          }
        }
      ]
    }
</script>
</body>
</html>
