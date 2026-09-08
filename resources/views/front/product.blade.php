@extends('front.app')
@section('content')
    <div class="title" data-aos="fade-up">
        <div class="product-title">{{$product->name}}</div>
        <div class="borderTitle" style="margin-bottom: 20px"></div>
    </div>

    <div class="productSection">
        <div class="productInner">
            @if($product->id === 1 || $product->id === 2 || $product->id === 3 || $product->id === 4 || $product->id === 5 || $product->id === 6 || $product->id === 7 || $product->id === 8 || $product->id === 9 || $product->id === 10 || $product->id === 11 || $product->id === 12 || $product->id === 17 || $product->id === 18 || $product->id === 19)
                <div class="productIcons">
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/clock.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Average Duration: {{$product->durationTraining}} Hour</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/printer.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Digital & Printable Certificate</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/mortarboard.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Unlimited Exam Attempts</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/map.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Accepted Across Ireland, UK and Europe</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/validation.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Valid For {{$product->certificateValidity}} Years</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/calendar.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Self-Paced. Available 24/7</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/smartphone.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Available On All Major Devices</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/messenger.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Live Student Support</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/document.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">Permanent Record Of Training</div>
                    </div>
                    <div class="productItemIcon">
                        <img src="{{asset('images/productIcons/user.png')}}" alt="" data-aos="fade-right">
                        <div class="productItemText" data-aos="fade-left">User Management Tools Available</div>
                    </div>
                </div>
            @endif
            <hr>
            {!!$product->description!!}
        </div>
    </div>
@endsection
