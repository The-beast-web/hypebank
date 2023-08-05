<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="html/index.html" class="logo-link" style="width: 100px">

                <img class="logo-light logo-img" src="{{ getLogoDark() }}"  alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('images/kkkl.png') }}"  alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('images/logo-small.png') }}" srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-item @if(request()->routeIs('admin.dashboard')) active current-page @endif">
                        <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                            <span class="nk-menu-text">Admin Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if(request()->routeIs('admin.users.index')) active current-page @endif">
                        <a href="{{ route('admin.users.index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            <span class="nk-menu-text">Customer List</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if(request()->routeIs('admin.kyc.list')) active current-page @endif">
                        <a href="{{ route('admin.kyc.list') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-reports-alt"></em></span>
                            <span class="nk-menu-text">KYC</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if(request()->routeIs('admin.card')) active current-page @endif @if(request()->routeIs('admin.card.request')) active current-page @endif">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-cards-fill"></em></span>
                            <span class="nk-menu-text">Cards</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item @if(request()->routeIs('admin.card')) active current-page @endif"><a href="{{ route('admin.card') }}" class="nk-menu-link"><span class="nk-menu-text">Available Cards</span></a></li>
                            <li class="nk-menu-item @if(request()->routeIs('admin.card.request')) active current-page @endif"><a href="{{ route('admin.card.request') }}" class="nk-menu-link"><span class="nk-menu-text">Cards Request</span></a></li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item  @if(request()->routeIs('admin.deposits')) active current-page @endif">
                        <a href="{{ route('admin.deposits') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            <span class="nk-menu-text">Deposits</span>
                        </a>
                    </li>
                    <li class="nk-menu-item @if(request()->routeIs('admin.withdraw.list')) active current-page @endif">
                        <a href="{{ route('admin.withdraw.list') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-wallet-out"></em></span>
                            <span class="nk-menu-text">Withdrawals</span>
                        </a>
                    </li>
                    <li class="nk-menu-item @if(request()->routeIs('admin.loan.request')) active current-page @endif">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                            <span class="nk-menu-icon"><em class="icon ni ni-money"></em></span>
                            <span class="nk-menu-text">Loans</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item @if(request()->routeIs('admin.card.request')) active current-page @endif"><a href="{{ route('admin.loan.active') }}" class="nk-menu-link"><span class="nk-menu-text">Active Loans</span></a></li>
                            <li class="nk-menu-item @if(request()->routeIs('admin.loan.request')) active current-page @endif"><a href="{{ route('admin.loan.request') }}" class="nk-menu-link"><span class="nk-menu-text">Loan Requests</span></a></li>
                        </ul><!-- .nk-menu-sub -->
                    </li>
                    <li class="nk-menu-item">
                        <a href="html/ecommerce/supports.html" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                            <span class="nk-menu-text">Support</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item @if(request()->routeIs('admin.setting')) active current-page @endif">
                        <a href="{{ route('admin.setting') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            <span class="nk-menu-text">Settings</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <!-- .nk-menu-item -->


                    <li class="nk-menu-item mt-5">
                        <a href="{{ route('logout') }}" class="nk-menu-link" onclick="event.preventDefault();
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