<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
use Alert;
use Illuminate\Support\Facades\Hash;

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
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($data['password'], $user->password)) {
            auth()->loginUsingId($user->id);
            return redirect()->route('panel.index')->withSuccess('ورود با موفقیت انجام شد');
        }else{
            Alert::error('خطا', 'ورود ناموفق بود. لطفا مجددا تلاش کنید');
            return redirect()->route('auth.login');
        }
    }
}
