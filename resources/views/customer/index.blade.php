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
                                                <a href="{{ route('deposit') }}"
                                                    class=" btn btn-white btn-dim btn-outline-light"><span
                                                        class="d-none d-md-inline">Deposit</span> <em
                                                        class="d-none d-sm-inline icon ni ni-arrow-long-left"></em></a>
                                            </li>
                                            <li class="nk-block-tools-opt"><a href="{{ route('withdraw.methods') }}"
                                                    class="btn btn-primary"><span>Withdraw</span><em
                                                        class="icon ni ni-wallet-out"></em></a></li>
                                            <li class="nk-block-tools-opt"><a href="{{ route('transfer') }}"
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
                            <div class="col-xxl-3 col-sm-6 col-md-3 ">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Available Balance</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount fs-5">$ {{ Auth::user()?->balance }}</div>
                                                    <!-- <div class="nk-ecwg6-ck">
                                                                <canvas class="ecommerce-line-chart-s3" id="todayOrders"></canvas>
                                                            </div> -->
                                                </div>
                                                <div class="info"><span class="change up text-danger"><em
                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs.
                                                        last week</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6  col-md-3">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Today Revenue</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount  fs-5">$2,338</div>
                                                    <!--  <div class="nk-ecwg6-ck">
                                                                <canvas class="ecommerce-line-chart-s3" id="todayRevenue"></canvas>
                                                            </div> -->
                                                </div>
                                                <div class="info"><span class="change down text-danger"><em
                                                            class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs.
                                                        last week</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6  col-md-3">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Today Customers</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount fs-5">847</div>
                                                    <!--             <div class="nk-ecwg6-ck">
                                                                <canvas class="ecommerce-line-chart-s3" id="todayCustomers"></canvas>
                                                            </div> -->
                                                </div>
                                                <div class="info"><span class="change up text-danger"><em
                                                            class="icon ni ni-arrow-long-up"></em>4.63%</span><span> vs.
                                                        last week</span></div>
                                            </div>
                                        </div><!-- .card-inner -->
                                    </div><!-- .nk-ecwg -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-3 col-sm-6">
                                <div class="card">
                                    <div class="nk-ecwg nk-ecwg6">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Today Visitors</h6>
                                                </div>
                                            </div>
                                            <div class="data">
                                                <div class="data-group">
                                                    <div class="amount fs-5">23,485</div>
                                                    <!--                  <div class="nk-ecwg6-ck">
                                                                <canvas class="ecommerce-line-chart-s3" id="todayVisitors"></canvas>
                                                            </div> -->
                                                </div>
                                                <div class="info"><span class="change down text-danger"><em
                                                            class="icon ni ni-arrow-long-down"></em>2.34%</span><span> vs.
                                                        last week</span></div>
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
