@extends('customer.layout.master')

@section('content')
<div class="nk-content">
    <div class="nk-block nk-block-lg">
        <div class="container-fluid mt-5">
            <div class="row justify-content-center">
                <div class="col-xxl-6">
                    <div class="card card-bordered">
                        <div class="card-body">
                            <div class="text-center mt-3 mb-3">
                                <img width="200" height="200" src="{{ asset('images/successful.jpg') }}" alt="Verified">
                                <p class="card-text mt-3">Transaction Successful! You can view the reciept <a href="#">here</a></p>
                                <a class="btn btn-success mt-2" href="{{ route('customer.dashboard') }}">Return to Dashboard</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection