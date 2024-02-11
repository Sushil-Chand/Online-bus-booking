<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\Admins\BusController;

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
    
    // Add other routes for regular users here...
});

require __DIR__.'/adminauth.php';