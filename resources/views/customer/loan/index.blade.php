@extends('customer.layout.master')

@section('content')
    <!-- content @s
        -->
        <div class="nk-content nk-content-fluid">
            <div class="container-xl wide-lg">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Loan Packages</h3>
                                <div class="nk-block-des text-soft">
                                    <p>{{ $loan_package->count() }} packages available.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li><a href="#" class="btn btn-white btn-outline-light"><em
                                                        class="icon ni ni-coin"></em><span>Active Loans</span></a></li>

                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            @foreach ($loan_package as $loan)
                                                    <div class="col-md-6 col-xxl-4">
                                <div class="card card-bordered pricing">
                                    <div class="pricing-head">
                                        <div class="pricing-title">
                                            <h4 class="card-title title text-capitalize">{{ $loan->name }}</h4>
                                            <p class="sub-text">Enjoy entry level of loan.</p>
                                        </div>
                                        <div class="card-text">
                                            <div class="row">
                                                <div class="col-6">
                                                    <span class="h4 fw-500">{{ $loan->monthly_interest }}%</span>
                                                    <span class="sub-text">Monthly Interest</span>
                                                </div>
                                                <div class="col-6">
                                                    <span class="h4 fw-500">{{ $loan->amount }} NGN</span>
                                                    <span class="sub-text">Amount</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-body">
                                        <ul class="pricing-features">
                                            <li><span class="w-50">Min Amount</span> - <span class="ms-auto">{{ $loan->min_amount }} USD</span>
                                            </li>
                                            <li><span class="w-50">EMI Type</span> - <span class="ms-auto"> {{ $loan->emi_type }}</span>
                                            </li>
                                            <li><span class="w-50">Loan Tenure</span> - <span class="ms-auto">Max {{ $loan->tenure }} year(s)</span></li>
                                            <li><span class="w-50">Interest Rates</span> - <span
                                                    class="ms-auto">{{ $loan->interest_rates }}</span></li>
                                        </ul>
                                        <ul class="pricing-action">
                                            <li>
                                                <a href="{{ route('loan.readmore', [$loan->id, $loan->name]) }}" class="btn btn-outline-primary">Read
                                                    More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .col --> 
                            @endforeach
                        </div> .
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
        <!-- content @e -->
    @endsection
