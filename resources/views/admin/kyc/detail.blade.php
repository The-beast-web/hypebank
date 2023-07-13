@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Kyc Information / {{ $user->name }}<strong
                                        class="text-primary small"></strong></h3>
                                <div class="nk-block-des text-soft">
                                    <ul class="list-inline">
                                        <li>Application ID: <span class="text-base">{{ $user->kyc->id }}</span></li>
                                        <li>Submited At: <span class="text-base">{{ $user->kyc->created_at }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('admin.kyc.list') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em>
                                    <span>Back</span>
                                </a>
                                <a href="{{ route('admin.deposits') }}"
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
                                        <h5 class="nk-block-title title">Deposit Info</h5>
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
                                                <div class="data-label">ID Type</div>
                                                <div class="data-value text-capitalize">{{ $user->kyc->id_type }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Status</div>
                                                <div
                                                    class="data-value text-capitalize @if ($user->kyc->status == 'pending') text-danger @endif @if ($user->kyc->status == 'approved') text-success @endif @if ($user->kyc->status == 'declined') text-danger @endif">
                                                    {{ $user->kyc->status }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Submitted At</div>
                                                <div class="data-value">{{ $user->kyc->created_at }}</div>
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
                                        <img src="{{ asset('uploads/' . $user->kyc->id_front) }}" alt=""
                                            class="card-img" height="300">
                                            <img src="{{ asset('uploads/' . $user->kyc->id_back) }}" alt=""
                                            class="card-img mt-2" height="300">
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
                                                <div class="data-label">First Name</div>
                                                <div class="data-value">{{ $user->kyc->first_name }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Last Name</div>
                                                <div class="data-value">{{ $user->kyc->last_name }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Email Address</div>
                                                <div class="data-value">{{ $user->kyc->email }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Phone Number</div>
                                                <div class="data-value text-soft"><em>{{ $user->kyc->phone }}</em>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Date of Birth</div>
                                                <div class="data-value">{{ $user->kyc->dob }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Address Line 1</div>
                                                <div class="data-value">{{ $user->kyc->address1 }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Address Line 2</div>
                                                <div class="data-value">{{ $user->kyc?->address2 }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">City</div>
                                                <div class="data-value"> {{ $user->kyc->city }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">State</div>
                                                <div class="data-value"> {{ $user->kyc->state }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col">
                                                <div class="data-label">Nationality</div>
                                                <div class="data-value"> {{ $user->kyc?->nationality }}</div>
                                            </div>
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
