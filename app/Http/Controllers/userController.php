<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller
{
    public function userData()
    {
        $user =User::all();
       

       // Retrieve all users from the database
    return view('admin.user.index')->with('users', $user);
}
}