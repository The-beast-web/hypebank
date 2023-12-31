@extends('admin.layout.master')

@section('content')
    <!-- content @ -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Users Withdrawal List</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total {{ $withdraws->count() }} withdrawals.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1"
                                        data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li><a href="{{ route('admin.withdraw.trash') }}"
                                                    class="btn btn-icon btn-white btn-outline-light"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="View Trash"><em class="icon ni ni-trash-fill"></em><span
                                                        class="badge rounded-pill bg-danger">{{ $trash->count() }}</span></a>
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
                                                <li class="btn-toolbar-sep"></li><!-- li -->
                                                <li>
                                                    <div class="toggle-wrap">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle"
                                                            data-target="cardTools"><em
                                                                class="icon ni ni-menu-right"></em></a>
                                                        <div class="toggle-content" data-content="cardTools">
                                                            <ul class="btn-toolbar gx-1">
                                                                <li class="toggle-close">
                                                                    <a href="#"
                                                                        class="btn btn-icon btn-trigger toggle"
                                                                        data-target="cardTools"><em
                                                                            class="icon ni ni-arrow-left"></em></a>
                                                                </li><!-- li -->
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown">
                                                                            <div class="dot dot-primary"></div>
                                                                            <em class="icon ni ni-filter-alt"></em>
                                                                        </a>
                                                                        <div
                                                                            class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                            <div class="dropdown-head">
                                                                                <span
                                                                                    class="sub-title dropdown-title">Filter
                                                                                    Customers</span>
                                                                            </div>
                                                                            <div class="dropdown-body dropdown-body-rg">
                                                                                <div class="row gx-6 gy-3">
                                                                                    <div class="col-6">
                                                                                        <div
                                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                                            <input type="checkbox"
                                                                                                class="custom-control-input"
                                                                                                id="hasBalance">
                                                                                            <label
                                                                                                class="custom-control-label"
                                                                                                for="hasBalance"> Have
                                                                                                Balance</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div
                                                                                            class="custom-control custom-control-sm custom-checkbox">
                                                                                            <input type="checkbox"
                                                                                                class="custom-control-input"
                                                                                                id="hasKYC">
                                                                                            <label
                                                                                                class="custom-control-label"
                                                                                                for="hasKYC"> KYC
                                                                                                Verified</label>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="overline-title overline-title-alt">Card
                                                                                                Type</label>
                                                                                            <select
                                                                                                class="form-select js-select2">
                                                                                                <option value="any">Any
                                                                                                    Card</option>
                                                                                                <option value="Visa">Visa
                                                                                                </option>
                                                                                                <option value="Mastercard">
                                                                                                    Mastercard</option>
                                                                                                <option
                                                                                                    value="AmericanExpress">
                                                                                                    American Express
                                                                                                </option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-6">
                                                                                        <div class="form-group">
                                                                                            <label
                                                                                                class="overline-title overline-title-alt">Status</label>
                                                                                            <select
                                                                                                class="form-select js-select2">
                                                                                                <option value="any">Any
                                                                                                    Status</option>
                                                                                                <option value="new">New
                                                                                                </option>
                                                                                                <option value="active">
                                                                                                    Active</option>
                                                                                                <option value="suspend">
                                                                                                    Suspend</option>
                                                                                                <option value="deleted">
                                                                                                    Deleted</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12">
                                                                                        <div class="form-group">
                                                                                            <button type="button"
                                                                                                class="btn btn-secondary">Filter</button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="dropdown-foot between">
                                                                                <a class="clickable" href="#">Reset
                                                                                    Filter</a>
                                                                                <a href="#">Save Filter</a>
                                                                            </div>
                                                                        </div><!-- .filter-wg -->
                                                                    </div><!-- .dropdown -->
                                                                </li><!-- li -->
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="#"
                                                                            class="btn btn-trigger btn-icon dropdown-toggle"
                                                                            data-bs-toggle="dropdown">
                                                                            <em class="icon ni ni-setting"></em>
                                                                        </a>
                                                                        <div
                                                                            class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                            <ul class="link-check">
                                                                                <li><span>Show</span></li>
                                                                                <li class="active"><a
                                                                                        href="#">10</a></li>
                                                                                <li><a href="#">20</a></li>
                                                                                <li><a href="#">50</a></li>
                                                                            </ul>
                                                                            <ul class="link-check">
                                                                                <li><span>Order</span></li>
                                                                                <li class="active"><a
                                                                                        href="#">DESC</a></li>
                                                                                <li><a href="#">ASC</a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div><!-- .dropdown -->
                                                                </li><!-- li -->
                                                            </ul><!-- .btn-toolbar -->
                                                        </div><!-- .toggle-content -->
                                                    </div><!-- .toggle-wrap -->
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
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Withdrawal
                                                    Method</span></div>
                                            <div class="nk-tb-col tb-col-lg"><span class="sub-text">Amount</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Date</span></div>
                                            <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col text-end"><span class="sub-text"></span></div>
                                        </div><!-- .nk-tb-item -->
                                        @foreach ($withdraws as $withdraw)
                                            <div class="nk-tb-item @if ($withdraw->status_2 == 'trash') d-none @endif">
                                                <div class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="cid">
                                                        <label class="custom-control-label" for="cid"></label>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col">
                                                    <a href="html/customer-details.html">
                                                        <div class="user-card">
                                                            <div class="user-avatar xs bg-primary">
                                                                <span>BG</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <span class="tb-lead">{{ $withdraw->user->name }}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="nk-tb-col tb-col-sm">
                                                    <span class="sub-text">{{ $withdraw->user->email }}<span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <span
                                                        class="sub-text text-capitalize">{{ $withdraw->withdrawal_method }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-lg">
                                                    <span class="sub-text">{{ $withdraw->amount }}</span>
                                                </div>
                                                <div class="nk-tb-col tb-col-md">
                                                    <div class="icon-text">
                                                        <span class="sub-text">{{ $withdraw->created_at }}</span>
                                                    </div>
                                                </div>
                                                <div class="nk-tb-col tb-col-xxl">
                                                    <span
                                                        class="sub-text text-capitalize @if ($withdraw->status == 'pending') text-danger @endif @if ($withdraw->status == 'declined') text-danger @endif @if ($withdraw->status == 'approved') text-success @endif">
                                                        {{ $withdraw->status }}
                                                    </span>
                                                </div>
                                                <div class="nk-tb-col nk-tb-col-tools">
                                                    <ul class="nk-tb-actions gx-1">
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="{{ route('admin.withdraw.detail', $withdraw->id) }}"
                                                                class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="View">
                                                                <em class="icon ni ni-eye-fill"></em>
                                                            </a>
                                                        </li>
                                                        @if ($withdraw->status == 'pending' || $withdraw->status == 'declined')
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="{{ route('admin.withdraw.approve', $withdraw->id) }}"
                                                                    class="btn btn-trigger btn-icon"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Approve">
                                                                    <em class="icon ni ni-check-circle"></em>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        @if ($withdraw->status == 'approved')
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="{{ route('admin.withdraw.cancel', $withdraw->id) }}"
                                                                    class="btn btn-trigger btn-icon"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Cancel Approval">
                                                                    <em class="icon ni ni-cross-circle"></em>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        @if ($withdraw->status == 'pending')
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="{{ route('admin.withdraw.decline', $withdraw->id) }}"
                                                                    class="btn btn-trigger btn-icon"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Decline">
                                                                    <em class="icon ni ni-na"></em>
                                                                </a>
                                                            </li>
                                                        @endif
                                                        <li class="nk-tb-action-hidden">
                                                            <a href="{{ route('admin.withdraw.delete', $withdraw->id) }}"
                                                                class="btn btn-trigger btn-icon" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="Trash">
                                                                <em class="icon ni ni-trash-fill"></em>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#"
                                                                    class="dropdown-toggle btn btn-icon btn-trigger"
                                                                    data-bs-toggle="dropdown"><em
                                                                        class="icon ni ni-more-h"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><em
                                                                                    class="icon ni ni-eye"></em><span>View
                                                                                    Details</span></a></li>
                                                                        @if ($withdraw->status == 'pending' || $withdraw->status == 'declined')
                                                                            <li><a
                                                                                    href="{{ route('admin.withdraw.approve', $withdraw->id) }}"><em
                                                                                        class="icon ni ni-check-circle"></em><span>Approve
                                                                                        Deposit</span></a></li>
                                                                        @endif
                                                                        @if ($withdraw->status == 'approved')
                                                                            <li><a
                                                                                    href="{{ route('admin.withdraw.cancel', $withdraw->id) }}"><em
                                                                                        class="icon ni ni-cross-circle"></em><span>Cancel
                                                                                        Approval</span></a></li>
                                                                        @endif
                                                                        @if ($withdraw->status == 'pending')
                                                                            <li><a
                                                                                    href="{{ route('admin.withdraw.decline', $withdraw->id) }}"><em
                                                                                        class="icon ni ni-na"></em><span>Decline
                                                                                        Deposit</span></a></li>
                                                                        @endif
                                                                        <li><a
                                                                                href="{{ route('admin.withdraw.delete', $withdraw->id) }}"><em
                                                                                    class="icon ni ni-trash-fill"></em><span>Trash</span></a>
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
                                            {{ $withdraws->links() }}
                                        </div>
                                        <div class="g">
                                            <div
                                                class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                <div>Page {{ $withdraws->currentPage() }}  {{ $withdraws->lastPage() }}</div>
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
