<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\Admins\BusController;
use App\Http\Controllers\Admins\DriverController;
use App\Http\Controllers\Admins\OperatorController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route::get('/admin/dashboard', function () {  // admin route
//     return view('admin.dashboard');
// })->middleware(['auth:admin', 'verified'])->name('admin.dashboard');



// Route::get('/user-home', [userController::class, 'home'])->name('user.home');





Route::middleware(['auth:admin', 'verified'])->group(function () {
    // Routes that require both admin authentication and email verification
    
  
    
    // Add other admin-specific routes here...

    Route::get('/user-home', [userController::class, 'userData'])
        ->name('user.home');
        
        Route::get('/Buses', function () {
            return view('admin.Buses.index'); 
        })->name('buses');

        Route::get('/dashboard', function () {
            return view('admin.dashboard'); 
        })->name('main-dashboard');


        //driver route
        // routes/web.php


        // Route to display the list of drivers
        Route::get('/drivers', [DriverController::class, 'index'])->name('drivers.index');

        // Route to display the form for creating a new driver
        Route::get('/drivers/create', [DriverController::class, 'create'])->name('drivers.create');

        // Route to store a new driver in the database
        Route::POST('/drivers', [DriverController::class, 'store'])->name('drivers.store');

        // Route to display the details of a specific driver
        Route::get('/drivers/{driver}', [DriverController::class, 'show'])->name('drivers.show');

        // Route to display the form for editing a specific driver
        Route::get('/drivers/{driver}/edit', [DriverController::class, 'edit'])->name('drivers.edit');

        // Route to update a specific driver in the database
        Route::put('/drivers/{driver}', [DriverController::class, 'update'])->name('drivers.update');

        // Route to delete a specific driver from the database
        Route::delete('/drivers/{driver}', [DriverController::class, 'destroy'])->name('drivers.destroy');

        
        

        // Operator Routes
        Route::get('/operators', [OperatorController::class, 'index'])->name('operators.index');
        Route::get('/operators/create', [OperatorController::class, 'create'])->name('operators.create');
        Route::post('/operators/store', [OperatorController::class, 'store'])->name('operators.store');
        Route::get('/operators/{id}', [OperatorController::class, 'show'])->name('operators.show');
        Route::get('/operators/{id}/edit', [OperatorController::class, 'edit'])->name('operators.edit');
        Route::put('/operators/{id}', [OperatorController::class, 'update'])->name('operators.update');
        Route::delete('/operators/{id}', [OperatorController::class, 'destroy'])->name('operators.destroy');
    // Add other routes for regular users here...

    // Buses Routes

    // Buses Routes
        Route::get('/buses', [BusController::class, 'index'])->name('buses.index');
        Route::get('/buses/create', [BusController::class, 'create'])->name('buses.create');
        Route::post('/buses/store', [BusController::class, 'store'])->name('buses.store');
        Route::get('/buses/{id}', [BusController::class, 'show'])->name('buses.show');
        Route::get('/buses/{id}/edit', [BusController::class, 'edit'])->name('buses.edit');
        Route::put('/buses/{id}', [BusController::class, 'update'])->name('buses.update');
        Route::delete('/buses/{id}', [BusController::class, 'destroy'])->name('buses.destroy');
});

require __DIR__.'/adminauth.php';