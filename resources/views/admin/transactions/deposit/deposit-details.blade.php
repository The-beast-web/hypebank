@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Deposit Information / {{ $deposit->user->name }}<strong
                                        class="text-primary small"></strong></h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>Application ID: <span class="text-base">{{ $deposit->id }}</span></li>
                                        <li>Submited At: <span class="text-base">{{ $deposit->created_at }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.deposits') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                <a href="{{ route('admin.deposits') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em
                                        class="icon ni ni-arrow-left"></em></a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row gy-5">
                            <div class="col-lg-5">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Deposit Info</h5>
                                        <p>Submission date, approve date, status etc.</p>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered">
                                    <ul class="data-list is-compact">
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Submitted By</div>
                                                <div class="data-value">User {{ $deposit->user->id }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Amount</div>
                                                <div class="data-value"><em
                                                        class="ni ni-sign-kobo"></em>{{ $deposit->amount }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Deposit Method</div>
                                                <div class="data-value">{{ $deposit->payment_method }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Status</div>
                                                <div
                                                    class="data-value text-capitalize @if ($deposit->status == 'pending') text-danger @endif @if ($deposit->status == 'approved') text-success @endif @if ($deposit->status == 'declined') text-danger @endif">
                                                    {{ $deposit->status }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Submitted At</div>
                                                <div class="data-value">{{ $deposit->created_at }}</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div><!-- .card -->
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title">Uploaded Proof</h5>
                                        <p>Here is user uploaded documents.</p>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered">
                                    <div class="card-body">
                                        <img @if (!is_null($bank?->proof)) src="{{ asset('uploads/' . $bank?->proof) }}" @endif
                                            @if (!is_null($paypal?->proof)) src="{{ asset('uploads/' . $paypal?->proof) }}" @endif
                                            @if (!is_null($bitcoin?->proof)) src="{{ asset('uploads/' . $bitcoin?->proof) }}" @endif
                                            alt="" class="card-img" height="600">
                                    </div>
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
                                                <div class="data-value">{{ $deposit->user->name }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Email Address</div>
                                                <div class="data-value">{{ $deposit->user->email }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Phone Number</div>
                                                <div class="data-value text-soft"><em>{{ $deposit->kyc?->phone }}</em>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Date of Birth</div>
                                                <div class="data-value">{{ $deposit->kyc?->dob }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Address Line 1</div>
                                                <div class="data-value">{{ $deposit->kyc?->address1 }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Address Line 2</div>
                                                <div class="data-value">{{ $deposit->kyc?->address2 }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">City</div>
                                                <div class="data-value"> {{ $deposit->kyc?->city }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">State</div>
                                                <div class="data-value"> {{ $deposit->kyc?->state }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Country of Residence</div>
                                                <div class="data-value"> {{ $deposit->kyc?->country }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                @if ($deposit->payment_method == 'Bank Transfer')
                                                    <div class="data-label">Account Number</div>
                                                    <div class="data-value">{{ $bank->account_number }}</div>
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
                                        @if ($deposit->payment_method == 'Paypal')
                                            <div class="data-label">Paypal ID</div>
                                            <div class="data-value">{{ $paypal->paypal_id }}</div>
                                </div>
                                </li>
                                <li class="data-item">
                                    <div class="data-col">
                                        <div class="data-label">Paypal Username</div>
                                        <div class="data-value text-break">{{ $paypal->paypal_name }}</div>
                                    </div>
                                </li>
                                @endif
                                @if ($deposit->payment_method == 'Bitcoin')
                                    <div class="data-label">Wallet Address</div>
                                    <div class="data-value">{{ $bitcoin->wallet_address }}</div>
                            </div>
                            </li>
                            <li class="data-item">
                                <div class="data-col">
                                    <div class="data-label">Wallet Name</div>
                                    <div class="data-value text-break">{{ $bitcoin->wallet_name }}</div>
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
