{{-- resources/views/admin/dashboard.blade.php --}}

{{-- @extends('layouts.admin') Assuming you have a master layout for admin --}}

@section('content')
Hello
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('admin.routes') }}"> --}}
                                Routes
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('admin.buses.index') }}"> --}}
                                Bus
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('admin.users') }}"> --}}
                                User
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('admin.manage.booking') }}"> --}}
                                Manage Booking
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('admin.seats') }}"> --}}
                                Seat
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('admin.feedback') }}"> --}}
                                Feedback
                            </a>
                        </li>
                        <li class="nav-item">
                            {{-- <a class="nav-link" href="{{ route('admin.add.user') }}"> --}}
                                Add New User
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>
                <!-- Your dashboard content goes here -->
            </main>
        </div>
    </div>
@endsection
