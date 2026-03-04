<nav class="modern-nav">
    <div class="nav-wrapper">
        <a href="{{route('frontHome')}}" class="brand">
            <img src="{{asset('images/logo/logomain.png')}}" alt="Ireland Safety Course" class="logoradius">
        </a>

        <div class="nav-links">
            <a href="{{route('frontHome')}}">HOME</a>
            <a href="{{route('front.faq')}}">HEALTH&SAFETY FAQ's</a>
            <a href="{{route('front.team')}}">TEAM TRAINING</a>
            <a href="{{route('front.consulting')}}">CONSULTING</a>
            {{--            <a href="{{route('front.blog')}}"></a>--}}
            <a href="{{route('front.contact')}}">CONTACT</a>
        </div>

        <div class="nav-utils">
{{--            <div class="language-picker">--}}
{{--                <img src="{{asset('images/flags/en.png')}}" class="flag-icon">--}}
{{--                <select>--}}
{{--                    <option value="en">English</option>--}}
{{--                    <option value="ro">Romanian</option>--}}
{{--                    <option value="ru">Russian</option>--}}
{{--                    <option value="pl">Polish</option>--}}
{{--                    <option value="ukr">Ukrainian</option>--}}
{{--                    <option value="sp">Spanish</option>--}}
{{--                </select>--}}
{{--            </div>--}}

            <a href="{{route('login')}}" class="cta-login">LOGIN</a>
        </div>
    </div>
</nav>
