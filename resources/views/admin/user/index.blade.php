
@extends('admin.dashboard')
@section('content')
    <!-- resources/views/admin/user/index.blade.php -->

<!-- Assuming you have a master layout -->


    <h1>User List</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <!-- Add more cells as needed -->
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection



