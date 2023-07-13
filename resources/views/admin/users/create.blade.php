@extends('admin.layout.master')

@section('content')

<div class="nk-content ">
    <div class="container-fluid">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-between">
                        <div class="nk-block-head-content">
                            <h3 class="nk-block-title page-title">Add Customer</h3>
                        </div><!-- .nk-block-head-content -->
                    </div><!-- .nk-block-between -->
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="{{ route('admin.users.store') }}" method="post">
                                @csrf
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="first-name">Full Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="name" class="form-control" id="full-name" placeholder="Full Name">
                                            </div>
                                            @error('name') 
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div><!--col-->
                                    <div class="col-xxl-6 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="email">Email</label>
                                            <div class="form-control-wrap">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                            </div>
                                            @error('email') 
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div><!--col-->
                                    <div class="col-xxl-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label" for="password">Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                                            </div>
                                            @error('password') 
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div><!--col-->
                                    <div class="col-xxl-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Account Type</label>
                                            <div class="form-control-wrap">
                                                <select name="account_type" class="form-select js-select2" data-placeholder="Select Account Type">
                                                    <option value="savings">Savings Account</option>
                                                    <option value="current">Current Account</option>
                                                </select>
                                            </div>
                                            @error('account_type') 
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div><!--col-->
                                    <div class="col-xxl-4 col-md-4">
                                        <div class="form-group">
                                            <label class="form-label">Customer Type</label>
                                            <div class="form-control-wrap">
                                                <select name="user_type" class="form-select js-select2">
                                                    <option value="user">User</option>
                                                    <option value="admin">Administrator</option>
                                                </select>
                                            </div>
                                            @error('user_type') 
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                            @enderror
                                        </div>
                                    </div><!--col-->
                                    <div class="col-12">
                                        <div class="form-group mt-4">
                                            <button type="submit" class="btn btn-primary">Add Customer</button>
                                        </div>
                                    </div><!--col-->

                                </div><!--row-->
                            </form>
                        </div><!-- .card-inner-group -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
    </div>
</div>
@endsection