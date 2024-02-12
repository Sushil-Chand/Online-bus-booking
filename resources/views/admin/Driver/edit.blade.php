<!-- resources/views/drivers/edit.blade.php -->

@extends('admin.Includeadmin.main')
@section('title', 'edit-driver')

@section('content')
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
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $driver->name }}" required>
            </div>
            <!-- Add other fields here based on your model attributes -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
