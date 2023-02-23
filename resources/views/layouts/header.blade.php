<div class="app-header header-shadow">
    <div class="app-header__logo">
        <div class="logo-src hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar" onclick="myFunctionLogoMini()"></div>

        <div style="display:none" id="div_mini" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
            <img src="{{ asset('assets/images/mis-hosinfo-logo-mini.png') }}" alt="" onclick="myFunctionLogoFull()">
        </div>

    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>

    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>

    <div class="app-header__content">

        @include('layouts.header-left')
        @include('layouts.header-right')

    </div>

</div>
