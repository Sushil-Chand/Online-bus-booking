<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Booking System</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('bookings.index') }}">Bookings</a></li>
            <li><a href="{{ route('my-booking') }}">My Booking</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
        </ul>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
