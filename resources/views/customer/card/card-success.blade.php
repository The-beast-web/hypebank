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
                                <img width="200" height="200" src="{{ asset('images/credit-card.png') }}" alt="Verified">
                                <p class="card-text mt-3">Your card request has been submitted and waiting for approval. You will be notified when the approval proccess is done.</p>
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