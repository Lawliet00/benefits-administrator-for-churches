<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Juan Rosas">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Unidos por Venezuela | @yield('title')</title>
  
  @include('layouts.link')
</head>

<body>
  <!-- Sidenav -->
  @include('layouts.navbar')
  <!-- Main content -->
  <div class="main-content" id="app">
    <!-- Top navbar -->
    @include('layouts.header')
    <!-- Page content -->
     @yield('content')
    <!-- Footer -->
	@include('layouts.footer')

    
  </div>
	<!-- Scripts -->
  	@include('layouts.script')
</body>

</html>