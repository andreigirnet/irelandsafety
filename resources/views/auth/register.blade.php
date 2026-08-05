<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.shared/title-meta', ['title' => 'Register'])

    @include('layouts.shared/head-css', ['mode' => $mode ?? '', 'demo' => $demo ?? ''])



</head>

<body class="authentication-bg">
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
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

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-lg-10">
                    <div class="card overflow-hidden bg-opacity-25">
                        <div class="row g-0">
                            <div class="col-lg-6 d-none d-lg-block p-2">
                                <img src="/images/login/registerLogin.jpg" alt="" class="img-fluid rounded h-100">
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex flex-column h-100">
                                    <div style="display: flex; flex-direction: column; align-items: center; gap: 1.5rem;">
                                        <!-- Logo -->
                                        <img src="/images/logo/logoLight.webp" alt="logo" height="100">
                                        <div style="display: flex; flex-direction: column; align-items: center; width: 100%; margin-bottom: 15px;">
                                            <a href="{{ route('auth.google') }}" style="display: flex; align-items: center; justify-content: center; background-color: #ffffff; color: #374151; border: 2px solid #3bc4be; padding: 10px 20px; border-radius: 6px; text-decoration: none; font-weight: 600; font-family: sans-serif; width: 100%; max-width: 350px; box-shadow: 0 2px 4px rgba(0,0,0,0.05); transition: all 0.2s;">
                                                <svg style="width: 20px; height: 20px; margin-right: 12px;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
                                                    <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
                                                    <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z" fill="#FBBC05"/>
                                                    <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z" fill="#EA4335"/>
                                                </svg>
                                                <span>Sign Up with Google</span>
                                            </a>
                                        </div>
                                        </a>
                                    </div>
                                    <div class="px-4 py-2 my-auto">
                                        <h4 class="fs-20">Free Sign Up</h4>
                                        <p class="text-muted mb-3">Enter your email address and password to access
                                            account.</p>

                                        <!-- form -->
                                        <form method="POST" class="loginForm" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input class="form-control" type="text" name="name" id="fullname"
                                                    placeholder="Enter your name" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Phone</label>
                                                <input class="form-control" name='phone' type="text" id="phone"
                                                    placeholder="Enter your phone" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="emailaddress" class="form-label">Email address</label>
                                                <input class="form-control" type="email" name='email' id="emailaddress" required=""
                                                    placeholder="Enter your email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">Password</label>
                                                <input class="form-control" type="password" name='password' required="" id="password"
                                                    placeholder="Enter your password">
                                            </div>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">ConfirmPassword</label>
                                                <input id="password-confirm" placeholder="Password Confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="checkbox-signup">
                                                    <label class="form-check-label" for="checkbox-signup">I accept <a
                                                            href="{{route('terms')}}" class="text-muted">Terms and
                                                            Conditions</a></label>
                                                </div>
                                            </div>
                                            <div class="mb-0 d-grid text-center">
                                                <button class="btn btn-primary fw-semibold" type="submit">SignUp</button>
                                            </div>

                                            <div class="text-center mt-4">
                                                <div class="d-flex gap-2 justify-content-center mt-3">
{{--                                                    <a href="javascript: void(0);" class="btn btn-soft-primary"><i--}}
{{--                                                            class="ri-facebook-circle-fill"></i></a>--}}
                                                    <!--<a href="{{route('google')}}"><img-->
                                                    <!--        src="{{asset('images/google.png')}}" alt=""></a>-->
{{--                                                    <a href="javascript: void(0);" class="btn btn-soft-info"><i--}}
{{--                                                            class="ri-twitter-fill"></i></a>--}}
{{--                                                    <a href="javascript: void(0);" class="btn btn-soft-dark"><i--}}
{{--                                                            class="ri-github-fill"></i></a>--}}
                                                </div>
                                            </div>

                                            @if(session('errors'))
                                                <div class="alert alert-danger" style="margin-top: 30px">
                                                    <ul>
                                                        @foreach(session('errors')->all() as $error)
                                                            <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                        </form>
                                        <!-- end form-->
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <div class="row">
                <div class="col-12 text-center" style="font-size: 18px">
                    <p class="text-dark-emphasis">Already have account? <a href="{{route('login')}}" class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"><b>Log In</b></a></p>
                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
{{--<script>--}}
{{--    window.replainSettings = { id: '026d1438-5b42-4350-b663-dcd99f150913' };--}}
{{--    (function(u){var s=document.createElement('script');s.async=true;s.src=u;--}}
{{--        var x=document.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);--}}
{{--    })('https://widget.replain.cc/dist/client.js');--}}
{{--</script>--}}
<script id="chatway" async="true" src="https://cdn.chatway.app/widget.js?id=FCKWCyQL7PYg"></script>

    @include('layouts.shared/footer-scripts')

</body>

</html>
