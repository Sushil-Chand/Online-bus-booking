<!-- resources/views/drivers/edit.blade.php -->

@extends('admin.Includeadmin.main')
@section('title', 'edit-driver')

@section('content')
<br>
<br>
<div class="content-wrapper">
    <div class="content">
    <div class="container">
        <h2>Edit Driver</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('drivers.update', $driver->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="license_number">License Number:</label>
                <input type="text" name="license_number" id="license_number" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" name="contact_number" id="contact_number" class="form-control" required>
            </div>

          
            <!-- Add more fields as needed -->

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Driver</button>
            </div>
            <!-- Add other fields here based on your model attributes -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
