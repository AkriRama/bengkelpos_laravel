<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index(){
        $user = User::all();
        return view('editprofile', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'username' => 'required|unique:users|max:255',
            'phone' => 'max:255',
            'address' => 'max:255',
        ]);

        $user = $request->input('username', 'default_username');
        $user->update($request->all());

        return redirect('profile')->with('status','Profile Updated Successfully');
    }
}
