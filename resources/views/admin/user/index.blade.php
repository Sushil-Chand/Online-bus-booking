<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

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
        </div>   
    </body>
    
</body>
</html>