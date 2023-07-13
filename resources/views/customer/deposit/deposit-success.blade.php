@extends('customer.layout.master')

@section('content')
<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-xxl-10">
                    <div class="card card-bordered">
                        <div class="card-body">
                            <div class="text-center mt-3 mb-3">
                                <img width="200" height="200" src="{{ asset('images/kyc-success.png') }}" alt="Verified">
                                <h2 style="font-family: 'Arial';" class="card-title text-success mt-3"><em class="ni ni-sign-kobo"></em>@if(session()->has('amount')){{ session()->get('amount') }} @endif Deposit Successful</h2>
                                <p class="card-text mt-3">Your deposit will be added to your balance once it is verified.</p>
                                <a class="btn btn-primary mt-2" href="{{ route('customer.dashboard') }}">Return to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection