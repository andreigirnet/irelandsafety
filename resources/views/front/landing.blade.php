@extends('front.app')
@section('content')
    <div id="mainBanner">
        <img src="{{asset('images/banners/BackgroundIreland.png')}}" class="warehouse" alt="">
{{--        <video autoplay muted loop class="warehouse" >--}}
{{--            <source src="video/bannerVideoBig.mp4" type="video/mp4">--}}
{{--        </video>--}}
        <div class="opacityLayer"></div>
        <div class="mainBannerContent">
            <div class="mainBannerRight">
                <h1 class="mainBannerTitle">HEALTH AND SAFETY COURSES IRELAND -<br> HEALTH AND SAFETY COURSES ONLINE</h1>
                <div class="mainBannerDescription" >Certified health and safety courses and health and safety training online trusted by 350,000+ professionals across Ireland and Europe. Our CPD and RoSPA approved health and safety courses are clear, practical, and easy to follow, with videos, images, and concise text. Complete your health and safety training at your own pace on any device and receive your certificate instantly.</div>
                <a href="{{route('register')}}" class="modern-glow-btn">
                    GET CERTIFIED TODAY
                </a>
            </div>
        </div>
    </div>

    <div id="statsCounter">
        <div id="counterWrap">
            <div class="counterContent">
                <div class="counterNumbers" id="customersCounter"></div>
                <div class="counterDescription" >CUSTOMERS</div>
            </div>
            <div class="counterContent">
                <div class="counterNumbers" id="certificatesCounter"></div>
                <div class="counterDescription" >CERTIFICATE'S ISSUED</div>
            </div>
            <div class="counterNumbers" class="counterContent">
                <div id="instructorsCounter"></div>
                <div class="counterDescription" >PASS RATE</div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up">
        <div class="titleText" >Exlplore our Health and Safety Courses</div>
        <div class="borderTitle"></div>
        <img src="{{asset("images/products/saleOver.png")}}" id="overImgDash" alt="">
    </div>
    <div class="productSection">
        <div class="productWrapper">
            <div class="adminProducts">
                @foreach($products as $product)
                    @if($product->status == 0)
                    <div class="adminProduct">
                        <img src="{{asset('images/productAdd/'.$product->image)}}" alt="" class="adminProductImage">
                        <div class="adminProductBottom">
                            <div class="adminProductName">{{$product->name}}</div>
                            @if (!in_array($product->id, [13, 14, 15, 16]))
                                <div style="color: #397b21; font-weight: bold">e-Learning Course</div>
                            @endif
                            <hr>
                            <div class="product-info-icons">
                                @if($product->id == 14)
                                    <div class="product-icons">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div>Duration: {{$product->durationTraining}} Day(Half day)</div>
                                    </div>
                                @else
                                    <div class="product-icons">
                                        <img src="images/icons/back-in-time.png" alt="">
                                        <div>Duration: {{$product->durationTraining}} hours</div>
                                    </div>
                                @endif
                                <div class="product-icons">
                                    <img src="images/icons/certificate.png" alt="">
                                    <div>Valid: {{$product->certificateValidity}} Years</div>
                                </div>
                                <div class="product-icons">
                                    <img src="images/icons/money.png" alt="">
                                    <div style="font-weight: bold"><del style="color: gray">{{round($product->price * 1.31)}} €</del> <span style="color: red; font-size: 20px">{{$product->price}} €</span></div>
                                </div>
                            </div>
                            @if($product->status == 0)
{{--                                <form action="{{route('basket.add')}}" method="POST">--}}
{{--                                    @csrf--}}
{{--                                    <input type="hidden" value="{{$product->id}}" name="productId">--}}
                                    <div class="productButtons">
                                        <a href="{{route('home')}}" class="buttonProductAdminAdd">Add To Basket</a>
                                        @if($product->description)
                                            <a href="{{route('front.product', $product->slug)}}" class="homeStartCourseButton">Info</a>
                                        @endif
                                    </div>
{{--                                </form>--}}
{{--                            @else--}}
{{--                                <div class="productButtons">--}}

{{--                                    --}}{{--                                    <button type="submit" class="buttonProductAdminAdd">Coming Soon</button>--}}

