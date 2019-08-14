<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Juan Rosas">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Unidos por Venezuela | @yield('title')</title>
  
  <!-- Favicon -->
  <link href="{{ asset('argon-dashboard-free/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('argon-dashboard-free/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('argon-dashboard-free/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('argon-dashboard-free/css/argon.css?v=1.0.0') }}" rel="stylesheet">

</head>

<body>
  <!-- Sidenav -->
  @include('layouts.navbar')
  <!-- Main content -->
  <div class="main-content">
    <!-- Top navbar -->
    @include('layouts.header')
    <!-- Page content -->
    <div id="app">
        @yield('content')
    </div>
    <!-- Footer -->
	@include('layouts.footer')

  </div>
	<!-- Scripts -->
  	
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('argon-dashboard-free/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('argon-dashboard-free/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('argon-dashboard-free/vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src=".{{ asset('argon-dashboard-free/vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <script src="{{ asset('argon-dashboard-free/js/argon.js?v=1.0.0') }}"></script>
      
      {{-- Vuejs --}}
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>