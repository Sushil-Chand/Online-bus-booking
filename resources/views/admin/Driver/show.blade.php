<!-- resources/views/drivers/show.blade.php -->

@extends('admin.Includeadmin.main')
@section('title', 'detail-driver')

@section('content')
    <div class="container">
        <h2>Driver Details</h2>

        <ul>
            <li><strong>Name:</strong> {{ $driver->name }}</li>
            <li><strong>Gender:</strong> {{ $driver->gender }}</li>
            <li><strong>License Number:</strong> {{ $driver->license_number }}</li>
            <li><strong>Contact Number:</strong> {{ $driver->contact_number }}</li>
            <li><strong>Status:</strong> {{ $driver->status }}</li>
            <!-- Add other fields here based on your model attributes -->
        </ul>

        <a href="{{ route('drivers.edit', $driver->id) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST" style="display:inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </div>
@endsection
