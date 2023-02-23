<div class="app-header-right">
    <div class="header-dots">
        {{-- <div class="dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false"
                data-bs-toggle="dropdown" class="p-0 me-2 btn btn-link">
                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                    <span class="icon-wrapper-bg bg-primary"></span>
                    <i class="icon text-primary ion-android-apps"></i>
                </span>
            </button>
            <div tabindex="-1" role="menu" aria-hidden="true"
                class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                <div class="dropdown-menu-header">
                    <div class="dropdown-menu-header-inner bg-plum-plate">
                        <div class="menu-header-image" style="background-image: url('{{ asset("assets/images/dropdown-header/abstract4.jpg") }}');"></div>
                        <div class="menu-header-content text-white">
                            <h5 class="menu-header-title">Grid Dashboard</h5>
                            <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                        </div>
                    </div>
                </div>
                <div class="grid-menu grid-menu-xl grid-menu-3col">
                    <div class="g-0 row">
                        <div class="col-sm-6 col-xl-4">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                Automation
                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                Reports
                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                Settings
                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                Content
                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                Activity
                            </button>
                        </div>
                        <div class="col-sm-6 col-xl-4">
                            <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                Contacts
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item-divider nav-item"></li>
                    <li class="nav-item-btn text-center nav-item">
                        <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                    </li>
                </ul>
            </div>
        </div> --}}
        <div class="dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false"
                data-bs-toggle="dropdown"  class="p-0 me-2 btn btn-link">
                <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                    <span class="icon-wrapper-bg bg-danger"></span>
                    <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                    <span class="badge badge-dot badge-dot-sm bg-danger">Notifications</span>
                </span>
            </button>
            <div tabindex="-1" role="menu" aria-hidden="true"
                class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                <div class="dropdown-menu-header mb-0">
                    <div class="dropdown-menu-header-inner bg-deep-blue">
                        <div class="menu-header-image opacity-1" style="background-image: url('{{ asset("assets/images/dropdown-header/city3.jpg") }}');"></div>
                        <div class="menu-header-content text-dark">
                            <h5 class="menu-header-title">Notifications</h5>
                            <h6 class="menu-header-subtitle">You have
                                <b>21</b> unread messages
                            </h6>
                        </div>
                    </div>
                </div>
                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                    <li class="nav-item">
                        <a role="tab" class="nav-link active" data-bs-toggle="tab" href="#tab-messages-header">
                            <span>Messages</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" data-bs-toggle="tab" href="#tab-events-header">
                            <span>Events</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a role="tab" class="nav-link" data-bs-toggle="tab" href="#tab-errors-header">
                            <span>System Errors</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                        <div class="scroll-area-sm">
                            <div class="scrollbar-container">
                                <div class="p-3">
                                    <div class="notifications-box">
                                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <p>Yet another one, at
                                                            <span class="text-success">15:00 PM</span>
                                                        </p>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">
                                                            Build the production release
                                                            <span class="badge bg-danger ms-2">NEW</span>
                                                        </h4>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">
                                                            Something not important
                                                            <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/1.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/2.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/3.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/4.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/5.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/9.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/7.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                    <div class="avatar-icon">
                                                                        <img src="{{ asset('assets/images/avatars/8.jpg') }}" alt="">
                                                                    </div>
                                                                </div>
                                                                <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                    <div class="avatar-icon">
                                                                        <i>+</i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </h4>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">This dot has an info state</h4>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">All Hands Meeting</h4>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <p>Yet another one, at
                                                            <span class="text-success">15:00 PM</span>
                                                        </p>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">
                                                            Build the production release
                                                            <span class="badge bg-danger ms-2">NEW</span>
                                                        </h4>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                <div>
                                                    <span class="vertical-timeline-element-icon bounce-in"></span>
                                                    <div class="vertical-timeline-element-content bounce-in">
                                                        <h4 class="timeline-title">This dot has a dark state</h4>
                                                        <span class="vertical-timeline-element-date"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-events-header" role="tabpanel">
                        <div class="scroll-area-sm">
                            <div class="scrollbar-container">
                                <div class="p-3">
                                    <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-success"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                    <p>
                                                        Lorem ipsum dolor sic amet, today at
                                                        <a href="javascript:void(0);">12:00 PM</a>
                                                    </p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-warning"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <p>Another meeting today, at
                                                        <b class="text-danger">12:00 PM</b>
                                                    </p>
                                                    <p>Yet another one, at
                                                        <span class="text-success">15:00 PM</span>
                                                    </p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-danger"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">Build the production release</h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                        labore et dolore magna elit enim at minim veniam quis nostrud
                                                    </p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-primary"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title text-success">Something not important</h4>
                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-success"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">All Hands Meeting</h4>
                                                    <p>
                                                        Lorem ipsum dolor sic amet, today at
                                                        <a href="javascript:void(0);">12:00 PM</a>
                                                    </p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-warning"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <p>Another meeting today, at
                                                        <b class="text-danger">12:00 PM</b>
                                                    </p>
                                                    <p>Yet another one, at
                                                        <span class="text-success">15:00 PM</span>
                                                    </p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-danger"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title">Build the production release</h4>
                                                    <p>
                                                        Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut
                                                        labore et dolore magna elit enim at minim veniam quis nostrud
                                                    </p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="vertical-timeline-item vertical-timeline-element">
                                            <div>
                                                <span class="vertical-timeline-element-icon bounce-in">
                                                    <i class="badge badge-dot badge-dot-xl bg-primary"></i>
                                                </span>
                                                <div class="vertical-timeline-element-content bounce-in">
                                                    <h4 class="timeline-title text-success">Something not important</h4>
                                                    <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p>
                                                    <span class="vertical-timeline-element-date"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                        <div class="scroll-area-sm">
                            <div class="scrollbar-container">
                                <div class="no-results pt-3 pb-0">
                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                        <span class="swal2-success-line-tip"></span>
                                        <span class="swal2-success-line-long"></span>
                                        <div class="swal2-success-ring"></div>
                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                    </div>
                                    <div class="results-subtitle">All caught up!</div>
                                    <div class="results-title">There are no system errors!</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item-divider nav-item"></li>
                    <li class="nav-item-btn text-center nav-item">
                        <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="header-btn-lg pe-0">
        <div class="widget-content p-0">
            <div class="widget-content-wrapper">
                <div class="widget-content-left ms-0 header-user-info">
                    <div class="widget-heading"> @guest Guest @else{{ Auth::user()->name }}@endguest</div>
                    <div class="widget-subheading"> @guest ผู้มาเยือน @else Admin @endguest</div>
                </div>
                <div class="widget-content-left ms-3">
                    <div class="btn-group">
                        <a data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                            @guest
                                <img width="42" class="rounded-circle" src="{{ asset('assets/images/avatars/drghost.jpg') }}" alt="">
                            @else
                                <img width="42" class="rounded-circle" src="{{ asset('assets/images/avatars/nathaphong.jpg') }}" alt="">
                            @endguest
                            <i class="fa fa-angle-down ms-2 opacity-8"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true"
                            class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-info">
                                    <div class="menu-header-image opacity-2" style="background-image: url('{{ asset("assets/images/dropdown-header/city3.jpg") }}');"></div>
                                    <div class="menu-header-content text-start">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                @guest
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left me-3">
                                                        <img width="42" class="rounded-circle"
                                                            src="{{ asset('assets/images/avatars/drghost.jpg') }}"  alt="">
                                                    </div>
                                                    <div class="widget-content-left">
                                                        <div class="widget-heading">Guest</div>
                                                        <div class="widget-subheading opacity-8">ผู้มาเยือน</div>
                                                    </div>
                                                    <div class="widget-content-right me-2">
                                                        <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="{{ route('login') }}">{{ __('Login') }}</a>
                                                    </div>
                                                </div>
                                                @else
                                                <div class="widget-content-left me-3">
                                                    <img width="42" class="rounded-circle"
                                                        src="{{ asset('assets/images/avatars/nathaphong.jpg') }}"  alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">{{ Auth::user()->name }}</div>
                                                    <div class="widget-subheading opacity-8">{{ Auth::user()->email }}</div>
                                                </div>
                                                <div class="widget-content-right me-2">
                                                    <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                                @endguest
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-area-xs" style="height: 150px;">
                                <div class="scrollbar-container ps">
                                    <ul class="nav flex-column">
                                        @guest
                                        <li class="nav-item">
                                            <a href="{{ route('password.request') }}" class="nav-link">ลืมรหัสผ่าน</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">สมัครสมาชิกใหม่</a>
                                        </li>
                                        @else
                                        <li class="nav-item">
                                            <a href="{{ route('home') }}" class="nav-link">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('profile') }}" class="nav-link">ข้อมูลของฉัน</a>
                                        </li>
                                        @endguest

                                        {{-- <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Settings
                                            </a>
                                        </li> --}}

                                    </ul>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider mb-0 nav-item"></li>
                            </ul>
                            <div class="grid-menu grid-menu-2col">
                                <div class="g-0 row">
                                    <div class="col-sm-6">
                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                            <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                            Home
                                        </button>
                                    </div>
                                    <div class="col-sm-6">
                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                            <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                            <b>Support Tickets</b>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- <div class="widget-content-right header-user-info ms-3">
                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                        <i class="fa text-white fa-calendar pe-1 ps-1"></i>
                    </button>
                </div> --}}
            </div>
        </div>
    </div>

    {{-- rightmenu --}}
    {{-- <div class="header-btn-lg">
        <button type="button" class="hamburger hamburger--elastic open-right-drawer">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
        </button>
    </div> --}}

</div>
