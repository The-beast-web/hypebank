@extends('admin.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Loan Details / {{ $active_loan->user->name }}</h2>
                    </div>
                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                        <div class="btn-group">
                            <a href="{{ route('admin.loan.active') }}" class="btn btn-primary"><em class="icon ni ni-arrow-left"></em> <span>Back</span></a>
                        </div>
                    </div><!-- .nk-block-head -->
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="card card-bordered">
                    <div class="card-aside-wrap">
                        <div class="card-content">
                            <div class="card-inner">
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                        <h5 class="title">Loan Details</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="row gy-5">
                                        <div class="col-md-3 col-lg-2 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Loan Amount</span>
                                                <span><em class="ni ni-sign-kobo"></em> {{ $active_loan->amount }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Monthly Payment</span>
                                                <span><em class="ni ni-sign-kobo"></em> {{ $active_loan->monthly_payment }} </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Monthly Interest</span>
                                                <span> {{ $active_loan->monthly_interest }}%</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">EMI Type</span>
                                                <span class="text-capitalize">{{ $active_loan->emi_type }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Duration</span>
                                                <span>{{ $active_loan->tenure }} years</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Start Date</span>
                                                <span>{{ $active_loan->created_at->diffForHumans(); }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">End Date</span>
                                                <span>{{ $date->diffForHumans() }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                                <div class="nk-divider divider md"></div>
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                        <h5 class="title">Payment Details</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="row gy-5">
                                        <div class="col-md-2 col-sm-4 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Amount Paid</span>
                                                <span class="amount text-primary">35</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-12">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Amount Remaining</span>
                                                <span class="amount text-warning">9</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Last EMI Date</span>
                                                <span>22 August 2021</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-4 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Next EMI Date</span>
                                                <span>29 August 2021</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                                <div class="nk-divider divider md"></div>
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                        <h5 class="title">Loan Status</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="row gy-5">
                                        <div class="col-12 col-md-10 col-lg-8">
                                            <div class="profile-stats">
                                                <div class="progress progress-lg">
                                                    <div class="progress-bar progress-bar-striped bg-success" data-progress="75">75%</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-content -->
                    </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>
    </div>
</div> 
@endsection