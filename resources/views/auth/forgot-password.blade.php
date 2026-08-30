<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Recover Password'])
    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])
</head>

<body class="authentication-bg position-relative">
<div class="account-pages pt-3 pt-sm-4 pb-3 pb-sm-4 position-relative">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-9 col-lg-11">
                <div class="card overflow-hidden border-0 shadow-lg" style="border-radius: 16px;">
                    <div class="row g-0 flex-row-reverse">
                        <!-- Right Side Image -->
                        <div class="col-lg-5 d-none d-lg-block position-relative bg-light">
                            <img src="/images/login/registerLogin.jpg" alt="Password Recovery" class="img-fluid w-100 h-100 object-fit-cover">
                        </div>

                        <!-- Left Side Form -->
                        <div class="col-lg-7 bg-white d-flex flex-column justify-content-center">
                            <div class="p-4 p-sm-5 w-100">

                                <!-- Brand Header -->
                                <div class="text-center mb-4">
                                    <img src="/images/logo/logoLanding.png" alt="logo" height="75" class="mb-3">
                                    <h2 class="fw-bold mb-2" style="color: #1E4D2B; font-size: 26px; letter-spacing: -0.5px;">Forgot Password?</h2>
                                    <p class="text-secondary" style="font-size: 16px;">Enter your email address and we'll send you instructions to reset your password.</p>
                                </div>

                                <!-- Global Flash & Validation Messages -->
                                @if (session('success'))
                                    <div class="alert alert-success border-0 bg-success-subtle text-success py-3 mb-4" style="font-size: 15px;">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if ($message = Session::get('error'))
                                    <div class="alert alert-danger border-0 bg-danger-subtle text-danger py-3 mb-4" style="font-size: 15px;">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 bg-danger-subtle text-danger py-3 mb-4" style="font-size: 15px;">
                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Password Reset Form -->
                                <form action="{{ route('password.email') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label fw-bold text-secondary mb-1" style="font-size: 15px;">Email address</label>
                                        <input class="form-control" style="font-size: 16px; padding: 10px 14px;" name="email" type="email" id="emailaddress" placeholder="name@example.com" value="{{ old('email') }}" required>
                                    </div>

                                    <div class="d-grid mt-4">
                                        <button class="btn py-2.5 text-white fw-bold d-flex align-items-center justify-content-center gap-2" type="submit" style="background-color: #1E4D2B; border-radius: 8px; font-size: 17px; transition: opacity 0.2s;">
                                            <i class="ri-loop-left-line fw-bold"></i> <span>Reset Password</span>
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Back to Login Footer -->
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-secondary mb-0" style="font-size: 16px;">Back to
                            <a href="{{ route('login') }}" class="fw-bold text-decoration-none ms-1" style="color: #1E4D2B;">Log In</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>
@include('layouts.shared/footer-scripts')
</body>

</html>
