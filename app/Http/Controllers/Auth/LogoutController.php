<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LogoutController extends Controller
{
    public function __invoke()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }
}
