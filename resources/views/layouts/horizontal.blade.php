<!DOCTYPE html>
<html lang="en" data-layout="topnav" data-menu-color="{{ $menuColor ?? 'light' }}" data-topbar-color="{{ $topbarColor ?? 'light' }}">

<head>
    @include('layouts.shared/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
    <link rel="stylesheet" href="{{asset("css/admin/navigationMain.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminMain.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminProfile.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/homePageAdmin.css")}}">
    <link rel="stylesheet" href="{{asset("css/front/landing.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/consulting.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/employeeRegister.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/dashboard.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/basket.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/orders.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/course.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/checkout.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/package.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/share.css")}}">
    <link rel="stylesheet" href="{{asset("css/admin/adminProduct.css")}}">
    <script src="{{asset('js/cart.js')}}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.3/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>
    <!-- Begin page -->
    <div class="wrapper">

        @include('layouts.shared/topbar')
        @include('layouts.shared/horizontal-nav')

        <div class="content-page">
            <div class="content-page">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger">
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- container -->

            </div>
            <!-- content -->

            @include('layouts.shared/footer')
        </div>

    </div>
    <!-- END wrapper -->

    @yield('modal')

    @include('layouts.shared/right-sidebar')

    @include('layouts.shared/footer-scripts')

    @vite(['resources/js/layout.js', 'resources/js/main.js'])
    <script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>
    <script src="https://cdn.tiny.cloud/1/8htcs2m2n03rmg8dbr9dhfupzckkc16co1pzuf80yst8q9tj/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>

    {{--    <script src="{{asset('js/prevent.js')}}"></script>--}}
</body>

</html>
