@extends('customer.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Dashboard</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Your Account Dashboard at a glance</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <a href="{{ route('customer.deposit') }}"
                                                    class=" btn btn-white btn-dim btn-outline-light"><span
                                                        class="d-none d-md-inline">Deposit</span> <em
                                                        class="d-none d-sm-inline icon ni ni-arrow-long-left"></em></a>
                                            </li>
                                            <li class="nk-block-tools-opt"><a
                                                    href="{{ route('customer.withdraw.methods') }}"
                                                    class="btn btn-primary"><span>Withdraw</span><em
                                                        class="icon ni ni-wallet-out"></em></a></li>
                                            <li class="nk-block-tools-opt"><a href="{{ route('customer.transfer') }}"
                                                    class="btn btn-white btn-dim btn-outline-light"><span>Send</span><em
                                                        class="icon ni ni-arrow-long-right"></em></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-xxl-12 col-sm-12 col-md-12">
                                <div class="card is-dark h-100 text-center p-4">
                                    <div class="nk-ecwg nk-ecwg1">
                                        <div class="card-inner">
                                            <div class="data">
                                                <div class="card-title">
                                                    <h2 class="title text-center">Account Balance</h2>
                                                    <div class="amount"><em
                                                            class="ni ni-sign-kobo"></em>{{ number_format(Auth::user()->balance) }}.00
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="data">
                                            </div>
                                            <div class="row g-4">
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="data">
                                                        <h6 class="title text-white">
                                                            Deposits
                                                        </h6>
                                                        <h5 class="amount text-warning">{{ $deposit->count() }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="data">
                                                        <h6 class="title text-white">
                                                            Transfers
                                                        </h6>
                                                        <h5 class="amount text-light">{{ $transfer->count() }}</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="data">
                                                        <h6 class="title text-white">
                                                            Withdrawals
                                                        </h6>
                                                        <h5 class="amount text-success">{{ $withdraw->count() }}</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 mt-4">
                                                <div class="col-md-6">
                                                    <div class="data">
                                                        <h4 class="text-white-50">Account Name : <span class="text-white">{{ Auth::user()->name }}</span></h4>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="data">
                                                        <h4 class="text-white-50">Account Number : <span class="text-white">{{ Auth::user()->account_no }}</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
