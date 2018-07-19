<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <title>
        Mojtaba Rakhisi
    </title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/panel/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/panel/img/favicon.png') }}">
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons"/>
    <link rel="stylesheet" href="{{ asset('node_modules/font-awesome/css/font-awesome.min.css') }}">
    <!-- CSS Files -->
    <link href="{{ asset('assets/panel/css/material-dashboard.css?v=2.1.0') }}" rel="stylesheet"/>
    <link href="{{ asset('node_modules/select2/dist/css/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('node_modules/fontawesome-iconpicker/dist/css/fontawesome-iconpicker.min.css') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('assets/panel/demo/demo.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/panel/css/styles.css') }}" rel="stylesheet"/>

    @stack('styles')
</head>

<body class="">
<div class="wrapper ">
    @include('panel.layouts.sidebar')
    <div class="main-panel">
        @include('panel.layouts.navbar')
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
        @include('panel.layouts.footer')
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{ asset('assets/panel/js/core/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/panel/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/panel/js/core/bootstrap-material-design.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets/panel/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('node_modules/select2/dist/js/select2.min.js') }}"></script>
<script src="{{ asset('node_modules/fontawesome-iconpicker/dist/js/fontawesome-iconpicker.min.js') }}"></script>
<script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
<script src="{{ asset('assets/panel/js/icons.js') }}"></script>
<script src="{{ asset('assets/panel/js/icons.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="{{ asset('assets/panel/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('assets/panel/js/plugins/bootstrap-notify.js') }}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('assets/panel/js/material-dashboard.min.js?v=2.1.0') }}" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('assets/panel/demo/demo.js') }}"></script>
<script src="{{ asset('assets/panel/js/scripts.js') }}"></script>
<script>
    $(document).ready(function () {
        // Javascript method's body can be found in assets/js/demos.js
        md.initDashboardPageCharts();

    });
</script>
</body>

</html>