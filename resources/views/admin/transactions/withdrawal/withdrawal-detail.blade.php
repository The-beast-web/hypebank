@extends('admin.layout.master')

@section('content')

<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Withdrawal Information / {{ $withdrawal?->user->name }}<strong class="text-primary small"></strong></h3>
                                            <div class="nk-block-des text-soft">
                                                <ul class="list-inline">
                                                    <li>Application ID: <span class="text-base">{{ $withdrawal?->id }}</span></li>
                                                    <li>Submited At: <span class="text-base">{{ $withdrawal?->created_at }}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="{{ route('admin.withdraw.list')}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="{{ route('admin.withdraw.list') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row gy-5">
                                        <div class="col-lg-5">
                                            <div class="nk-block-head">
                                                <div class="nk-block-head-content">
                                                    <h5 class="nk-block-title title">Withddrawal Info</h5>
                                                    <p>Submission date, approve date, status etc.</p>
                                                </div>
                                            </div><!-- .nk-block-head -->
                                            <div class="card card-bordered">
                                                <ul class="data-list is-compact">
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Submitted By</div>
                                                            <div class="data-value">User {{ $withdrawal?->user->id }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Amount</div>
                                                            <div class="data-value"><em class="ni ni-sign-kobo"></em>{{ $withdrawal?->amount }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Withdrawal Method</div>
                                                            <div class="data-value text-capitalize">{{ $withdrawal?->withdrawal_method }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Status</div>
                                                            <div class="data-value text-capitalize @if($withdrawal->status == 'pending') text-danger @endif @if($withdrawal->status == 'approved') text-success @endif @if($withdrawal->status == 'declined') text-danger @endif">
                                                                {{ $withdrawal->status }}
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Submitted At</div>
                                                            <div class="data-value">{{ $withdrawal->created_at }}</div>
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
                                                            <div class="data-value">{{ $withdrawal->user->name }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Email Address</div>
                                                            <div class="data-value">{{ $withdrawal->user->email }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Phone Number</div>
                                                            <div class="data-value text-soft"><em>{{ $withdrawal->kyc?->phone}}</em></div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Date of Birth</div>
                                                            <div class="data-value">{{ $withdrawal->kyc?->dob }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Address Line 1</div>
                                                            <div class="data-value">{{ $withdrawal->kyc?->address1}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Address Line 2</div>
                                                            <div class="data-value">{{ $withdrawal->kyc?->address2}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">City</div>
                                                            <div class="data-value"> {{ $withdrawal->kyc?->city}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">State</div>
                                                            <div class="data-value"> {{ $withdrawal->kyc?->state}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Nationality</div>
                                                            <div class="data-value"> {{ $withdrawal->kyc?->nationality}}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            @if($withdrawal->withdrawal_method == 'bank transfer')
                                                            <div class="data-label">Account Number</div>
                                                            <div class="data-value">{{ $bank->account_no }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Account Name</div>
                                                            <div class="data-value text-break">{{ $bank->account_name }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Bank</div>
                                                            <div class="data-value text-break">{{ $bank->bank }}</div>
                                                        </div>
                                                    </li>
                                                    @endif
                                                    @if($withdrawal->withdrawal_method == 'paypal')
                                                            <div class="data-label">Paypal ID</div>
                                                            <div class="data-value">{{ $paypal->paypal_id }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="data-item">
                                                        <div class="data-col">
                                                            <div class="data-label">Paypal Username</div>
                                                            <div class="data-value text-break">{{ $paypal->paypal_username }}</div>
                                                        </div>
                                                    </li>
                                                    @endif
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