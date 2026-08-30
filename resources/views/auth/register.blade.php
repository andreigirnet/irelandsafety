<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Register'])
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
                            <img src="/images/login/registerLogin.jpg" alt="Safety Course Registration" class="img-fluid w-100 h-100 object-fit-cover">
                        </div>

                        <!-- Left Side Form -->
                        <div class="col-lg-7 bg-white d-flex flex-column justify-content-center">
                            <div class="p-3 p-sm-4 w-100">

                                <!-- Brand Header -->
                                <div class="text-center mb-3">
                                    <img src="/images/logo/logoLanding.png" alt="logo" height="55" class="mb-2">
                                    <h2 class="fw-bold mb-1" style="color: #1E4D2B; font-size: 24px; letter-spacing: -0.5px;">Ireland Safety Course</h2>
                                    <p class="text-secondary mb-0" style="font-size: 15px;">Create your free account today</p>
                                </div>

                                <!-- Global Flash & Validation Messages -->
                                @if (session('success'))
                                    <div class="alert alert-success border-0 bg-success-subtle text-success py-2 mb-3" style="font-size: 15px;">
                                        {{ session('success') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger border-0 bg-danger-subtle text-danger py-2 mb-3" style="font-size: 15px;">
                                        <ul class="mb-0 ps-3">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <!-- Google Sign Up Button -->
                                <div class="mb-3">
                                    <a href="{{ route('auth.google') }}" class="btn w-100 d-flex align-items-center justify-content-center gap-2 py-2" style="background-color: #ffffff; color: #374151; border: 1.5px solid #d1d5db; border-radius: 8px; font-weight: 600; font-size: 16px; transition: all 0.2s ease; box-shadow: 0 1px 2px rgba(0,0,0,0.02);">
                                        <svg style="width: 20px; height: 20px;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                            <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                            <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                                            <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
                                        </svg>
                                        <span>Continue with Google</span>
                                    </a>
                                </div>

                                <div class="position-relative text-center mb-3">
                                    <hr class="text-muted opacity-25">
                                    <span class="position-absolute top-50 start-50 translate-middle bg-white px-3 text-muted text-uppercase" style="font-size: 12px; letter-spacing: 0.5px; font-weight: 600;">Or with email</span>
                                </div>

                                <!-- Standard Registration Form -->
                                <form method="POST" class="loginForm" action="{{ route('register') }}">
                                    @csrf
                                    <div class="mb-2">
                                        <label for="fullname" class="form-label fw-bold text-secondary mb-1" style="font-size: 15px;">Full Name</label>
                                        <input class="form-control" style="font-size: 16px; padding: 8px 12px;" type="text" name="name" id="fullname"
                                               placeholder="Enter your name" value="{{ old('name') }}" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="phone" class="form-label fw-bold text-secondary mb-1" style="font-size: 15px;">Phone</label>
                                        <input class="form-control" style="font-size: 16px; padding: 8px 12px;" name="phone" type="text" id="phone"
                                               placeholder="Enter your phone" value="{{ old('phone') }}" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="emailaddress" class="form-label fw-bold text-secondary mb-1" style="font-size: 15px;">Email address</label>
                                        <input class="form-control" style="font-size: 16px; padding: 8px 12px;" type="email" name="email" id="emailaddress"
                                               placeholder="name@example.com" value="{{ old('email') }}" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="password" class="form-label fw-bold text-secondary mb-1" style="font-size: 15px;">Password</label>
                                        <input class="form-control" style="font-size: 16px; padding: 8px 12px;" type="password" name="password" id="password"
                                               placeholder="Create a password" required>
                                    </div>

                                    <div class="mb-2">
                                        <label for="password-confirm" class="form-label fw-bold text-secondary mb-1" style="font-size: 15px;">Confirm Password</label>
                                        <input class="form-control" style="font-size: 16px; padding: 8px 12px;" type="password" name="password_confirmation" id="password-confirm"
                                               placeholder="Confirm your password" required autocomplete="new-password">
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="checkbox-signup" name="terms" style="width: 1.2em; height: 1.2em; margin-top: 0.2em;" required>
                                            <label class="form-check-label text-secondary ms-1" for="checkbox-signup" style="font-size: 15px;">
                                                I accept <a href="{{ route('terms') }}" class="text-decoration-underline" style="color: #1E4D2B; font-weight: 600;">Terms and Conditions</a>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn py-2 text-white fw-bold" type="submit" style="background-color: #1E4D2B; border-radius: 8px; font-size: 17px; transition: opacity 0.2s;">
                                            Sign Up Free
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Login Redirect Footer -->
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p class="text-secondary mb-0" style="font-size: 16px;">Already have an account?
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