{{--                                    @if($product->description)--}}
{{--                                        <a href="{{route('front.product', $product->id)}}" class="homeStartCourseButton">Info</a>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
                            @endif
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>

    <div class="langTitle" data-aos="fade-up">
        <div class="languageText"  >
            At Ireland Safety Course, our QQI-accredited health and safety courses and online health and safety training programs are designed to be simple, engaging, and accessible for learners of all nationalities. Each safety course online includes clear videos, illustrative graphics, straightforward images, and easy-to-read content to ensure every step is simple to follow. Our health and safety courses fully comply with HSA and HSE standards, align with European Union legislation, and provide recognized certification trusted across Ireland, the UK, Europe, and beyond. Discover our safety courses online and begin your health and safety training today.
        </div>
        <div class="languagesSection">
            <img src="{{asset('images/flags/en.png')}}" alt="">
            <img src="{{asset('images/flags/pl.png')}}" alt="">
            <img src="{{asset('images/flags/ro.png')}}" alt="">
            <img src="{{asset('images/flags/ru.png')}}" alt="">
            <img src="{{asset('images/flags/sp.png')}}" alt="">
            <img src="{{asset('images/flags/ukr.png')}}" alt="">
        </div>
    </div>

    <section class="premium-bulk-wrapper">
        <div class="premium-bulk-container">

            <div class="premium-info-wing">
                <header class="premium-info-header">
                    <h2 class="premium-main-title" >
                        How Our Health and Safety Courses Work: 4 Easy Steps
                    </h2>
                    <div class="premium-divider"></div>
                </header>

                <div class="premium-step-list">
                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/11.png')}}" alt="Purchase">
                        </div>
                        <p class="premium-step-text" >Purchase your training license online.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/22.png')}}" alt="Activate">
                        </div>
                        <p class="premium-step-text" >Activate your account and begin your modules immediately.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/33.png')}}" alt="Achieve">
                        </div>
                        <p class="premium-step-text" >Learn & Achieve - Progress through the course, pass the assessment, and instantly download your credentials.</p>
                    </div>

                    <div class="premium-step-card">
                        <div class="premium-icon-box">
                            <img src="{{asset('images/icons/44.png')}}" alt="Support">
                        </div>
                        <p class="premium-step-text" >For technical support, please contact us at info@ireland-safetycourse.com.</p>
                    </div>
                </div>
            </div>

            <div class="premium-visual-wing">
                <img src="{{asset('images/landingBulk.png')}}" class="premium-promo-img" alt="Bulk Purchase Offer">
            </div>

        </div>
    </section>

    <div class="trustContainer">
        <div class="innerTrust">
            <div class="trustLeft">
                <img src="{{asset('images/trust.png')}}" alt="">
            </div>
            <div class="trustRight">
                <div class="trustTitle" >Acredited Health and Safety Courses You Can Trust</div>
                <div class="trustContent">
                    <div >Ireland Safety Course is a legally registered Irish company, fully compliant with national regulations. Every Ireland Safety Course we provide meets HSA standards, holds QQI accreditation, and is aligned with European legislation.</div>
                    <br><br>
                    <div >All our health and safety courses are independently approved by leading professional bodies, giving you recognised, high quality training that employers trust across Ireland, the UK, and Europe. Choose safety courses online with confidence.</div>
                </div>
            </div>
        </div>
    </div>

    <div class="cpdContainer">
        <div class="cpdInner">
            <div class="paddingCpd">
                <h2 class="cpdTitle" >Get Your Health And Safety Certificate Today</h2>
                <div class="cpdFlex">
                    <div class="cpdLeft">
                        <div class="cpdItems">
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/1.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Complete this CPD and ROSPA </div>
                                    <div class="cpdItemContent"  >Accredited Course to obtain your Official Certificate!</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/2.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Certify Your Skills</div>
                                    <div class="cpdItemContent"  >An Ireland Safety Training Diploma/Certificate, accredited by CPD and ROSPA, validates the skills you have acquired.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/3.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Stand Out From the Crowd</div>
                                    <div class="cpdItemContent"  >Include your Ireland Safety Course Certification on your resume to outshine competitors.</div>
                                </div>
                            </div>
                            <div class="cpdItem">
                                <div class="cpdImg">
                                    <img src="{{asset('images/icons/4.png')}}" alt="">
                                </div>
                                <div class="cpdContent">
                                    <div class="cpdItemTitle"  >Advance in Your Career</div>
                                    <div class="cpdItemContent"  >Showcase your Ireland Safety Course Certification to prospective employers, highlighting your skills and capabilities.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cpdRight">
                        <img src="{{asset('images/certExample.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title" data-aos="fade-up" style="margin-bottom: 25px;">
        <div class="titleText sizeTextMobile" >What Our Customers Say</div>
        <div class="borderTitle"></div>
    </div>

    {{--    <div id="customersReviews">--}}
    {{--        <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>--}}
    {{--        <div class="elfsight-app-452ee68c-8e4c-4329-bf9d-d5f4175f5d0e"></div>--}}
    {{--    </div>--}}
    {{--    <div id="customerReviewsMob">--}}
    {{--        <div class="customerReviewsMobWrap">--}}
    {{--            <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>--}}
    {{--            <div class="elfsight-app-6a3ccd9b-896b-4195-946e-7cba27a27218"></div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <div id="customersReviews">
        <div id="customerReviewWrap">

            <div class="premium-review-card" data-aos="fade-up">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-1.png')}}" alt="John Weasley">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">John Weasley</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">24 minutes ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "The online Health And Safety Course Online provided by ireland-safetycourse was comprehensive yet easy to follow. The certification process was smooth, and the practical tips were immensely helpful."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="100">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-2.png')}}" alt="Mary Andrews">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Mary Andrews</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">2 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "I found the course from Ireland Safety Course to be informative and well-structured. The convenience of online learning coupled with their engaging content made the whole experience worthwhile."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="200">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-3.png')}}" alt="Choe Lee">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Choe Lee</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">7 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "The Health And Safety Course Online exceeded my expectations. The modules were clear and concise, and the quizzes helped reinforce key concepts. Highly recommended for anyone seeking certification!"
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="300">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-4.png')}}" alt="Markus Low">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Markus Low</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">10 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "I appreciated the flexibility of being able to complete the training at my own pace. The material was presented in a way that was easy to understand for our entire team."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="400">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-5.png')}}" alt="Vanessa Spills">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Vanessa Spills</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">15 hours ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "Obtaining my Manual Handling certificate was a breeze. The course content was relevant and the assessments were fair. Very pleased with the overall experience."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

            <div class="premium-review-card" data-aos="fade-up" data-aos-delay="100">
                <div class="premium-review-top">
                    <div class="premium-review-header">
                        <div class="premium-avatar-container">
                            <img src="{{asset('images/avatars/av-6.png')}}" alt="Angela Jedrynska">
                        </div>
                        <div class="premium-reviewer-identity">
                            <div class="premium-name-row">
                                <span class="premium-reviewer-name">Angela Jedrynska</span>
                                <div class="premium-verified-badge"><img src="{{asset('images/icons/check.png')}}" alt="Verified"></div>
                            </div>
                            <div class="premium-rating-line">
                                <div class="premium-stars-group">
                                    <img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}"><img src="{{asset('images/icons/star.png')}}">
                                </div>
                                <span class="premium-timestamp">1 day ago</span>
                            </div>
                        </div>
                    </div>
                    <div class="premium-review-body">
                        "The online platform made it convenient for me to access the training from anywhere. The practical demonstrations were beneficial and highly professional."
                    </div>
                </div>
                <div class="premium-review-footer">
                    <span class="premium-posted-label">Verified Review</span>
                    <img src="{{asset('images/logo/google.png')}}" class="premium-google-logo" alt="Google">
                </div>
            </div>

        </div>
    </div>


    {{--    <div class="title" data-aos="fade-up">--}}
    {{--        <div class="titleText sizeTextMobile" >About Us</div>--}}
    {{--        <div class="borderTitle"></div>--}}
    {{--    </div>--}}

    <section class="imh-about-section" data-aos="fade-up">
        <div class="imh-container">
            <div class="imh-header">
                <span class="imh-subtitle">Excellence in Safety</span>
                <h2 class="imh-title">Safety Courses Online: Study Anytime, Anywhere With Ireland Safety Course</h2>
                <div class="imh-divider"></div>
            </div>

            <div class="imh-content-grid">
                <div class="imh-main-text">
                    <p class="imh-lead-para" >
                        Welcome to IrelandSafety-Course.com, your premier destination for top-notch online Health And Safety Course Online in Ireland...
                    </p>
                    <p class="imh-body-para" >
                        At Ireland Safety Course, we take immense pride in the integrity and excellence of our safety training services...
                    </p>

                    <div class="imh-contact-box">
                        <p >For inquiries, student support, sales, or technical assistance, reach out via chat or email.</p>
                        <a href="mailto:info@ireland-safetycourse.com" class="imh-email-link">info@info@ireland-safetycourse.com</a>
                    </div>
                </div>

                <div class="imh-trust-card">
                    <div class="imh-badge-item">
                        <div class="imh-icon">🌍</div>
                        <div>
                            <strong>EU & UK Recognized</strong>
                            <p>Fully compliant certifications across borders.</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🎓</div>
                        <div>
                            <strong>CMIOSH Instructors</strong>
                            <p>IOSH certified at NFQ Level 6 expertise.</p>
                        </div>
                    </div>
                    <div class="imh-badge-item">
                        <div class="imh-icon">🛡️</div>
                        <div>
                            <strong>100% Digital</strong>
                            <p>Secure, efficient, and accessible anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="title">
        <div class="titleText sizeTextMobile" >Get your Certificate</div>
        <div class="borderTitle"></div>
        <a href="{{route('register')}}"><div class="pulse-button" data-aos="fade-up">Pay / Register Here</div></a>
    </div>

    <section class="exclusive-benefits-area">
        <div class="exclusive-benefits-grid">

            <div class="exclusive-col" data-aos="fade-up">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #e60b31;">
                        <img src="{{asset('images/logo/home.svg')}}" alt="Home">
                    </div>
                    <h3 class="exclusive-title" >FLEXIBLE HEALTH AND SAFETY COURSE</h3>
                    <p class="exclusive-text" >Complete your training online at a time and location that fits your lifestyle.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #c3d600;">
                        <img src="{{asset('images/logo/clock.svg')}}" alt="Clock">
                    </div>
                    <h3 class="exclusive-title" >SAVE TIME WITH VIRTUAL LEARNING</h3>
                    <p class="exclusive-text" >Avoid travel time and the wait for physical classes to begin.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #345cb3;">
                        <img src="{{asset('images/logo/wallet.svg')}}" alt="Wallet">
                    </div>
                    <h3 class="exclusive-title" >AFFORDABLE HEALTH AND SAFETY COURSE ONLINE</h3>
                    <p class="exclusive-text" >Online education removes the overhead expenses of traditional classroom settings.</p>
                </div>
            </div>

            <div class="exclusive-hero-center" data-aos="zoom-in">
                <img src="{{asset('images/indian.png')}}" class="indianimage" alt="Health and Safety Training">
            </div>

            <div class="exclusive-col" data-aos="fade-up" data-aos-delay="100">
                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f49c12;">
                        <img src="{{asset('images/logo/download.svg')}}" alt="Download">
                    </div>
                    <h3 class="exclusive-title" >INSTANT HEALTH AND SAFETY CERTIFICATE</h3>
                    <p class="exclusive-text" >Finish your modules and download your accredited certificate immediately upon completion.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #356ce6;">
                        <img src="{{asset('images/logo/internet.svg')}}" alt="Global">
                    </div>
                    <h3 class="exclusive-title" >MAXIMIZE EFFICIENCY</h3>
                    <p class="exclusive-text" >Skip the commute and work through your health and safety course at the speed that is right for you.</p>
                </div>

                <div class="exclusive-card">
                    <div class="exclusive-icon-box" style="border-color: #f91819;">
                        <img src="{{asset('images/logo/high-quality.svg')}}" alt="Quality">
                    </div>
                    <h3 class="exclusive-title" >RECOGNISED QUALIFICATIONS</h3>
                    <p class="exclusive-text" >Our digital learning is a cost-effective alternative to earn your official health and safety certificate.</p>
                </div>
            </div>

        </div>
    </section>

    <div class="title spaceTop" data-aos="fade-up" >
        <div class="titleText sizeTextMobile" >Expert Online Health And Safety Course Online | ireland-safetycourse.com</div>
        <div class="borderTitle"></div>
    </div>

    <section class="imh-expert-section" data-aos="fade-up">
        <div class="imh-expert-container">

            <div class="imh-expert-main-grid">
                <div class="imh-expert-narrative">
                    <p >At ireland-safetycourse.com, we understand the critical importance...</p>

                    <div class="imh-expert-cta-card">
                        <h3 >Elevate your workplace safety standards...</h3>
                        <a href="mailto:info@ireland-safetycourse.com" class="imh-expert-btn">Email Us Today</a>
                    </div>
                </div>

                <div class="imh-expert-features">
                    <h4 class="imh-feature-heading" >Why Choose ireland-safetycourse.com?</h4>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">📋</span>
                        <div>
                            <strong>Modern Curriculum</strong>
                            <p>Latest industry standards and best practices.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">💻</span>
                        <div>
                            <strong>Interactive Learning</strong>
                            <p>Engaging modules that make safety training effective.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🏅</span>
                        <div>
                            <strong>Accredited Certification</strong>
                            <p>Showcase compliance with recognized safety regulations.</p>
                        </div>
                    </div>

                    <div class="imh-feature-item">
                        <span class="imh-feature-icon">🕒</span>
                        <div>
                            <strong>24/7 Access</strong>
                            <p>Learn at your own pace, anytime, anywhere.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="imh-expert-footer">
                <p >Ensure your team's safety and efficiency—choose ireland-safetycourse.com today!</p>
            </div>
        </div>
    </section>
    <script src="{{asset("js/counter.js")}}"></script>
@endsection
