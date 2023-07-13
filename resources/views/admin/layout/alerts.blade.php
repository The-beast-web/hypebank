@if (session()->has('success') || session()->has('danger'))
    <div class="nk-block">
        <div class="nk-content">
            <div class="gy-4" id="alert-con" style="margin-top: 4%">
                @if (session()->has('success'))
                    <div class="example-alert">
                        <div class="alert alert-success alert-icon">
                            <em class="icon ni ni-alert-circle"></em> {{ session()->get('success') }}
                        </div>
                    </div>
                @endif

                @if (session()->has('danger'))
                    <div class="example-alert" id="alert">
                        <div class="alert alert-danger alert-icon">
                            <em class="icon ni ni-alert-circle"></em> {{ session()->get('danger') }}
                        </div>
                    </div>
                @endif

                @if (session()->has('warning'))
                    <div class="example-alert" id="alert">
                        <div class="alert alert-warning alert-icon">
                            <em class="icon ni ni-alert-circle"></em> {{ session()->get('warning') }}
                        </div>
                    </div>
                @endif

                @if (session()->has('info'))
                    <div class="example-alert" id="alert">
                        <div class="alert alert-info alert-icon">
                            <em class="icon ni ni-alert-circle"></em> {{ session()->get('info') }}
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>

@endif
