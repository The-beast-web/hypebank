<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('images/hypebank-main.png') }}" srcset="./images/logo2x.png 2x"
                    alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('images/kkkl.png') }}"
                    srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('images/myfavicon.png') }}"
                    srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                    class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item @if (request()->routeIs('customer.dashboard')) active current-page @endif">
                        <a href="{{ route('customer.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if (request()->routeIs('customer.transfer')) active current-page @endif">
                        <a href="{{ route('customer.transfer') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">Transfer</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if (request()->routeIs('customer.transaction')) active current-page @endif">
                        <a href="{{ route('customer.transaction') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-tranx"></em></span>
                            <span class="nk-menu-text">Transactions</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if (request()->routeIs('customer.card')) active current-page @endif">
                        <a href="{{ route('customer.card') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-cards-fill"></em></span>
                            <span class="nk-menu-text">Cards</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if (request()->routeIs('customer.loan')) active current-page @endif">
                        <a href="{{ route('customer.loan') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coin"></em></span>
                            <span class="nk-menu-text">Loan</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="html/ecommerce/supports.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                            <span class="nk-menu-text">Supports</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if (request()->routeIs('customer.setting')) active current-page @endif">
                        <a href="{{ route('customer.setting') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <!-- .nk-menu-item -->
                    <li class="nk-menu-item mt-5">
                        <a href="{{ route('logout') }}" class="nk-menu-link"
                            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="nk-menu-icon"><em class="icon ni ni-signout"></em></span>
                            <span class="nk-menu-text">Sign Out</span>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
