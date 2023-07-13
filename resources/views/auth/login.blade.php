@extends('auth.master')

@section('content')
<div class="card card-bordered">
    <div class="card-inner card-inner-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Sign-In</h4>
                <div class="nk-block-des">
                    <p>Access the DashLite panel using your email and passcode.</p>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="default-01">Email</label>
                </div>
                <div class="form-control-wrap">
                    <input type="text" name="email" class="form-control form-control-lg  @error('email') error @enderror" id="default-01" placeholder="Enter your email address or username">
                    @error('email')
                    <span id="fv-full-name-error" class="invalid">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-label-group">
                    <label class="form-label" for="password">Passcode</label>
                    <a class="link link-primary link-sm" href="{{ route('password.request') }}">Forgot Code?</a>
                </div>
                <div class="form-control-wrap">
                    <a href="#" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                        <em class="passcode-icon icon-show icon ni ni-eye"></em>
                        <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                    </a>
                    <input type="password" name="password" class="form-control form-control-lg @error('password') error @enderror " id="password" placeholder="Enter your passcode">
                    @error('password')
                    <span id="fv-full-name-error" class="invalid">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign in</button>
            </div>
        </form>
        <div class="form-note-s2 text-center pt-4"> New on our platform? <a href="{{ route('register') }}">Create an account</a>
        </div>
        <div class="text-center pt-4 pb-3">
            <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
        </div>
        <ul class="nav justify-center gx-4">
            <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
        </ul>
    </div>
</div>
@endsection
