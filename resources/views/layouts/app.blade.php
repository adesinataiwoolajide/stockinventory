<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inventory') }}</title>
    <link rel="stylesheet" href="{{asset('design/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('design/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('design/vendors/css/vendor.bundle.base.css')}}">

    <link rel="stylesheet" href="http://www.urbanui.com/"/>

    <link rel="stylesheet" href="{{asset('design/css/vertical-layout-light/style.css')}}">

    <link rel="shortcut icon" href="{{asset('design/images/inventory.jpg')}}" />
    <link rel="stylesheet" href="{{asset('design/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
    
</head>
<body class="sidebar-dark">
    <div class="">
        @yield('content')
    </div>
    
    <script src="{{asset('design/js/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('design/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{asset('design/js/off-canvas.js')}}"></script>
    <script src="{{asset('design/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('design/js/template.js')}}"></script>
    <script src="{{asset('design/js/settings.js')}}"></script>
    <script src="{{asset('design/js/todolist.js')}}"></script>
    <script src="{{asset('design/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('design/js/dashboard.js')}}"></script>

    <script src="{{asset('design/vendors/datatables.net/jquery.dataTables.js')}}"></script>
    <script src="{{asset('design/vendors/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="{{asset('design/js/data-table.js')}}"></script>
</body>
</html>
