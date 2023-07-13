@extends('admin.layout.master')

@section('content')

<div class="nk-content ">
    <div class="container">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between g-3">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Customer Details</h3>
                            <div class="nk-block-des text-soft">
                                <p>An example page for customer details</p>
                            </div>
                        </div>
                        <div class="nk-block-head-content">
                                            <a href="{{ route('admin.users.index') }}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                                            <a href="{{ route('admin.users.index') }}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="row g-gs">
                        <div class="col-lg-4 col-xl-4 col-xxl-3">
                            <div class="card">
                                <div class="card-inner-group">
                                    <div class="card-inner">
                                        <div class="user-card user-card-s2">
                                            <div class="user-avatar lg bg-primary">
                                                <img src="{{ asset('uploads/'.$user->user_profile) }}" alt="">
                                            </div>
                                            <div class="user-info">
                                                <div class="badge bg-light rounded-pill ucap">{{ $user->user_type }}</div>
                                                <h5 class="text-capitalize">{{ $user->name }}</h5>
                                                <span class="sub-text">{{ $user->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner card-inner-sm">
                                        <ul class="btn-toolbar justify-center gx-1">
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-shield-off"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-mail"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon"><em class="icon ni ni-bookmark"></em></a></li>
                                            <li><a href="#" class="btn btn-trigger btn-icon text-danger"><em class="icon ni ni-na"></em></a></li>
                                        </ul>
                                    </div>
                                    <div class="card-inner">
                                        <div class="row text-center">
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">23</span>
                                                    <span class="sub-text">Deposits</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">20</span>
                                                    <span class="sub-text">Transfers</span>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="profile-stats">
                                                    <span class="amount">3</span>
                                                    <span class="sub-text">Withdraws</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <h6 class="overline-title mb-2">Short Details</h6>
                                        <div class="row g-3">
                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">User ID:</span>
                                                <span>{{ $user->id }}</span>
                                            </div>

                                            <div class="col-sm-6 col-md-6 col-lg-12">
                                                <span class="sub-text">Address:</span>
                                                <span>{{ $kyc?->address1 }}, {{ $kyc?->city}} <br /> {{ $kyc?->state }}. {{ $kyc?->country }}</span>
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
                                                <span>{{ $user->created_at }}</span>
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
                                        <div class="overline-title-alt mb-2 mt-2">In Account</div>
                                        <div class="profile-balance">
                                            <div class="profile-balance-group gx-4">
                                                <div class="profile-balance-sub">
                                                    <div class="profile-balance-amount">
                                                        <div class="number">@if($user->balance > 0) {{ $user->balance }} @endif @if($user->balance == 0) 0.00 @endif  <em class="ni ni-sign-kobo"></em></div>
                                                    </div>
                                                    <div class="profile-balance-subtitle">Wallet Balance</div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-block">
                                        <div class="nk-content ">
                                            <div class="container-fluid">
                                                <div class="nk-content-inner">
                                                    <div class="nk-content-body">
                                                        <div class="nk-block-head nk-block-head-sm">
                                                            <div class="nk-block-between">
                                                                <div class="nk-block-head-content">
                                                                    <h3 class="nk-block-title page-title">Update User Information</h3>
                                                                </div><!-- .nk-block-head-content -->
                                                            </div><!-- .nk-block-between -->
                                                        </div><!-- .nk-block-head -->
                                                        <div class="nk-block">
                                                            <div class="card card-bordered">
                                                                <div class="card-inner">
                                                                    <form action="{{ route('admin.users.update', $user->id) }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                     @method('PATCH')  
                                                                    <div class="row gy-4">
                                                                        <h5>User Details</h5>
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="first-name">Full Name</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="name" value="{{ old('name', $user->name) }}" type="text" class="form-control" id="first-name" placeholder="First Name">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="email">Email</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="email" value="{{ old('email', $user->email) }}" type="email" class="form-control" id="email" placeholder="Email">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Account Type</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select name="acc_type" class="form-select js-select2" data-placeholder="Select Account Type">
                                                                                        <option value="">Select</option>
                                                                                        <option {{ old('acc_type', $user->account_type)  == "savings" ? 'selected': ''}} value="savings">Savings Account</option>
                                                                                        <option {{ old('acc_type', $user->account_type)  == "current" ? 'selected': ''}} value="current">Current Account</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Status</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select name="user_type" class="form-select js-select2">
                                                                                        <option {{ old('user_type', $user->user_type)  == "user" ? 'selected': ''}} value="user">User</option>
                                                                                        <option {{ old('user_type', $user->user_type)  == "admin" ? 'selected': ''}} value="admin">Admin</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Upload Photo</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="form-file">
                                                                                        <input name="user_profile" value="{{ old('user_profile', $user->user_profile) }}" type="file" multiple class="form-file-input" id="customFile">
                                                                                        <label class="form-file-label" for="customFile">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="password">Password</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <h5 class="mt-5">KYC Details</h5>
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label" for="phone-no">Phone</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="phone" value="{{ old('phone', $kyc?->phone) }}"  type="number" class="form-control" id="phone-no" placeholder="Phone no">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->

                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Gender</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select name="gender" class="form-select js-select2" data-placeholder="Select Gender">
                                                                                        <option value="">Select Gender</option>
                                                                                        <option {{ old('gender', $kyc?->gender)  == "male" ? 'selected': ''}} value="male">Male</option>
                                                                                        <option {{ old('gender', $kyc?->gender)  == "female" ? 'selected': ''}} value="female">Female</option>
                                                                                        <option {{ old('gender', $kyc?->gender)  == "other" ? 'selected': ''}} value="other">Other</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->

                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Date of Birth</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="form-icon form-icon-right">
                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                    </div>
                                                                                    <input name="dob" value="{{ old('dob', $kyc?->dob) }}" type="text" class="form-control date-picker-alt" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->

                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Address Line 1</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="address1" value="{{ old('address1', $kyc?->address1) }}" type="text" class="form-control" id="address" placeholder="Address Line 1">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Address Line 2</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="address2" value="{{ old('address2', $kyc?->address2) }}" type="text" class="form-control" id="designation" placeholder="Address Line 2">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">City</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="city" value="{{ old('city', $kyc?->city) }}" type="text" class="form-control" id="specialist" placeholder="City">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">State</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="state" value="{{ old('state', $kyc?->state) }}" type="text" class="form-control" id="specialist" placeholder="State">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Country</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="country" value="{{ old('country', $kyc?->country) }}" type="text" class="form-control" id="specialist" placeholder="City">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">Zip Code</label>
                                                                                <div class="form-control-wrap">
                                                                                    <input name="zipcode" value="{{ old('zipcode', $kyc?->zipcode) }}" type="text" class="form-control" id="specialist" placeholder="City">
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->

                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">ID(Front)</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="form-file">
                                                                                        <input name="id_front" value="{{ old('id_front', $kyc?->id_front) }}" type="file" multiple class="form-file-input" id="nid">
                                                                                        <label class="form-file-label" for="nid">Choose file</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">ID(Back)</label>
                                                                                <div class="form-control-wrap">
                                                                                    <div class="form-file">
                                                                                        <input name="id_back" value="{{ old('id_back', $kyc?->id_back) }}" type="file" multiple class="form-file-input" id="certificates">
                                                                                        <label class="form-file-label" for="certificates">Choose files</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-xxl-4 col-md-6">
                                                                            <div class="form-group">
                                                                                <label class="form-label">ID Type</label>
                                                                                <div class="form-control-wrap">
                                                                                    <select name="id_type" class="form-select js-select2">
                                                                                        <option {{ old('id_type', $kyc?->id_type)  == "nat_id" ? 'selected': ''}} value="nat_id">National ID</option>
                                                                                        <option {{ old('id_type', $kyc?->id_type)  == "passport" ? 'selected': ''}} value="passport">Passport</option>
                                                                                        <option {{ old('id_type', $kyc?->id_type)  == "licence" ? 'selected': ''}} value="licence">Driving Licence</option>

                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div><!--col-->
                                                                        <div class="col-12">
                                                                           
                                                                            <div class="form-group">
                                                                                <button type="submit" class="btn btn-primary">Update User</button>
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