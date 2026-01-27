<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // This gets all users from your database
        $users = User::all(); 
        
        // This sends the users to your admin view
        return view('admin.users.index', compact('users'));
    }
}