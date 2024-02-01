<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function home()
    {
        $users = User::all();
       // Retrieve all users from the database
    return view('admin.user.index', compact('users'));
}
}