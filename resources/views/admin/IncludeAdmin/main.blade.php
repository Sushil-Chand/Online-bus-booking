<!DOCTYPE html>
<html lang="en">

@include('admin.IncludeAdmin.header')
<body class="hold-transition sidebar-mini layout-fixed">
                        <div class="wrapper">

  
  @include('admin.IncludeAdmin.navbar')

  @include('admin.IncludeAdmin.sidebar')

    <!-- Main content -->
    <section class="content">
        @yield('content')
    </section>
    <!-- /.content -->
 
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024 <a href="#">Sushil Chand</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  

  @include('admin.IncludeAdmin.script')
</div>
<!-- ./wrapper -->


</body>
</html>