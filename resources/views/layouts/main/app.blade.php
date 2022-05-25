<!doctype html>
<html lang="{{ str_replace('', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Title -->
    <title>Laravel</title>
    <!-- Style -->
    @include('layouts.shared.style')

</head>
    <body class="hold-transition sidebar-mini">
        <!-- Wrapper -->
        <div id="app" class="wrapper">

            <!-- sidebar -->
            @yield('sidebar')

            <!-- main pages -->
            @yield('content')

            
        </div> 

        <!-- script -->
        @include('layouts.shared.script')
    </body>
</html>