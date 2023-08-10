<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Alert;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('auth.signin');
    }

    public function doLogin(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect()->route('panel.index')->withSuccess('ورود با موفقیت انجام شد');
        } else {
            Alert::error('خطا', 'ورود ناموفق بود. لطفا مجددا تلاش کنید');
            return redirect()->route('auth.login');
        }
    }
}
