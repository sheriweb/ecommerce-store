<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Inventory Store </title>
    <link rel="icon" type="image/x-icon" href="{{asset('admin-side/assets/img/favicon.ico')}}"/>
    <link href="{{asset('admin-side/assets/css/loader.css')}}" rel="stylesheet" type="text/css"/>
    <script src="{{asset('admin-side/assets/js/loader.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('admin-side/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin-side/assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin-side/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin-side/assets/css/dashboard/dash_1.css')}}" rel="stylesheet" type="text/css"/>

    <style>
        .sidebar-icon {
            width: 20px;
            height: 20px;
        }
    </style>
</head>
<body>

@include('admin-side.layout.loader')
@include('admin-side.layout.header')

<div class="main-container" id="container">

    @include('admin-side.layout.sidebar')

    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing">
                @yield('content')
            </div>
        </div>

        @include('admin-side.layout.footer')

    </div>
</div>

<script src="{{asset('admin-side/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('admin-side/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin-side/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-side/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin-side/assets/js/app.js')}}"></script>

<script>
    $(document).ready(function () {
        App.init();
    });
</script>

<script src="{{asset('admin-side/assets/js/custom.js')}}"></script>
<script src="{{asset('admin-side/assets/js/custom.js')}}"></script>
<script src="{{asset('admin-side/assets/js/dashboard/dash_1.js')}}"></script>

</body>
</html>