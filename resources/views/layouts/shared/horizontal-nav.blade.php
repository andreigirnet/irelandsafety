<!-- ========== Horizontal Menu Start ========== -->
<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('home')}}" id="topnav-dashboards" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-home-2-fill"></i>Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('admin.en.profile')}}" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-user-3-fill"></i>Profile
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('package.index')}}" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-list-ordered"></i>My Courses
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="{{route('admin.en.profile')}}" id="topnav-apps" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-team-fill"></i>For Employers <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none" href="{{route('dashboard.employer')}}" id="topnav-auth"
                                    role="button">
                                    Employer Dashboard
                                </a>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none" href="{{route('register.employee')}}" id="topnav-auth"
                                   role="button" >
                                    Register Employee
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-money-euro-circle-fill"></i>Billing <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none" href="{{route('basket.index')}}" id="topnav-ui-kit"
                                    role="button" >
                                    Basket
                                </a>
{{--                                <div class="dropdown-menu" aria-labelledby="topnav-ui-kit">--}}
{{--                                    <a href="" class="dropdown-item">Accordions</a>--}}
{{--                                    <a href="" class="dropdown-item">Alerts</a>--}}
{{--                                    <a href="" class="dropdown-item">Avatars</a>--}}
{{--                                    <a href="" class="dropdown-item">Badges</a>--}}
{{--                                    <a href="" class="dropdown-item">Breadcrumb</a>--}}
{{--                                    <a href="" class="dropdown-item">Buttons</a>--}}
{{--                                    <a href="" class="dropdown-item">Cards</a>--}}
{{--                                    <a href="" class="dropdown-item">Carousel</a>--}}
{{--                                    <a href="" class="dropdown-item">Dropdowns</a>--}}
{{--                                    <a href="" class="dropdown-item">Embed Video</a>--}}
{{--                                    <a href=" " class="dropdown-item">Grid</a>--}}
{{--                                    <a href="" class="dropdown-item">List Group</a>--}}
{{--                                    <a href="" class="dropdown-item">Links</a>--}}
{{--                                </div>--}}
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item arrow-none" href="{{route('order.index.user')}}" id="topnav-ui-kit2"
                                    role="button">
                                    Orders
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link arrow-none" href="{{route('certificate.index')}}" id="topnav-layouts" role="button"
                            >
                            <i class="ri-file-paper-2-fill"></i>Certificates
                        </a>
                    </li>

                    @if(auth()->user()->is_admin)
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle arrow-none" href="{{route('admin.en.profile')}}" id="topnav-apps" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-briefcase-line"></i>For Admin <div class="arrow-down"></div>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="topnav-apps">
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none" href="{{route('admin.dashboard')}}" id="topnav-auth"
                                       role="button">
                                        Dashboard Metrics
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none" href="{{route('users.index')}}" id="topnav-auth"
                                       role="button" >
                                        Users
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none" href="{{route('orders.index')}}" id="topnav-auth"
                                       role="button" >
                                        Orders
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none" href="{{route('packages.admin.index')}}" id="topnav-auth"
                                       role="button" >
                                        Packages
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none" href="{{route('certificates.admin.index')}}" id="topnav-auth"
                                       role="button" >
                                        Certificates
                                    </a>
                                </div>
                                <div class="dropdown">
                                    <a class="dropdown-item arrow-none" href="{{route('admin.blogs.index')}}" id="topnav-auth"
                                       role="button" >
                                        Blogs
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ========== Horizontal Menu End ========== -->
