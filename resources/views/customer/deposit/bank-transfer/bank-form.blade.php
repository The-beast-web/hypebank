@extends('customer.layout.master')

@section('content')
<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Bank Deposit Details</h3>
                        </div>
                        <div class="nk-block-head-content">
                            <a href="{{ route('customer.deposit.bank-method') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                            <a href="{{ route('customer.deposit.bank-method') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-4 col-xl-4 col-xxl-3">
                            <div class="card">
                                <div class="card-inner-group">

                                    <div class="card-inner">
                                        <h6 class="overline-title mb-2">Bankpro Account Details</h6>
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Account Number</span>
                                                <span></span>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Account Name</span>
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
                                                                    <h3 class="nk-block-title page-title">Bank Deposit Details</h3>
                                                                </div><!-- .nk-block-head-content -->
                                                            </div><!-- .nk-block-between -->
                                                        </div><!-- .nk-block-head -->
                                                        <div class="nk-block">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <form action="{{ route('customer.deposit.bank-deposit-process') }}" method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row gy-4">
                                                                            <div class="col-xxl-4 col-md-6">
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
                                                                            <div class="col-xxl-4 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label" for="email">Account Number</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <input name="account_number" type="number" class="form-control" id="email" placeholder="1234567890">
                                                                                    </div>
                                                                                    @error('account_number')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div><!--col-->
                                                                            <div class="col-xxl-4 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label" for="email">Account Name</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <input name="account_name" type="text" class="form-control" id="email" placeholder="Bankpro Corporation Limited">
                                                                                    </div>
                                                                                    @error('account_name')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div><!--col-->

                                                                            <div class="col-xxl-4 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Account Type</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <select name="account_type" class="form-select js-select2" data-placeholder="Select Account Type">
                                                                                            <option value="">Select</option>
                                                                                            <option value="savings">Savings Account</option>
                                                                                            <option value="current">Current Account</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('account_type')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div><!--col-->
                                                                            <div class="col-xxl-4 col-md-6">
                                                                                <div class="form-group">
                                                                                    <label class="form-label">Bank</label>
                                                                                    <div class="form-control-wrap">
                                                                                        <select class="form-select js-select2" name="bank" data-search="on" tabindex="-1" data-placeholder="Select Your Bank">
                                                                                            <option value="">Default Option</option>
                                                                                            @foreach($bank as $banks)
                                                                                            <option value="{{ $banks->name }}">{{ $banks->name }}</option>
                                                                                            @endforeach
                                                                                        </select>
                                                                                    </div>
                                                                                    @error('bank')
                                                                                    <em class="text-danger">{{ $message }}</em>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xxl-4 col-md-6">
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