@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Loan Request Information /
                                    {{ $user->name }}
                                </h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>Application ID: <span class="text-base">{{ $loan_request->id }}</span></li>
                                        <li>Submited At: <span class="text-base">{{ $loan_request->created_at }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.loan.request') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em>
                                    <span>Back</span>
                                </a>
                                <a href="{{ route('admin.loan.request') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
                                    <em class="icon ni ni-arrow-left"></em>
                                </a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row gy-5">
                            <div class="col-lg-5">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Loan Request Info</h5>
                                        <p>Submission date, approve date, status etc.</p>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered">
                                    <ul class="data-list is-compact">
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Submitted By</div>
                                                <div class="data-value">User {{ $user->id }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Loan Package</div>
                                                <div class="data-value text-capitalize">{{ $loan_request->loan_package }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Duration</div>
                                                <div class="data-value">{{ $loan_package->tenure }} year(s)</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">EMI Type</div>
                                                <div class="data-value text-capitalize">{{ $loan_package->emi_type }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Amount</div>
                                                <div class="data-value text-capitalize">{{ $loan_request->loan_amount }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Monthly Interest</div>
                                                <div class="data-value text-capitalize">
                                                    {{ $loan_package->monthly_interest }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Status</div>
                                                <div
                                                    class="data-value text-capitalize @if ($loan_request->status == 'approved') text-success
                                                    @else
                                                        text-danger @endif">
                                                    {{ $loan_request->status }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Loan Type</div>
                                                <div class="data-value text-capitalize">{{ $loan_request->loan_type }}
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-lg-7">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Applicant Information</h5>
                                        <p>Basic info, like name, phone, address, country etc.</p>
                                    </div>
                                </div>
                                <div class="card card-bordered">
                                    <ul class="data-list is-compact">
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Full Name</div>
                                                <div class="data-value">{{ $loan_request->full_name }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Email Address</div>
                                                <div class="data-value">{{ $loan_request->email }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Phone Number</div>
                                                <div class="data-value text-soft"><em>{{ $loan_request->phone }}</em>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Date of Birth</div>
                                                <div class="data-value">{{ $loan_request->dob }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Address</div>
                                                <div class="data-value">{{ $loan_request->location }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">City</div>
                                                <div class="data-value">{{ $loan_request->city }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Country</div>
                                                <div class="data-value">{{ $loan_request->country }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Occupation</div>
                                                <div class="data-value">{{ $loan_request->occupation }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Monthly Income</div>
                                                <div class="data-value">{{ $loan_request->monthly_income }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Bank Account Number</div>
                                                <div class="data-value">{{ $loan_request->account_no }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Bank Account Name</div>
                                                <div class="data-value">{{ $loan_request->account_name }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Bank</div>
                                                <div class="data-value">{{ $loan_request->bank }}</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
