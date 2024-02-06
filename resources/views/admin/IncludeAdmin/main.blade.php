<!DOCTYPE html>
<html lang="en">

@include('admin.IncludeAdmin.header')

      <body class="hold-transition sidebar-mini layout-fixed">
         
            <!-- Preloader -->
            <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/busphoto" alt="AdminLTELogo" height="60" width="60">
            </div>

                  {{-- navbar --}}
                  @include('admin.IncludeAdmin.navbar')

                    {{-- Main sidebar container --}}
                    @include('admin.IncludeAdmin.sidebar')

                    
                    <div class="content">
                        @yield('content')
                    </div>

                    {{-- footer--}}
                    @include('admin.IncludeAdmin.footer')

                    {{-- Script --}}
                  @include('admin.IncludeAdmin.script')
                </div>
      </body>
</html>
