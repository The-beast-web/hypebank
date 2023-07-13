@extends('auth.master')

@section('content2')
<div class="nk-content nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-body">
                            <div class="kyc-app wide-sm m-auto">
                                <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                                    <div class="nk-block-head-content text-center">
                                        <h2 class="nk-block-title fw-normal">KYC Verification</h2>
                                        <div class="nk-block-des">
                                            <p>To comply with regulation each participant will have to go through indentity verification (KYC/AML) to prevent fraud causes. </p>
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
                                                    <p class="lead">You have not submitted your necessary documents to verify your identity. In order to purchase our tokens, please verify your identity.</p>
                                                </div>
                                                <div class="nk-kyc-app-action mt-4">
                                                    <a href="{{ route('kyc.app') }}" class="btn btn-lg btn-primary">Click here to complete your KYC</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center pt-4">
                                        <p>If you have any question, please contact our support team <a href="mailto:info@softnio.com">info@softnio.com</a></p>
                                    </div>
                                </div><!-- nk-block -->
                            </div><!-- kyc-app -->
                        </div>
                    </div>
                </div>
<!-- <div class="d-flex justify-content-center" style="margin-bottom: 9%;">
    <div class="col-lg-6">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="title nk-block-title">Account Setup</h4>
                    <div class="nk-block-des">
                        <p>Please setup your account to continue</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Account Details</h5>
                    </div>
                    <form action="{{ route('acc-setup') }}" method="POST">
                        @csrf
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Account Type</label>
                                    <div class="form-control-wrap">
                                        <select name="account_type" class="form-select js-select2">
                                            <option value="saving">Savings Account</option>
                                            <option value="current">Current Account</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="email-address-1">Address</label>
                                    <div class="form-control-wrap">
                                        <input name="address" type="text" class="form-control" id="email-address-1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone-no-1">Phone No</label>
                                    <div class="form-control-wrap">
                                        <input name="phone" type="number" class="form-control" id="phone-no-1">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label" for="pay-amount-1">NIN No.</label>
                                    <div class="form-control-wrap">
                                        <input name="id_no" type="text" class="form-control" id="pay-amount-1">
                                    </div>
                                </div>
                            </div>

                    
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-lg btn-primary">Setup Account</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection