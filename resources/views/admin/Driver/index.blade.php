<!-- resources/views/drivers/index.blade.php -->

@extends('admin.Includeadmin.main')
@section('title', 'driver')

@section('content')
<br>
<br>
<div class="content-wrapper">
    <div class="content">
    <div class="container">
        <h2>Drivers</h2>
        <a href="{{ route('drivers.create') }}" class="btn btn-primary">Add Driver</a>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>License Number</th>
                    <th>Contact Number</th>
             
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->id }}</td>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->gender }}</td>
                        <td>{{ $driver->license_number }}</td>
                        <td>{{ $driver->contact_number }}</td>
                        <td>
                            <a href="{{ route('drivers.show', $driver->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
