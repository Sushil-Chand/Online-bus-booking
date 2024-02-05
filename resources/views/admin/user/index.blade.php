
    @extends('admin.dashboard')
   
    
    @section('content')
    <div class="container mt-4">
        <h1 class="text-center mb-4">User List</h1>
    
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-bordered table-fluid">
                    <thead>
                        
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <!-- Add more columns as needed -->
                        </tr>
                    </thead>      <tr>
                  
                    <tbody>
                    
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <!-- Add more cells as needed -->
                            </tr>
                            <tr style="border-bottom: 2px solid #200202;"></tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
