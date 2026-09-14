@extends('layouts.horizontal', ['title' => 'Dashboard', 'mode' => $mode ?? '', 'demo' => $demo ?? ''])

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
{{--        <img src="{{asset("images/products/saleOver.png")}}" class="overImgDashBack" alt="" style="border-radius: 10px">--}}

        <div class="adminProductsBack">
            @foreach($products as $product)
                @if($product->status == 0)
                    <div class="pro-course-card" x-data="{}">
                        @if($product->id == 1)
                            <div class="pro-badge badge-theory">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M23 7l-7 5 7 5V7z"></path><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg>
                                Theory + Practical Included
                            </div>
                        @else
                            <div class="pro-badge badge-online">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                                Instant Certificate
                            </div>
                        @endif

                        <div class="pro-image-container">
                            <img src="{{asset('images/productAdd/'.$product->image)}}" alt="{{$product->name}}" class="pro-img">
                            <div class="pro-img-overlay"></div>
                            <div class="pro-price-tag">
                                <span class="currency">€</span>{{$product->price}}
                            </div>
                        </div>

                        <div class="pro-content">
                            <h3 class="pro-title">{{$product->name}}</h3>

                            <div class="pro-features-grid">
                                <div class="pro-feature-card">
                                    <div class="pro-f-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                                    </div>
                                    <div class="pro-f-text">
                                        <span class="f-label">Duration</span>
                                        <span class="f-val">@if($product->id == 14) {{$product->durationTraining}} Day @else {{$product->durationTraining}} Mins @endif</span>
                                    </div>
                                </div>

                                <div class="pro-feature-card">
                                    <div class="pro-f-icon">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
                                    </div>
                                    <div class="pro-f-text">
                                        <span class="f-label">Validity</span>
                                        <span class="f-val">{{$product->certificateValidity}} Years</span>
                                    </div>
                                </div>
                            </div>

                            <div class="pro-accreditations">
                                <span class="acc-tag">INSTANT</span>
                                <span class="acc-tag">AFFORDABLE</span>
                                <span class="acc-tag">PROFESSIONAL</span>
                                <span class="acc-verified">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="#059669"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/><path stroke="#ffffff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" d="M8 11.5l3 3 6-7"/></svg>
                Verified
            </span>
                            </div>

                            <div class="pro-actions">
                                @if($product->description)
                                    <a href="{{route('front.product', $product->slug)}}" class="pro-btn-info">Info</a>
                                @endif
                                <button
                                    type="button"
                                    class="pro-btn-basket"
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
                @endif
            @endforeach

        </div>
        <div style=" bottom: 30px;" id="stripeLogo"><img src="{{asset('images/brands/stripe.webp')}}" alt="" style="width: 235px"></div>
    <div class="trustBadge">
        <div class="trustBadge__icon">
            🍀
        </div>
        <div class="trustBadge__text">
            <div class="trustBadge__eyebrow">Top rated</div>
            <div class="trustBadge__label">Irish Safety Provider</div>
        </div>
    </div>
</div>
<script src="{{asset('js/showModalRegisterEmployee.js')}}"></script>
@endsection

@section('script')
    @vite(['resources/js/pages/dashboard.js'])
@endsection
