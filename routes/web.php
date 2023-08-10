<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\PhonebookController;
use App\Http\Controllers\Panel\ContactsController;

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

Route::middleware(['auth'])->prefix('panel')->name('panel.')->group(function () {
    Route::get('/', [PanelController::class, 'index'])->name('index');

    Route::prefix('phonebooks')->name('phonebooks.')->group(function () {
        Route::get('/', [PhonebookController::class, 'index'])->name('all');

        Route::get('/add', [PhonebookController::class, 'add'])->name('add');
        Route::post('/add', [PhonebookController::class, 'doAdd']);

        Route::get('/edit/{phonebook}', [PhonebookController::class, 'edit'])->name('edit');
        Route::patch('/edit/{phonebook}', [PhonebookController::class, 'doEdit']);

        Route::delete('/delete/{phonebook}', [PhonebookController::class, 'destroy'])->name('delete');

        Route::get('/show/{phonebook}', [PhonebookController::class, 'show'])->name('show');

        Route::post('/add-category', [PhonebookController::class, 'addCategory'])->name('add-category');
    });

    Route::prefix('contacts')->name('contacts.')->group(function () {
        Route::get('/', [ContactsController::class, 'index'])->name('all');

        Route::get('/show/{contact}', [ContactsController::class, 'show'])->name('show');

        Route::get('/add/{phonebook}', [ContactsController::class, 'add'])->name('add');
        Route::post('/add/{phonebook}', [ContactsController::class, 'doAdd']);

        Route::get('/edit/{contact}', [ContactsController::class, 'edit'])->name('edit');
        Route::patch('/edit/{contact}', [ContactsController::class, 'doEdit']);

        Route::delete('/delete/{contact}', [ContactsController::class, 'destroy'])->name('delete');
    });
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [LoginController::class,'showLogin'])->name('auth.login');
    Route::post('/login', [LoginController::class,'doLogin']);

    Route::get('/register', [RegisterController::class,'showRegister'])->name('auth.register');
    Route::post('/register', [RegisterController::class,'doRegister']);
});
