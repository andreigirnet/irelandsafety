<nav class="modern-nav" x-data="{ mobileMenuOpen: false }">
    <div class="nav-wrapper">
        <!-- Mobile Hamburger Toggle Button (Left on mobile) -->
        <button class="mobile-menu-toggle" @click="mobileMenuOpen = !mobileMenuOpen" aria-label="Toggle Menu">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="28" height="28">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>



        <div class="nav-links">
            <a href="/">HOME</a>
            <a href="{{route('front.faq')}}">MANUAL HANDLING FAQ's</a>
            <a href="{{route('front.team')}}">TEAM TRAINING</a>
            <a href="{{route('front.about')}}">ABOUT US</a>
            {{--            <a href="{{route('front.blog')}}"></a>--}}
            <a href="{{route('front.contact')}}">CONTACT</a>
        </div>
        <a href="{{route('frontHome')}}" class="brand">
            <img src="{{asset('images/logo/logoLanding.png')}}" alt="Ireland Safety Course" class="logoradius">
            <div class="textLogoDisplay">Ireland Safety Course</div>
        </a>
        <div class="nav-utils">
            <div class="nav-auth-buttons">
                @auth
                    <a href="{{ route('home') }}" class="cta-dashboard">HOME</a>
                @else
                    <a href="{{ route('login') }}" class="cta-login">LOGIN</a>
                    <a href="{{ route('register') }}" class="cta-register">REGISTER</a>
                @endauth
            </div>
        </div>
    </div>

    <!-- Full-Screen Slide-out Menu Overlay & Drawer -->
    <div class="mobilesafetynav-mobile-menu-overlay"
         x-show="mobileMenuOpen"
         x-transition.opacity
         @click="mobileMenuOpen = false"
         style="display: none;">
    </div>

    <div class="mobilesafetynav-mobile-menu-drawer" :class="{ 'open': mobileMenuOpen }">
        <div class="mobilesafetynav-mobile-menu-header">
            <a href="{{route('frontHome')}}" class="brand">
                <img src="{{asset('images/logo/logoLanding.png')}}" alt="Ireland Safety Course" class="logoradius">
                <div class="textLogoMob">Ireland Safety Course</div>
            </a>
            <button class="mobilesafetynav-mobile-menu-close" @click="mobileMenuOpen = false" aria-label="Close Menu">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="24" height="24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div id="safetyResponsiveNav" class="mobile">
            <div id="safetyResponsiveNavMenu" class="mobile">
                <div class="safetyResponsiveNavItem mobile"><a href="/" class="safetyMenuColor mobile">Home</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.faq')}}" class="safetyMenuColor mobile">Please Read Faq's</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.team')}}" class="safetyMenuColor mobile">Team Training</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.about')}}" class="safetyMenuColor mobile">About Us</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.blog')}}" class="safetyMenuColor mobile">Blog</a></div>
                <div class="safetyResponsiveNavItem mobile"><a href="{{route('front.contact')}}" class="safetyMenuColor mobile">Contact Us</a></div>
            </div>
        </div>

        <div class="mobilesafetynav-mobile-menu-footer mobile">
            @auth
                <a href="{{ route('home') }}" class="mobilesafetynav-mobile-cta-dashboard mobile">Home</a>
            @else
                <a href="{{ route('login') }}" class="mobilesafetynav-mobile-cta-login mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/></svg>
                    Login
                </a>
                <a href="{{ route('register') }}" class="mobilesafetynav-mobile-cta-register mobile">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/></svg>
                    Register
                </a>
            @endauth
            <p class="mobilesafetynav-mobile-footer-text mobile">IRELAND'S LEADING SAFETY TRAINING</p>
        </div>
    </div>
</nav>

