@extends('customer.layout.master')

@section('content')


<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Paypal Deposit Details</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('deposit.paypal-method') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="{{ route('deposit.paypal-method') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-4 col-xl-4 col-xxl-3">
                            <div class="card">
                                <div class="card-inner-group">

                                    <div class="card-inner">
                                        <h6 class="overline-title mb-2">Bankpro Paypal Account Details</h6>
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Paypal ID</span>
                                                <span></span>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Paypal Username</span>
                                                <span> </span>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Paypal ID 2</span>
                                                <span></span>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Paypal Username 2</span>
                                                <span> </span>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Last Login:</span>
                                                <span>15 Feb, 2019 01:02 PM</span>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">KYC Status:</span>
                                                <span class="lead-text text-success">Approved</span>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Register At:</span>
                                                <span></span>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-8 col-xl-8 col-xxl-9">
                            <div class="card">
                                <div class="card-inner">

                                    <div class="nk-block">
                                        <div class="nk-content ">
                                            <div class="container-fluid">
                                                <div class="nk-content-inner">
                                                    <div class="nk-content-body">
                                                        <div class="nk-block-head nk-block-head-sm">
                                                            <div class="nk-block-between">
                                                                <div class="nk-block-head-content">
                                                                    <h3 class="nk-block-title page-title">Paypal Deposit Details</h3>
                                                                </div><!-- .nk-block-head-content -->
                                                            </div><!-- .nk-block-between -->
                                                        </div><!-- .nk-block-head -->
                                                        <div class="nk-block">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <form action="{{ route('deposit.paypal-deposit-process') }}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row gy-4">
                                                                            <div class="col-xxl-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label" for="first-name">Amount Deposited</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <input name="amount" type="number" class="form-control" id="first-name" placeholder="0.00">
                                                                                    </div>
                                                                                    @error('amount')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div><!--col-->
                                                                            <div class="col-xxl-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label" for="email">Paypal ID</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <input name="paypal_id" type="text" class="form-control" id="email" placeholder="example@paypal.com">
                                                                                    </div>
                                                                                    @error('paypal_id')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div><!--col-->
                                                                            <div class="col-xxl-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label" for="email">Paypal Username</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <input name="paypal_name" type="text" class="form-control" id="email" placeholder="Bankpro Corporation Limited">
                                                                                    </div>
                                                                                    @error('paypal_name')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div><!--col-->

                                                                            <div class="col-xxl-6 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Upload Payment Slip</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <div class="form-file">
                                                                                            <input name="proof" type="file" multiple class=" form-control" id="customFile">
                                                                                        </div>
                                                                                    </div>
                                                                                    @error('proof')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div><!--col-->
                                                                            <div class="col-12">

                                                                                <div class="form-group">
                                                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                                                </div>

                                                                            </div><!--col-->
                                                                        </div><!--row-->
                                                                    </form>
                                                                </div><!-- .card-inner-group -->
                                                            </div><!-- .card -->
                                                        </div><!-- .nk-block -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div><!-- .card-inner -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection