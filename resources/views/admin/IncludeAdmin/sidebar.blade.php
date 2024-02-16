
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <br>
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="dist/img/busphoto.jpg" alt="admin online system Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Admin-System</span>
    </a>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('main-dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('buses') }}" class="nav-link">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                            Buses
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('user.home') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            User
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('drivers.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                          Driver
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('operators.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-bus"></i>
                        <p>
                         Operator
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                        Widgets
                       
                      </p>
                    </a>
                  </li>

                
                {{-- <div class="text-center mt-auto p-3">
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf
                      <button type="submit" class="btn btn-danger" style="width:200px;">Logout</button>
                    </form>
                  </div> --}}

                 
                
            </ul>
        </nav>

        
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


