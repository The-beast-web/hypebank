@extends('admin.layout.master')

@section('content')
    <!-- content -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Active Loan</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total {{ $active_loan->count() }} active loans.</p>
                                </div>
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
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Amount</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Monthly Payment</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Monthly Interest</span>
                                            </div>
                                                 <div class="nk-tb-col tb-col-md"><span class="sub-text">EMI Type</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Loan Package</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Submitted At</span>
                                            </div>
                                            <div class="nk-tb-col text-end"><span class="sub-text">Actions</span></div>
                                        </div><!-- .nk-tb-item -->
                                        @foreach ($active_loan as $loan)
                                            <div class="nk-tb-item">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="cid1">
                                                        <label class="custom-control-label" for="cid1"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <a href="html/customer-details.html">
                                                        <div class="user-card">
                                                            <div class="user-avatar xs bg-primary">
                                                                <span>BG</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <span class="sub-text">{{ $loan->user->name }} <span
                                                                        class="dot dot-success d-lg-none ms-1"></span></span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="sub-text">{{ $loan->user->email }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span class="sub-text"><em class="ni ni-sign-kobo"></em> {{ $loan->amount }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="sub-text"><em class="ni ni-sign-kobo"></em> {{ $loan->monthly_payment }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <div class="icon-text">
                                                        <span
                                                            class="sub-text text-capitalize">{{ $loan->monthly_interest }}%</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <div class="icon-text">
                                                        <span
                                                            class="sub-text text-capitalize">{{ $loan->emi_type }}</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span class="sub-text text-capitalize">{{ $loan->name }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="tb-status text-capitalize">
                                                        {{ $loan->created_at }}
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="{{ route('admin.loan.active.detail', $loan->id) }}"
                                                                class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Details">
                                                                <em class="icon ni ni-eye-fill"></em>
                                                            </a>
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
                                            {{ $active_loan->links() }}
                                        </div>
                                        <div class="g">
                                            <div
                                                class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                <div>Page {{ $active_loan->currentPage() }} OF {{ $active_loan->lastPage() }}</div>
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
    <!-- content #e -->
    </div>
@endsection