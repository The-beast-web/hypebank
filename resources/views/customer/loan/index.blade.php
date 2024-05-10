@extends('customer.layout.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="nk-block-head">
                <div class="nk-block-between-md g-4">
                    <div class="nk-block-head-content">
                        <h2 class="nk-block-title fw-normal">Loan Details</h2>
                        <div class="nk-block-des">
                            <p>At a glance summary of your loans. Have fun!</p>
                        </div>
                    </div>
                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                        <div class="btn-group">
                            <a href="{{ route('customer.loan.request') }}" class="btn btn-primary"><span>Request Loan</span></a>
                        </div>
                    </div><!-- .nk-block-head -->
                </div>
            </div><!-- .nk-block-head -->
            @if ($loan->count() < 1)
                <div class="nk-block">
                    <div class="card p-5">
                        <h4 class="text-center">Oops!... No loans yet</h4>
                        <div class="text-center mt-3">
                            <a href="{{ route('customer.loan.request') }}" class="btn btn-primary">Apply for a loan</a>
                        </div>
                    </div>
                </div>
            @else
            @foreach($loan as $l)
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
                                                <span><em class="ni ni-sign-kobo"></em> {{ $l->amount }} </span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Monthly Payment</span>
                                                <span><em class="ni ni-sign-kobo"></em> {{ $l->monthly_payment }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">EMI Type</span>
                                                <span class="text-capitalize">{{ $l->emi_type }}</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Duration</span>
                                                <span>{{ $l->tenure }} year(s)</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Start Date</span>
                                                <span>20 Feb 2021</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-2  col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">End Date</span>
                                                <span>20 Feb 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                                <div class="nk-divider divider md"></div>
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                        <h5 class="title">EMI Details</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="row gy-5">
                                        <div class="col-md-2 col-sm-4 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Total EMI</span>
                                                <span class="amount text-primary">35</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-6">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Paid EMI</span>
                                                <span class="amount text-success">24</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-12">
                                            <div class="profile-stats">
                                                <span class="profile-ud-label">Remain EMI</span>
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
                                <div class="nk-divider divider md"></div>
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-sm nk-block-between">
                                        <h5 class="title"><code>Notice</code></h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="row gy-5">
                                        <div class="col-12">
                                            <dt>If you pay your EMI late, you may attract additional charges from your lender. If you make a payment towards your EMI which is after your due date but within your lender's grace period, there is usually an added 'late fee' that you will have to pay alongside your EMI amount.</dt>
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div><!-- .card-inner -->
                        </div><!-- .card-content -->
                    </div><!-- .card-aside-wrap -->
                </div><!-- .card -->
            </div><!-- .nk-block -->
            @endforeach  
            @endif
        </div>
    </div>
</div> 
@endsection
