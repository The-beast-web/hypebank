@extends('auth.master')

@section('content')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Reset Password</h4>
            </div>
        </div>
        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="default-01">Email</label>
                </div>
                <div class="form-control-wrap">
                    <input type="text" value="{{ $email ?? old('email') }}" name="email" class="form-control form-control-lg  @error('email') is-invalid @enderror" id="default-01" placeholder="Enter your email address or username">
                    @error('email')
                    <span id="fv-full-name-error" class="invalid">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="password">New Passcode</label>

                </div>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" name="password" class="form-control form-control-lg @error('password') error @enderror " id="password" placeholder="Enter your new passcode">
                    @error('password')
                    <span id="fv-full-name-error" class="invalid">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="password">Confirm New Passcode</label>

                </div>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="cpassword">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" name="password_confirmation" class="form-control form-control-lg" id="cpassword" placeholder="Confirm your new passcode">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Reset Password</button>
            </div>
        </form>
    </div>
</div>
@endsection