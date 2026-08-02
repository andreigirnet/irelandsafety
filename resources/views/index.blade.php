@extends('layouts.vertical', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

@section('content')
@include('layouts.shared/page-title', ['sub_title' => 'Menu', 'page_title' => 'Dashboard'])
<div class="homePageAdminContent" x-data="{ cartAlert: false }">
    <div
        x-show="cartAlert"
        class="alert alert-info shadow-sm cartAlert"
        x-cloak
    >
        <strong>Item</strong> added to the cart
    </div>
    @if (session('created'))
        <div x-data="{ open: true }" x-show="open" class="isc-modal-overlay" id="modalRegisterEmployer" x-cloak>
            <div class="isc-modal-container">
                <div class="isc-modal-accent-bar"></div>
                <div class="isc-modal-content-wrap">
                    <div class="isc-modal-header-row">
                        <div>
                            <div class="isc-modal-title">Hi there! 👋</div>
                            <p class="isc-modal-subtitle">It's <a href="{{route('home')}}">IrelandSafetyCourse.com</a> Training Centre here.</p>
                        </div>
                        <div class="isc-modal-cro-pill">
                            <svg class="isc-modal-shield" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                            <span>LIMITED CRO REGISTERED • Operating under Irish law</span>
                        </div>
                    </div>

                    <div class="isc-modal-text-box">
                        <div class="isc-modal-inner-text">
                            <p>If you require any further assistance or information, please don't hesitate to reach out to us via the chat feature on our website.</p>
                            <p>To access the course, follow the steps outlined on our website once logged in, or return anytime via the email we just sent you with your login details. <strong>Do check your spam/junk folder</strong>, just in case.</p>
                            <p>Upon successful payment processing, you can select your training language: <strong>English, Polish, Spanish, Russian, Romanian, or Ukrainian</strong>.</p>
                            <p class="isc-modal-hours">🕒 Customer support available <strong>10:00 AM – 7:00/8:00 PM</strong> daily, including weekends.</p>
                        </div>
                    </div>

                    <div class="isc-modal-footer-flex">
                        <div class="isc-modal-signature">
                            <p>Best regards,</p>
                            <p class="isc-modal-team">The Ireland Safety Course Team</p>
                        </div>
                        <!-- Fixed using $el.closest('.isc-modal-overlay').remove() to guarantee instant removal upon dynamic injection -->
                        <button type="button" @click="$el.closest('.isc-modal-overlay').remove()" class="adminButtonModal" id="understoodButton">UNDERSTOOD</button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    <div class="luxury-card brand-intro-card">

        <div class="brand-content-text">
            <h2 class="brand-title">
                <span class="exclusive-icon" s>&#x1F340;</span>
                <span class="gradient-text">{{env('APP_NAME')}}</span>
            </h2>
            <p class="brand-description">
                IrelandSafetyCourse  <strong>LIMITED CRO REGISTERED - Operating under Irish law </strong>. Leader in accessible health and safety materials. We offer compliant online training and exceptional service to a global clientele via our seamless digital platform. <strong>Best Prices</strong> on market guarantee
            </p>
        </div>
    </div>
{{--    @if($userPackageId)--}}
{{--        <div class="notice">--}}
{{--            <div class="noticeTitle">Notice:</div>--}}
{{--            <div class="noticeText">--}}
{{--                You have received the course/courses, either through your own purchase or from your employer.--}}
{{--                <br>--}}
{{--                To commence the training, please activate it by clicking the link below and then proceed by pressing the "Start Course" button to get started.--}}
{{--                <br><br>--}}
{{--                Follow the link bellow--}}
{{--                <br>--}}
{{--            </div>--}}
{{--            <a class="homeDownloadButton" href="{{route('package.index')}}">Link</a>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--    <div class="homeActionButtons">--}}
{{--        @if($userPackageId)--}}
{{--            <a href="{{route('course.index', $userPackageId[0]->id)}}" class="homeStartCourseButton">Start Course</a>--}}
{{--        @else--}}
{{--            <form action="{{route('basket.add')}}" method="POST">--}}
{{--                @csrf--}}
{{--                <input type="hidden" value="1" name="productId">--}}
{{--                <button type="submit" class="homeStartCourseButton">Buy a course</button>--}}
{{--            </form>--}}
{{--        @endif--}}
{{--        @if($certificateId)--}}
{{--            <a href="{{route('certificate.download', $certificateId[0]->id)}}" class="homeDownloadButton">Downloand Certificate</a>--}}
{{--        @endif--}}
{{--    </div>--}}
        <img src="{{asset("images/products/saleOver.png")}}" class="overImgDashBack" alt="" style="border-radius: 10px">
        <div class="adminProductsBack">
            @foreach($products as $product)
                @if($product->status == 0)
                <div class="adminProductBack">
                    <img src="{{asset('images/productAdd/'.$product->image)}}" alt="" class="adminProductImageBack">
                    <div class="adminProductBottomBack">
                        <div class="adminProductNameBack">{{$product->name}}</div>
                        @if($product->id == 1)
                            <div class="info-bar">
                                <div class="video-camera-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#00a86b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M23 7l-7 5 7 5V7z"></path>
                                        <rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect>
                                    </svg>
                                </div>
                                <span class="text">Theory + Practical part included</span>
                            </div>
                        @else
                            <div class="info-bar">
                                <div class="check-badge">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00a86b" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 6L9 17l-5-5"/>
                                    </svg>
                                </div>
                                <span class="text">Accredited · Instant Certificate</span>
                            </div>
                        @endif
                        <div class="certification-wrapper">
                            <!-- Using a span with a specific icon character or font-awesome class -->

                            <span class="shield-tick-icon">
                                <svg width="22" height="22" viewBox="0 0 24 24" fill="#00a86b">
                                  <!-- Shield shape -->
                                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                    <!-- Tick mark -->
                                  <path fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M8 11.5l3 3 6-7"/>
                                </svg>
                              </span>
                            <div class="cert-tags">
                                <span class="tag">QQI</span>
                                <span class="tag">CPD</span>
                                <span class="tag">RoSPA</span>
                            </div>
                        </div>
                        <div class="product-info-icons">
                            @if($product->id == 14)
                                <div class="product-icons-back">
                                    <img src="images/icons/back-in-time.png" alt="">
                                    <div>Duration: {{$product->durationTraining}} Day(Half day)</div>
                                </div>
                            @else
                                <div class="product-icons-back">
                                    <img src="images/icons/back-in-time.png" alt="">
                                    <div style="font-weight: 600; display: flex; align-items: center; column-gap: 5px">Duration: <span style="font-weight: 500">{{$product->durationTraining}} minutes</span></div>
                                </div>
                            @endif
                            <div class="product-icons-back">
                                <img src="images/icons/certificate.png" alt="">
                                <div style="font-weight: 600; display: flex; align-items: center; column-gap: 5px">Validity: <span style="font-weight: 500">{{$product->certificateValidity}} Years</span></div>
                            </div>
                            <div class="product-icons-back">
                                <img src="images/icons/money.png" alt="">
                                <div style="font-weight: bold"><del style="color: gray; font-size:18px">{{round($product->price * 2.31)}} €</del> <span style="color: red; font-size: 30px">{{$product->price}} €</span></div>
                            </div>
                        </div>
                        <div x-data="{}">
                            <div class="productButtonsBack">
                                @if($product->description)
                                    <a href="{{route('front.product', $product->slug)}}" class="homeInfoCourseButton">Info</a>
                                @endif

                                <!-- Add to Basket Button -->
                                    <button
                                        type="button"
                                        class="buttonProductAdminAddBack"
                                        @click="
                                                $store.cart.addItem({
                                                    id: {{ $product->id }},
                                                    title: '{{ addslashes($product->name) }}',
                                                    image: '{{ addslashes($product->image) }}',
                                                    price: {{ $product->price }},
                                                    quantity: 1
                                                });
                                                cartAlert = true;
                                                setTimeout(() => { cartAlert = false }, 1000);
                                            ">
                                        Add To Basket
                                    </button>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
        </div>
        <div style=" bottom: 30px;" id="stripeLogo"><img src="{{asset('images/brands/stripe.webp')}}" alt="" style="width: 235px"></div>

</div>
<script src="{{asset('js/showModalRegisterEmployee.js')}}"></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
