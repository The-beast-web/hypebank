@extends('customer.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between g-3">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Transaction Details</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <a href="{{ route('customer.transaction') }}"
                                    class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em
                                        class="icon ni ni-arrow-left"></em>
                                    <span>Back</span>
                                </a>
                                <a href="{{ route('customer.transaction') }}"
                                    class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none">
                                    <em class="icon ni ni-arrow-left"></em>
                                </a>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row gy-5">
                            <div class="col-lg-6">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h5 class="nk-block-title title" style="font-family: Georgia;">
                                            {{ $trans->transaction_type }} Reciept</h5>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="card card-bordered">
                                    <ul class="data-list is-compact">
                                        <li class="data-item">
                                            <div class="data-col justify-content-between">
                                                <div class="data-label">Transaction Type</div>
                                                <div class="data-value">{{ $trans->transaction_type }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col justify-content-between">
                                                <div class="data-label">Amount</div>
                                                <div class="data-value text-capitalize"><em
                                                        class="ni ni-sign-kobo"></em>{{ $trans->amount }}</div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col justify-content-between">
                                                <div class="data-label">Status</div>
                                                <div
                                                    class="data-value text-capitalize @if ($trans->status == 'approved' || $trans->status == 'successful') text-success
                                                    @else
                                                        text-danger @endif">
                                                    {{ $trans->status }}
                                                </div>
                                            </div>
                                        </li>
                                        <li class="data-item">
                                            <div class="data-col justify-content-between">
                                                <div class="data-label">Date</div>
                                                <div class="data-value">{{ $trans->created_at->toFormattedDateString() }}
                                                </div>
                                            </div>
                                        </li>
                                        @if ($trans->transaction_type == 'Transfer')
                                            <li class="data-item">
                                                <div class="data-col justify-content-between">
                                                    <div class="data-label">Recipient's Account Number</div>
                                                    <div class="data-value">{{ $trans->transfer_recipient_account_no }}
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col justify-content-between">
                                                    <div class="data-label">Recipient's Account Name</div>
                                                    <div class="data-value">{{ $trans->transfer_recipient_name }}</div>
                                                </div>
                                            </li>
                                            <li class="data-item">
                                                <div class="data-col justify-content-between">
                                                    <div class="data-label">Recipient's Bank</div>
                                                    <div class="data-value">{{ $trans->transfer_recipient_bank }}</div>
                                                </div>
                                            </li>
                                        @endif
                                    </ul>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
