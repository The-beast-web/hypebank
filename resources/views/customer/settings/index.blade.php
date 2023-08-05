@extends('customer.layout.master')

@section('content')
    <div class="nk-content p-0">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-ibx">
                    <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                        <div class="nk-ibx-nav" data-simplebar>
                            <div class="card" data-toggle-body="true" data-content="userAside" data-toggle-screen="lg"
                                data-toggle-overlay="true">
                                <div class="card-inner-group" data-simplebar>
                                    <div class="card-inner">
                                        <div class="user-card">
                                            <div class="user-avatar bg-primary">
                                                <span>AB</span>
                                            </div>
                                            <div class="user-info">
                                                <span class="lead-text text-capitalize">{{ $user->name }}</span>
                                                <span class="sub-text">{{ $user->email }}</span>
                                            </div>
                                            <div class="user-action">
                                                <div class="dropdown">
                                                    <a class="btn btn-icon btn-trigger me-n2" data-bs-toggle="dropdown"
                                                        href="#">
                                                        <em class="icon ni ni-more-v"></em>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li>
                                                                <a href="#profile-edit" data-bs-toggle="modal">
                                                                    <em class="icon ni ni-edit-fill"></em>
                                                                    <span>Update Profile</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .user-card -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="user-account-info py-0">
                                            <h6 class="overline-title-alt">Account Balance</h6>
                                            <div class="user-balance">{{ number_format($user->balance) }} <small
                                                    class="currency currency-btc">NGN</small></div>
                                        </div>
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- card-aside -->
                        </div>
                    </div><!-- .nk-ibx-aside -->
                    <div class="nk-ibx-body bg-white">
                        <div class="nk-ibx-list p-5" data-simplebar>
                            <div class="nk-block-head nk-block-head-lg">
                                <div class="nk-block-between">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Personal Information</h4>
                                        <div class="nk-block-des">
                                            <p>Basic info, like your name and address, that you use on Nio Platform.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="nk-block-head-content align-self-start d-lg-none">
                                        <a href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                                            data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <div class="nk-block">
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Full Name</span>
                                            <span class="data-value">{{ $user->name }}</span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-unlock"></em>
                                            </span>
                                        </div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Email</span>
                                            <span class="data-value">{{ $user->email }}</span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-lock-alt"></em>
                                            </span>
                                        </div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Phone Number</span>
                                            @if (is_null($user->kyc->phone))
                                                <span class="data-value text-soft">Not added yet</span>
                                            @else
                                                <span class="data-value">{{ $user->kyc->phone }}</span>
                                            @endif
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-unlock"></em>
                                            </span>
                                        </div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Date of Birth</span>
                                            <span class="data-value">{{ $user->kyc->dob }}</span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-unlock"></em>
                                            </span>
                                        </div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Address</span>
                                            <span class="data-value text-capitalize">{{ $user->kyc->address1 }}
                                                {{ $user->kyc->city }},<br>{{ $user->kyc->state }},
                                                {{ $user->kyc->country }}</span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-unlock"></em>
                                            </span>
                                        </div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Zipcode</span>
                                            <span class="data-value text-capitalize">{{ $user->kyc->zipcode }}</span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-unlock"></em>
                                            </span>
                                        </div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Transaction PIN</span>
                                            <span class="data-value">****</span>
                                        </div>
                                        <div class="data-col data-col-end">
                                            <span class="data-more disable">
                                                <em class="icon ni ni-unlock">
                                                </em>
                                            </span>
                                        </div>
                                    </div><!-- data-item -->
                                </div><!-- data-list -->
                                <div class="nk-data data-list">
                                    <div class="data-head">
                                        <h6 class="overline-title">Preferences</h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label"><em class="ni ni-globe"></em> Language</span>
                                            <span class="data-value">English (United State)</span>
                                        </div>
                                        <div class="data-col data-col-end"><a href="#"
                                                class="link link-primary">Change Language</a></div>
                                    </div><!-- data-item -->
                                    <div class="data-item">
                                        <li><em class="icon ni ni-moon-fill"></em><span>Dark Mode</span></li>
                                        <div class="data-col data-col-end"><a class="dark-switch" href="#"></a>
                                        </div>
                                    </div><!-- data-item -->
                                </div><!-- data-list -->
                            </div><!-- .nk-block -->
                        </div>
                    </div><!-- .nk-ibx-body -->
                </div><!-- .nk-ibx -->
            </div>
        </div>
    </div>
    <!-- @ Profile Edit Modal -->
    <div class="modal fade" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-bs-toggle="tab" href="#personal">Personal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#address">Address</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#security">Security</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="personal">
                            <form action="{{ route('customer.setting.process') }}" id="profile-update" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="full-name">Full Name</label>
                                            <input type="text" name="name" value="{{ $user->name }}"
                                                class="form-control form-control-lg" id="full-name"
                                                placeholder="Enter Full name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email Address</label>
                                            <input type="text" value="{{ $user->email }}" name="email"
                                                class="form-control form-control-lg" id="email"
                                                placeholder="Email Address" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no">Phone Number</label>
                                            <input type="text" name="phone" value="{{ $user->kyc?->phone }}"
                                                class="form-control form-control-lg" id="phone-no"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="birth-day">Date of Birth</label>
                                            <input type="text" name="dob" value="{{ $user->kyc->dob }}"
                                                class="form-control form-control-lg date-picker" id="birth-day"
                                                placeholder="Enter your birth date">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Update
                                                    Profile</button>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="address">
                            <form action="{{ route('customer.setting.address.process') }}" id="address-update"
                                method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l1">Address Line 1</label>
                                            <input type="text" class="form-control form-control-lg" name="address-l1"
                                                id="address-l1" value="{{ $user->kyc?->address1 }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l2">Address Line 2</label>
                                            <input type="text" class="form-control form-control-lg" name="address-l2"
                                                id="address-l2" value="{{ $user->kyc?->address2 }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l2">City</label>
                                            <input type="text" class="form-control form-control-lg" name="city"
                                                id="city" value="{{ $user->kyc?->city }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l2">Zipcode</label>
                                            <input type="text" class="form-control form-control-lg" name="zipcode"
                                                id="zipcode" value="{{ $user->kyc?->zipcode }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-st">State</label>
                                            <input type="text" class="form-control form-control-lg" name="state"
                                                id="address-st" value="{{ $user->kyc->state }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-county">Country</label>
                                            <select class="form-select js-select2" name="country" id="address-county"
                                                data-ui="lg">
                                                <option>Canada</option>
                                                <option>United State</option>
                                                <option>United Kindom</option>
                                                <option>Australia</option>
                                                <option>India</option>
                                                <option>Bangladesh</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <button type="submit" class="btn btn-lg btn-primary">Update
                                                    Address</button>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="security">
                            <form action="{{ route('customer.setting.process') }}" id="profile-update" method="POST">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l1">Old Password</label>
                                            <input type="password" name="old-password"
                                                class="form-control form-control-lg" id="old-password">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-l2">New Password</label>
                                            <input type="text" name="new-password"
                                                class="form-control form-control-lg" id="new-passcode">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-st">Old Transaction PIN</label>
                                            <input type="password" name="old-pin" class="form-control form-control-lg"
                                                id="old-pin">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="address-st">New Transaction PIN</label>
                                            <input type="text" name="new-pin" class="form-control form-control-lg"
                                                id="new-pin">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="#" class="btn btn-lg btn-primary">Update Security
                                                    Details</a>
                                            </li>
                                            <li>
                                                <a href="#" data-bs-dismiss="modal"
                                                    class="link link-light">Cancel</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
