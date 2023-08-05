@extends('customer.layout.master')

@section('content')
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Loan Application</h3>
                            <div class="nk-block-des text-soft">
                                <p class="text-soft">Please complete the application neatly & included all information,
                                    documentation, identification required</p>
                            </div>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered card-stretch">
                        <div class="card-inner">
                            <form action="{{ route('customer.loan.process', $loan->id) }}" method="post">
                                @csrf
                                <div class="row g-gs">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Full Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="e.g.Abu Bin Ishtiyak" name="full_name"
                                                    value="{{ old('name', $user->name) }}">
                                            </div>
                                            @error('full_name')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="birth-date">Date of Birth</label>
                                            <div class="form-control-wrap">
                                                <div class="form-icon form-icon-left">
                                                    <em class="icon ni ni-calendar"></em>
                                                </div>
                                                <input type="text" id="birth-date" class="form-control date-picker"
                                                    placeholder="mm/dd/yyyy" data-date-format="mm/dd/yyyy" name="dob"
                                                    value="{{ old('dob', $user->kyc->dob) }}">
                                            </div>
                                            @error('dob')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="area">Area / Location</label>
                                            <div class="form-control-wrap">
                                                <input type="text" class="form-control" id="area"
                                                    placeholder="e.g.H-165, Mohakhali DOHS" name="location"
                                                    value="{{ old('location', $user->kyc->address1) }}">
                                            </div>
                                            @error('location')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="city">City</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="city" class="form-control" id="city"
                                                    placeholder="e.g. Dhaka" value="{{ old('city', $user->kyc->city) }}">
                                            </div>
                                            @error('city')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Country</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" name="country">
                                                    <option value="nigeria">Nigeria</option>
                                                    <option value="ghana">Ghana</option>
                                                    <option value="cameroun">Cameroun</option>
                                                    <option value="ivory coast">Ivory Coast</option>
                                                </select>
                                            </div>
                                            @error('country')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone">Phone Number</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="phone" class="form-control" id="phone"
                                                    placeholder="e.g. +8801700000000"
                                                    value="{{ old('phone', $user->kyc->phone) }}">
                                            </div>
                                            @error('phone')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email</label>
                                            <div class="form-control-wrap">
                                                <input type="email" name="email" class="form-control" id="email"
                                                    placeholder="e.g. admin@gmail.com"
                                                    value="{{ old('email', $user->email) }}">
                                            </div>
                                            @error('email')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="profession">Profession/Occupation</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="occupation" class="form-control"
                                                    id="profession" placeholder="e.g. Business">
                                            </div>
                                            @error('occupation')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">What Type of Loan do you need?</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" name="loan_type">
                                                    <option value="appartment">Appartment Purchase loan</option>
                                                    <option value="home">Home purchase loan</option>
                                                    <option value="shop">Commercial/Shop space loan</option>
                                                    <option value="construction">Construction loan</option>
                                                    <option value="equity">Home equity loan</option>
                                                    <option value="land">Land purpose with structure</option>
                                                    <option value="registration">Registration purpose loan</option>
                                                    <option value="transfer">Loan transfer from other bank</option>
                                                </select>
                                            </div>
                                            @error('loan_type')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Monthly income from other sources (if any)</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" name="monthly_income">
                                                    <option value="<10000">Less than N100,000</option>
                                                    <option value="100000 - 500000"> N100,000 - N500000</option>
                                                    <option value="500000 - 1000000">N500,000 - N1,000,000</option>
                                                    <option value="1000000 - 10000000">N1,000,000 - N10,000,000</option>
                                                    <option value=">10000000">Greater than N10,000,000</option>
                                                    <option value="na">I don't have other sources of income</option>
                                                </select>
                                            </div>
                                            @error('monthly_income')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="amount">Requested Loan Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="number" name="loan_amount" class="form-control"
                                                    id="amount" placeholder="e.g. 50,000">
                                            </div>
                                            @error('loan_amount')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        @if (session()->has('error'))
                                            <em class="text-danger">{{ session()->get('error') }}</em>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="amount">Account Number</label>
                                            <div class="form-control-wrap">
                                                <input type="number" name="account_no" value="{{ old('account_no', $user->account_no) }}" class="form-control"
                                                    id="amount" placeholder="e.g. 50,000">
                                            </div>
                                            @error('account_no')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="amount">Account Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="account_name" value="{{ old('account_name', $user->name) }}" class="form-control"
                                                    id="amount" placeholder="e.g. 50,000">
                                            </div>
                                            @error('account_name')
                                            <em class="text-danger">{{ $message }}</em>
                                        @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Bank</label>
                                            <div class="form-control-wrap">
                                                <select class="form-select js-select2" name="bank" data-search="on" tabindex="-1" data-placeholder="Select Your Bank">
                                                    <option value="Hype Bank">Hype Bank</option>
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
                                    <div class="col-12">
                                        <div class="custom-control custom-control-sm custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="note">
                                            <label class="custom-control-label" for="note">
                                                <p>I do hereby admit that all the above information that I have input is
                                                    true & correct. If any of the above information figured out false or
                                                    incorrect, I understand & agree that my loan application will be
                                                    rejected. I agree to share my information follow the company policy as
                                                    .</p>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-primary" id="bt_submit"
                                                    data-dismiss="modal">
                                                    Submit
                                                </button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
