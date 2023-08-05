@extends('customer.layout.master')

@section('content')
    <div class="nk-content">
        <div class="container-fluid mt-5">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="components-preview wide-sm mx-auto">
                        <div class="nk-block-head nk-block-head-lg wide-sm">
                            <div class="nk-block-head-content">
                                <div class="nk-block-head-sub bck"><a class="back-to"
                                        href="{{ route('customer.dashboard') }}"><em
                                            class="icon ni ni-arrow-left"></em><span>Dashboard</span></a></div>
                                <h2 class="nk-block-title fw-normal">Withdrawal</h2>
                                <div class="nk-block-des">
                                    <p class="lead">Withdraw funds from your Bankpro account.</p>
                                </div>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block nk-block-lg">
                            <div class="card card-bordered">
                                <form class="nk-stepper stepper-init is-alter" action="#" id="stepper-two-factor-auth">
                                    <div class="card-inner">
                                        <div class="nk-stepper-content">
                                            <div class="nk-stepper-steps stepper-steps">
                                                <div class="nk-stepper-step">
                                                    <h5 class="title mb-3">Chooose A Withdrawal Method</h5>
                                                    <ul class="row g-3">
                                                        <li class="col-4">
                                                            <a href="{{ route('customer.withdraw.bank') }}" class="">
                                                                <div class="card h-100 lin card-bordered">
                                                                    <div class="card-body">
                                                                        <div class=" text-center">
                                                                            <img src="{{ asset('images/download.png') }}"
                                                                                class="card-img-top mt-4" alt="">
                                                                            <span class="lead-text mb-1 mt-5">Bank
                                                                                Transfer</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="col-4">
                                                            <a href="{{ route('customer.withdraw.paypal') }}">
                                                                <div class="card lin h-100 card-bordered">
                                                                    <div class="card-body">
                                                                        <div class=" text-center">
                                                                            <img src="{{ asset('images/paypal.png') }}"
                                                                                class="card-img-top mt-4" alt="">
                                                                            <span class="lead-text mb-1 mt-5">Paypal</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="col-4">
                                                            <a href="#">
                                                                <div class="card lin h-100 card-bordered">
                                                                    <div class="card-body">
                                                                        <div class=" text-center">
                                                                            <img src="{{ asset('images/credit-card.png') }}"
                                                                                class="card-img-top mt-4" alt="">
                                                                            <span class="lead-text mb-1 mt-5">Debit
                                                                                Card</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .components-preview -->
                </div>
            </div>
        </div>
    </div>
@endsection
