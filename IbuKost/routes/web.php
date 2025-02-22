<?php

use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('register');
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/register', 'register');
    Route::post('/login', 'login');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('register', function () {
    return view('register');
})->name('register');

// Route::get('login', function () {
//     return view('login');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('/kamar', function () {
    return view('kamar');
})->name('kamar');

Route::get('landing', function () {
    return view('landing');
})->name('landing');

