@extends('customer.layout.master')

@section('content')
<div class="nk-content ">
                    <div class="container">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between g-3">
                                        <div class="nk-block-head-content">
                                            <h2 class="nk-block-title page-title">Bank Deposit</h2>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <a href="{{ route('customer.deposit') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="{{ route('customer.deposit') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                                    </div>
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="row g-gs justify-content-center">
                                        <div class="col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="card card-bordered">
                                                <div class="card-inner-group">
                                      
                                                    <div class="card-inner">
                                                        <h6 class="overline-title mb-2">Account Details</h6>
                                                        <div class="row g-3">
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">Account Number</span>
                                                                <span>7778896016</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">Account Name</span>
                                                                <span>Bankpro Corporation Inc.</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">Bank</span>
                                                                <span>First City Monument Bank</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">Bank Address</span>
                                                                <span>No.14 Bank Road Umuahia, Abia State. Nigeria</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">Preferred Transfer Type for Quick Approval</span>
                                                                <span>Online banking (Bank App)</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">Payments Approval</span>
                                                                <span class="lead-text text-success">2 hours - 1 week</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">Customer Care</span>
                                                                <span>support@bankpro.com</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <span class="sub-text">I have transfered to the account provided above? Click on the continue button below.</span>
                                                            </div>
                                                            <div class="col-sm-6 col-md-4 col-lg-12">
                                                                <a href="{{ route('customer.deposit.bank-deposit') }}" class="btn btn-primary">Continue</a>
                                                            </div>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                </div>
                                            </div>
                                        </div><!-- .col -->
                                   
                                    </div><!-- .row -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>


@endsection