<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Alert;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return view('auth.signup');
    }

    public function doRegister(Request $request)
    {
        $data = $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::create([
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'email' => $data['email'],
            'email_verified_at' => now(),
            'password' => bcrypt($data['password']),
        ]);

        Alert::success('Success', 'حساب شما با موفقیت ساخته شد');

        return redirect()->route('panel.index');
    }
}
