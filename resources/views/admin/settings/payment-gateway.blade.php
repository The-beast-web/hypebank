@extends('admin.layout.master')

@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="card card-bordered">
                                        <div class="card-aside-wrap">
                                            <div class="card-inner card-inner-lg">
                                                <div class="nk-block-head nk-block-head-lg">
                                                    <div class="nk-block-between">
                                                        <div class="nk-block-head-content">
                                                            <h5 class="title fw-medium">Payment Gateway settings</h5>
                                                            <span>These settings helps you modify payment gateway settings.</span>
                                                        </div><!-- .nk-block-head-content -->
                                                        <div class="nk-block-head-content align-self-start d-lg-none">
                                                            <a href="#" class="toggle btn btn-icon btn-trigger mt-n1" data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                                        </div>
                                                    </div><!-- .nk-block-between -->
                                                </div><!-- .nk-block-head -->
                                                <div class="nk-block">
                                                    <form action="{{ route('admin.payment') }}" class="form-settings" method="POST">
                                                        @csrf
                                                        <div class="row gy-4">
                                                            <h6>Paystack </h6>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="paystack_public_key" value="{{ setting('paystack_public_key') }}" type="text" class="form-control" id="first-name" placeholder="Paystack Public Key">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="paystack_secret_key" value="" type="text" class="form-control" id="first-name" placeholder="Public Secret Key">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                        </div>
                                                        <div class="row gy-4 mt-3">
                                                            <h6>Stripe <em class="ni ni-stripe"></em></h6>
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="stripe_key" value="" type="text" class="form-control" id="first-name" placeholder="Stripe Key">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-6 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="stripe_secret" value="" type="text" class="form-control" id="first-name" placeholder="Stripe Secret">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                        </div>
                                                        <div class="row gy-4 mt-3">
                                                            <h6>Flutterwave</h6>
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="flutterwave_public_key" value="" type="text" class="form-control" id="first-name" placeholder="Flutterwave Public Key">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="flutterwave_secret_key" value="" type="text" class="form-control" id="first-name" placeholder="Flutterwave Secret Key">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="flutterwave_secret_hash" value="" type="text" class="form-control" id="first-name" placeholder="Flutterwave Secret Hash">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                        </div>
                                                        <div class="row gy-4 mt-3">
                                                            <h6>Paypal <em class="ni ni-paypal-alt"></em></h6>
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="paypal_client_id" value="" type="text" class="form-control" id="first-name" placeholder="Paypal Client ID">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="paypal_secret" value="" type="text" class="form-control" id="first-name" placeholder="Paypal Secret">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-xxl-4 col-md-6">
                                                                <div class="form-group">
                                                                    <div class="form-control-wrap">
                                                                        <input name="paypal_app_id" value="" type="text" class="form-control" id="first-name" placeholder="Paypal App ID">
                                                                    </div>
                                                                </div>
                                                            </div><!--col-->
                                                            <div class="col-12">
                                                                <button type="submit" class="btn btn-primary">Config</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div><!-- .nk-block-head -->
                                            </div><!-- .card-inner -->
                                            <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                                <div class="card-inner-group" data-simplebar>
                                                    <div class="card-inner">
                                                        <h3 class="nk-block-title page-title">Settings</h3>
                                                        <div class="nk-block-des text-soft">
                                                            <p>Here you can change and edit your needs</p>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner p-0">
                                                        <ul class="link-list-menu">
                                                            <li><a  href="{{ route('admin.setting') }}"><em class="icon ni ni-user-fill-c"></em><span>General</span></a></li>
                                                            <li><a class="active" href="{{ route('admin.setting.payment-gateway') }}"><em class="icon ni ni-cards"></em><span>Payment Gateway</span></a></li>
                                                            <li><a href="html/hospital/settings-email.html"><em class="icon ni ni-lock-alt-fill"></em><span>E-mail</span></a></li>
                                                            <li><a href="html/hospital/settings-security.html"><em class="icon ni ni-shield-star-fill"></em><span>Security</span></a></li>
                                                            <li><a href="html/hospital/settings-account-log.html"><em class="icon ni ni-activity-round-fill"></em><span>Account activity</span></a></li>
                                                        </ul>
                                                    </div><!-- .card-inner -->
                                                </div><!-- .card-inner-group -->
                                            </div><!-- card-aside -->
                                        </div><!-- card-aside-wrap -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

@endsection