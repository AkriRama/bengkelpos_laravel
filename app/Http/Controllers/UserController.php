<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function profile(Request $request)
    {
        
        return redirect('profile');
    }

    public function index()
    {
        $users = User::where('role_id',2)->get();
        return view('user', ['users' => $users]);
    }
}
