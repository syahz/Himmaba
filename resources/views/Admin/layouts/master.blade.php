<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Himmaba - @yield('title')</title>
    {{-- Style --}}
    @include('Admin.includes.style')

    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    
  </head>

  <body class="nav-fixed">
    {{-- Navbar --}}
    @include('Admin.includes.navbar')

    <div id="layoutSidenav">
      {{-- Sidebar --}}
      @include('Admin.includes.sidebar')
      {{-- Content --}}
      @yield('content')
    </div>
     
    {{-- Script --}}
    @include('Admin.includes.script')
  </body>
</html>
