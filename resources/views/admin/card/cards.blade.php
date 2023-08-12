@extends('admin.layout.master')

@section('content')

    <!-- content @s
        -->
        <div class="nk-content ">
            <div class="container-fluid">
                <div class="nk-content-inner">
                    <div class="nk-content-body">
                        <div class="nk-block-head nk-block-head-sm">
                            <div class="nk-block-between">
                                <div class="nk-block-head-content">
                                    <h3 class="nk-block-title page-title">Available Card</h3>
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
                                                <li><a href="#" class="btn btn-white btn-outline-light"><em
                                                            class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                <li class="nk-block-tools-opt">
                                                    <a href="" class=" btn btn-icon btn-primary"><em
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
                                    <div class="card-inner position-relative card-tools-toggle">
                                        <div class="card-title-group">
                                            <div class="card-tools">
                                                <div class="form-inline flex-nowrap gx-3">
                                                    <div class="form-wrap w-150px">
                                                        <select class="form-select js-select2" data-search="off"
                                                            data-placeholder="Bulk Action">
                                                            <option value="">Bulk Action</option>
                                                            <option value="email">Send Email</option>
                                                            <option value="suspend">Suspend</option>
                                                            <option value="delete">Delete</option>
                                                        </select>
                                                    </div>
                                                    <div class="btn-wrap">
                                                        <span class="d-none d-md-block"><button
                                                                class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                        <span class="d-md-none"><button
                                                                class="btn btn-dim btn-outline-light btn-icon disabled"><em
                                                                    class="icon ni ni-arrow-right"></em></button></span>
                                                    </div>
                                                </div><!-- .form-inline -->
                                            </div><!-- .card-tools -->
                                            <div class="card-tools me-n1">
                                                <ul class="btn-toolbar gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-icon search-toggle toggle-search"
                                                            data-target="search"><em class="icon ni ni-search"></em></a>
                                                    </li><!-- li -->
                                                </ul><!-- .btn-toolbar -->
                                            </div><!-- .card-tools -->
                                        </div><!-- .card-title-group -->
                                        <div class="card-search search-wrap" data-search="search">
                                            <div class="card-body">
                                                <div class="search-content">
                                                    <a href="#" class="search-back btn btn-icon toggle-search"
                                                        data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                    <input type="text"
                                                        class="form-control border-transparent form-focus-none"
                                                        placeholder="Search by name">
                                                    <button class="search-submit btn btn-icon"><em
                                                            class="icon ni ni-search"></em></button>
                                                </div>
                                            </div>
                                        </div><!-- .card-search -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner p-0">
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
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Card Number</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg"><span class="sub-text">Card PIN</span></div>
                                                <div class="nk-tb-col tb-col-md"><span class="sub-text">Card Type</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Approved At</span>
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
                                                                <span class="tb-lead"><span
                                                                        class="dot dot-success d-lg-none ms-1"></span>{{ $card->user->name }}</span>
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
                                                    <div class="nk-tb-col tb-col-md">
                                                        <div class="icon-text">

                                                            <span class="sub-text">{{ $card->card_type }}</span>
                                                        </div>
                                                    </div>
                                                    <div class="nk-tb-col tb-col-xxl">
                                                        <span class="sub-text">{{ $card->created_at }}</span>
                                                    </div>

                                                </div><!-- .nk-tb-item -->
                                            @endforeach
                                        </div><!-- .nk-tb-list -->
                                    </div><!-- .card-inner -->
                                    <div class="card-inner">
                                        <div class="nk-block-between-md g-3">
                                            <div class="g">
                                                {{ $cards->links() }}
                                            </div>
                                            <div class="g">
                                                <div
                                                    class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                    <div>Page {{ $cards->currentPage() }} OF {{ $cards->lastPage() }}</div>
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
        <!-- content @e -->
    @endsection
