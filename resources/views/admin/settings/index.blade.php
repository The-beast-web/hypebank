@extends('admin.layout.master')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block">
                        <div class="card card-bordered">
                            <div class="card-aside-wrap">
                                <div class="card-inner card-inner-lg">
                                    <div class="nk-block-head nk-block-head-lg">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h5 class="title fw-medium">General settings</h5>
                                                <span>These settings helps you modify site settings.</span>
                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content align-self-start d-lg-none">
                                                <a href="#" class="toggle btn btn-icon btn-trigger mt-n1"
                                                    data-target="userAside"><em class="icon ni ni-menu-alt-r"></em></a>
                                            </div>
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                        <form action="{{ route('admin.setting.update_general') }}" method="POST" class="form-settings" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site-name">App Name</label>
                                                        <span class="form-note">Specify the name of your hospital.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" name="app_name" class="form-control" id="site-name"
                                                                value="{{ setting('app_name') }}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-center mt-2">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site-name">Logo</label>
                                                        <span class="form-note">Specify the name of your hospital.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="file" name="app_logo" class="form-control" id="site-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site-name">Dark-mode Logo</label>
                                                        <span class="form-note">Choose a dark-mode logo</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="file" name="app_logodark" class="form-control" id="site-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site-name">Small Logo</label>
                                                        <span class="form-note">Choose a minimized sidebar logo</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="file" name="app_logosmall" class="form-control" id="site-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site-name">Favicon</label>
                                                        <span class="form-note">Specify the name of your hospital.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="file" name="app_favicon" class="form-control" id="site-name">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row mt-2 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site-copyright">Copyright</label>
                                                        <span class="form-note">Copyright information of your
                                                            hospital.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <textarea type="text" name="app_description" class="form-control" id="site-copyright"
                                                                >{{ setting('app_description') }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Allow Registration</label>
                                                        <span class="form-note">Enable or disable registration from
                                                            site.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <ul class="custom-control-group g-3 align-center flex-wrap">
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input" checked
                                                                    name="reg-public" id="reg-enable">
                                                                <label class="custom-control-label"
                                                                    for="reg-enable">Enable</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="reg-public" id="reg-disable">
                                                                <label class="custom-control-label"
                                                                    for="reg-disable">Disable</label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="custom-control custom-radio">
                                                                <input type="radio" class="custom-control-input"
                                                                    name="reg-public" id="reg-request">
                                                                <label class="custom-control-label" for="reg-request">On
                                                                    Request</label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row mt-2 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label">Main Site</label>
                                                        <span class="form-note">Specify the URL if your main website is
                                                            external.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="site-url"
                                                                value="https://www.softnio.com">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2 align-center">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-label" for="site-name"> Description</label>
                                                        <span class="form-note">Describe your hospital information.</span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7">
                                                    <div class="form-group">
                                                        <div class="form-control-wrap">
                                                            <div class="form-control-wrap">
                                                                <textarea class="form-control form-control no-resize" id="fv-message" name="fv-message" placeholder="Hello World!">
                                                 </textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-lg-7">
                                                    <div class="form-group mt-2">
                                                        <button type="submit"
                                                            class="btn btn-lg btn-primary">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div><!-- .nk-block-head -->
                                </div><!-- .card-inner -->
                                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
                                    data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                                    <div class="card-inner-group" data-simplebar>
                                        <div class="card-inner">
                                            <h3 class="nk-block-title page-title">Settings</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Here you can change and edit your needs</p>
                                            </div>
                                        </div><!-- .card-inner -->
                                        <div class="card-inner p-0">
                                            <ul class="link-list-menu">
                                                <li><a class="active" href="{{ route('admin.setting') }}"><em
                                                            class="icon ni ni-user-fill-c"></em><span>General</span></a>
                                                </li>
                                                <li><a href="{{ route('admin.setting.payment-gateway') }}"><em
                                                            class="icon ni ni-bell-fill"></em><span>Payment
                                                            Gateway</span></a></li>
                                                <li><a href="html/hospital/settings-email.html"><em
                                                            class="icon ni ni-lock-alt-fill"></em><span>E-mail</span></a>
                                                </li>
                                                <li><a href="html/hospital/settings-security.html"><em
                                                            class="icon ni ni-shield-star-fill"></em><span>Security</span></a>
                                                </li>
                                                <li><a href="html/hospital/settings-account-log.html"><em
                                                            class="icon ni ni-activity-round-fill"></em><span>Account
                                                            activity</span></a></li>
                                            </ul>
                                        </div><!-- .card-inner -->
                                    </div><!-- .card-inner-group -->
                                </div><!-- card-aside -->
                            </div><!-- card-aside-wrap -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
