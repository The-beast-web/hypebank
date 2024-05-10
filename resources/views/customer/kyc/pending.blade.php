@extends('auth.master')

@section('content')
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-body">
            <div class="kyc-app wide-sm m-auto">
                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                    <div class="nk-block-head-content text-center">
                        <h2 class="nk-block-title fw-normal">KYC Verification</h2>
                        <div class="nk-block-des">
                            <p>To comply with regulation each participant will have to go through indentity verification
                                (KYC/AML) to prevent fraud cases. </p>
                        </div>
                    </div>
                </div><!-- nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner card-inner-lg">
                            <div class="nk-kyc-app p-sm-2 text-center">
                                <div class="nk-kyc-app-icon p-2">
                                    <em class="icon ni ni-files"></em>
                                </div>
                                <div class="nk-kyc-app-text mx-auto">
                                    <p class="lead">You have submitted your KYC details and it is awaiting
                                        approval. KYC approval usually takes between a few minutes to 24 hours,
                                        or few days in rare cases.
                                    </p>
                                </div>
                                <div class="nk-kyc-app-action mt-4">
                                    <a href="{{ route('customer.dashboard')}}" class="btn btn-lg btn-primary">Back to
                                    Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pt-4">
                        <p>If you have any question, please contact our support team <a
                                href="mailto:info@softnio.com">info@softnio.com</a></p>
                    </div>
                </div><!-- nk-block -->
            </div><!-- kyc-app -->
        </div>
    </div>
</div>
@endsection