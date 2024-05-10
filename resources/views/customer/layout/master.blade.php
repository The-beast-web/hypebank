<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    {!! SEO::generate() !!}
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/myfavicon.png') }}">
    <!-- Page Title  -->
    
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css?ver=3.1.2') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=3.1.2') }}">
    <style>
    .lin:hover{border: #6576FF 1px solid;}
    .bck:hover{color: #6576FF;}
</style>
</head>

<body class="nk-body bg-lighter npc-general has-sidebar " style="margin: 10px;">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('customer.layout.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('customer.layout.topbar')
                <!-- main header @e -->
                @yield('content')
                <!-- content @e -->
                <!-- footer @s -->
                @include('customer.layout.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('assets/js/bundle.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('assets/js/scripts.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('assets/js/charts/chart-ecommerce.js?ver=3.1.2') }}"></script>
    <script src="{{ asset('assets/js/charts/chart-crypto.js?ver=3.1.2') }}"></script>
    <script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('script')
</body>

</html>