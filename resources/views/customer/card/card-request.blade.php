@extends('customer.layout.master')

@section('content')
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Request Card</h3>
                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                            data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li><a href="#" class="btn btn-white btn-outline-light"><em
                                                            class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                <li class="nk-block-tools-opt">
                                                    <a href="{{ route('admin.users.create') }}"
                                                        class=" btn btn-icon btn-primary"><em class="icon ni ni-plus"></em></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-content ">
                            <div class="container-fluid">
                                <div class="nk-content-inner">
                                    <div class="nk-content-body">
                                        <div class="components-preview  mx-auto">
                                            <div class="nk-block nk-block-lg">
                                                <div class="card card-bordered">
                                                    <form class="nk-stepper stepper-init is-alter"
                                                        action="{{ route('card.request') }}" method="post">
                                                        @csrf
                                                        <div class="card-inner">

                                                            <h5 class="title mb-3">Select a Card</h5>
                                                            <ul class="row g-3">
                                                                <li class="col-4">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                        <input type="radio" class="custom-control-input"
                                                                            name="card" id="two-FA-app" value="mastercard">
                                                                        <label class="custom-control-label" for="two-FA-app">
                                                                            <span class="d-flex flex-column text-center">
                                                                                <span class="icon-wrap xl text-primary">
                                                                                    <img src="{{ asset('images/mastercard.png') }}"
                                                                                        alt="">
                                                                                </span>
                                                                                <span
                                                                                    class="lead-text mb-1 mt-5">Mastercard</span>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="col-4">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                        <input type="radio" class="custom-control-input"
                                                                            name="card" id="two-FA-SMS" value="visa">
                                                                        <label class="custom-control-label" for="two-FA-SMS">
                                                                            <span class="d-flex flex-column text-center">
                                                                                <span class="icon-wrap xl text-primary">
                                                                                    <img src="{{ asset('images/visa.jpg') }}"
                                                                                        alt="">
                                                                                </span>
                                                                                <span class="lead-text mb-1 mt-5">Visa</span>

                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="col-4">
                                                                    <div
                                                                        class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                        <input type="radio" class="custom-control-input"
                                                                            name="card" id="two-FA-Verve" value="verve"
                                                                            required>
                                                                        <label class="custom-control-label" for="two-FA-Verve">
                                                                            <span class="d-flex flex-column text-center">
                                                                                <span class="icon-wrap xl text-primary">
                                                                                    <img src="{{ asset('images/verve.jpg') }}"
                                                                                        alt="">
                                                                                </span>
                                                                                <span class="lead-text mb-1 mt-5">Verve</span>

                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </li>
                                                                <li class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="form-label"
                                                                            for="cp1-card-exp-month">Preferred Card PIN</label>
                                                                        <div class="form-control-wrap">
                                                                            <input type="number" class="form-control"
                                                                                id="cp1-card-exp-month" name="card_pin">
                                                                        </div>
                                                                        @error('card_pin')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                </li>
                                                                <li class="col-12">
                                                                    <button class="btn btn-primary" type="submit">Request
                                                                        Card</button>

                                                                </li>
                                                            </ul>
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
                </div>
            </div>
        </div>
        <!-- content @e -->
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Cards</h3>
                                    <div class="nk-block-des text-soft">
                                        <p>You have total {{ $cards->count() }} cards(s).</p>
                                    </div>
                                </div><!-- .nk-block-head-content -->
                                <div class="nk-block-head-content">
                                    <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                            data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                        <div class="toggle-expand-content" data-content="pageMenu">
                                            <ul class="nk-block-tools g-3">
                                                <li class="nk-block-tools-opt">
                                                    <a href="" class=" btn btn-icon btn-primary"  data-bs-toggle="modal" data-bs-target="#modalId"><em
                                                            class="icon ni ni-plus"></em></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .toggle-wrap -->
                                </div><!-- .nk-block-head-content -->
                            </div><!-- .nk-block-between -->
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card card-bordered card-stretch">
                                <div class="card-inner-group">
                   
                                    <div class="card-inner p-3">
                                        <div class="nk-tb-list nk-tb-ulist">
                                            <div class="nk-tb-item nk-tb-head">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="cid">
                                                        <label class="custom-control-label" for="cid"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col"><span class="sub-text">Customer</span></div>
                                                <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Card Number</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Card PIN</span></div>
                                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">CVV</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Card Type</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Approved At</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Actions</span>
                                                </div>
                                            </div><!-- .nk-tb-item -->
                                            @foreach ($cards as $card)
                                                <div class="nk-tb-item">
                                                    <div class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="cid1">
                                                            <label class="custom-control-label" for="cid1"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col">

                                                        <div class="user-card">
                                                            <div class="user-avatar xs bg-primary">
                                                                <span>BG</span>
                                                            </div>
                                                            <div class="user-name">
                                                              {{ $card->user->name }}</span>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="nk-tb-col tb-col-sm">
                                                        <span class="sub-text">{{ $card->user->email }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <span class="sub-text text-capitalize">{{ $card->card_number }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="sub-text">{{ $card->card_pin }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-lg">
                                                        <span class="sub-text">{{ $card->cvv }}</span>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-md">
                                                        <div class="icon-text">

                                                            <span class="sub-text">{{ $card->card_type }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span class="sub-text">{{ $card->created_at }}</span>
                                                    </div>
                                                    <div class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                                <li class="nk-tb-action-hidden">
                                                                    <a href="#" class="btn btn-trigger btn-icon"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Change Card PIN">
                                                                        <em class="icon ni ni-pen2"></em>
                                                                    </a>
                                                            <li>
                                                                <div class="drodown">
                                                                    <a href="#"
                                                                        class="dropdown-toggle btn btn-icon btn-trigger"
                                                                        data-bs-toggle="dropdown"><em
                                                                            class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><em
                                                                                        class="icon ni ni-pen2"></em><span>Change Card PIN</span></a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .nk-tb-item -->
                                            @endforeach
                                        </div><!-- .nk-tb-list -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em
                                                                class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul><!-- .pagination -->
                                            </div>
                                            <div class="g">
                                                <div
                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page</div>
                                                    <div>
                                                        <select class="form-select js-select2" data-search="on"
                                                            data-dropdown="xs center">
                                                            <option value="page-1">1</option>
                                                            <option value="page-2">2</option>
                                                            <option value="page-4">4</option>
                                                            <option value="page-5">5</option>
                                                            <option value="page-6">6</option>
                                                            <option value="page-7">7</option>
                                                            <option value="page-8">8</option>
                                                            <option value="page-9">9</option>
                                                            <option value="page-10">10</option>
                                                            <option value="page-11">11</option>
                                                            <option value="page-12">12</option>
                                                            <option value="page-13">13</option>
                                                            <option value="page-14">14</option>
                                                            <option value="page-15">15</option>
                                                            <option value="page-16">16</option>
                                                            <option value="page-17">17</option>
                                                            <option value="page-18">18</option>
                                                            <option value="page-19">19</option>
                                                            <option value="page-20">20</option>
                                                        </select>
                                                    </div>
                                                    <div>OF 102</div>
                                                </div>
                                            </div><!-- .pagination-goto -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .card-inner -->
                                </div><!-- .card-inner-group -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div>
                </div>
            </div>
        </div>     
    @endsection
