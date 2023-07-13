@extends('auth.master')

@section('content')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Register</h4>
                <div class="nk-block-des">
                    <p>Create New Dashlite Account</p>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <label class="form-label" for="name">Name</label>
                <div class="form-control-wrap">
                    <input name="name" type="text" class="form-control form-control-lg @error('name') error @enderror" id="name" placeholder="Enter your name">
                    @error('name')
                    <span id="fv-full-name-error" class="invalid">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="email">Email</label>
                <div class="form-control-wrap">
                    <input name="email" type="text" class="form-control form-control-lg @error('email') error @enderror" id="email" placeholder="Enter your email address">
                    @error('email')
                    <span id="fv-full-name-error" class="invalid">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Passcode</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input name="password" type="password" class="form-control form-control-lg @error('password') error @enderror" id="password" placeholder="Enter your passcode">
                    @error('password')
                    <span id="fv-full-name-error" class="invalid">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="form-label" for="password">Confirm Passcode</label>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="cpassword">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input name="password_confirmation" type="password" class="form-control form-control-lg" id="cpassword" placeholder="Confirm your passcode">
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-control-xs custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox">
                    <label class="custom-control-label" for="checkbox">I agree to Dashlite <a href="#">Privacy Policy</a> &amp; <a href="#"> Terms.</a></label>
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Register</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="{{ route('login') }}"><strong>Sign in instead</strong></a>
        </div>
        <div class="text-center pt-4 pb-3">
            <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
        </div>
        <ul class="nav justify-center gx-8">
            <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
        </ul>
    </div>
</div>

@endsection