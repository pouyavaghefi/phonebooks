<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Panel\PanelController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/panel', [PanelController::class,'index'])->name('panel.index');
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class,'showLogin'])->name('auth.login');
    Route::post('/login', [LoginController::class,'doLogin']);

    Route::get('/register', [RegisterController::class,'showRegister'])->name('auth.register');
    Route::post('/register', [RegisterController::class,'doRegister']);
});