@endsection

@push('script')
    {!! $validator->selector('#profile-update') !!}

    <script>
        $(document).ready(function() {

            $('#profile-update').on('submit', function(e) {

                e.preventDefault();

                form = $(this);

                if (form.valid()) {

                    var f = form.find(':submit');

                    var button = f.html();

                    f.attr("disabled", "disabled")
                        .html(
                            '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Loading...</span>'
                        );

                    // $(form).ajaxSubmit();
                    $.ajax({
                        url: form.attr('action'),
                        type: "POST",
                        data: form.serialize(),
                        success: function(result) {

                            console.log(result);

                            f.removeAttr("disabled").html(button);

                            window.location.replace(result.redirect_url);

                        },
                        error: function(xhr, status, error) {

                            f.removeAttr("disabled").html(button);

                            $.each(xhr.responseJSON.errors, function(key, item) {
                                $('input[name = ' + key + ']')
                                    .removeClass('is-valid')
                                    .addClass('is-invalid')
                                    .after('<div class="invalid-feedback">' + item +
                                        '</div>');

                            });

                        }
                    });
                }


            });
            $('#address-update').on('submit', function(e) {

                e.preventDefault();

                form = $(this);

                if (form.valid()) {

                    var f = form.find(':submit');

                    var button = f.html();

                    f.attr("disabled", "disabled")
                        .html(
                            '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span><span>Loading...</span>'
                        );

                    // $(form).ajaxSubmit();
                    $.ajax({
                        url: form.attr('action'),
                        type: "POST",
                        data: form.serialize(),
                        success: function(result) {

                            console.log(result);

                            f.removeAttr("disabled").html(button);

                            window.location.replace(result.redirect_url);

                        },
                        error: function(xhr, status, error) {

                            f.removeAttr("disabled").html(button);

                            $.each(xhr.responseJSON.errors, function(key, item) {
                                $('input[name = ' + key + ']')
                                    .removeClass('is-valid')
                                    .addClass('is-invalid')
                                    .after('<div class="invalid-feedback">' + item +
                                        '</div>');

                            });

                        }
                    });
                }


            });
        });
    </script>
@endpush
