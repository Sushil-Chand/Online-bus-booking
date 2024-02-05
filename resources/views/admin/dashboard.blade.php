<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>online bus booking  Dashboard</title>

 @include('admin.IncludeAdmin.header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/busphoto" alt="AdminLTELogo" height="60" width="60">
    <h3>Sushil</h3>
  </div>

  @include('admin.IncludeAdmin.navbar')

  
  @include('admin.IncludeAdmin.main')
  <!-- /.content-wrapper -->

  @yield('content')
  @include('admin.IncludeAdmin.footer')

  
</div>
<!-- ./wrapper -->
@include('admin.IncludeAdmin.script')
</body>
</html>
