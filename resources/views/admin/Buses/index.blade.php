@extends('admin.IncludeAdmin.main')
@section('title', 'buses')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Buses</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('buses') }}" class="btn btn-success mb-3">Create New Bus</a>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Bus Number</th>
                                <th>Plate Number</th>
                                <th>Type</th>
                                <th>Capacity</th>
                                <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buse as $bus)
                                <tr>
                                    <td>{{ $bus->bus_number }}</td>
                                    <td>{{ $bus->bus_plate_number }}</td>
                                    <td>{{ $bus->bus_type }}</td>
                                    <td>{{ $bus->capacity }}</td>
                                    <td>{{ $bus->user->name }}</td>
                                    <td>
                                        <form action="{{ route('buses.destroy', $bus->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this bus?')">Delete</button>
                                        </form>
                                        <a href="{{ route('buses.edit', $bus->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                        <a href="{{ route('buses.show', $bus->id) }}" class="btn btn-secondary btn-sm">Details</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection