<?php

use Illuminate\Container\Attributes\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->functions([
    Route::get('/register', 'showRegister')->name('register'),
    Route::get('/login', 'showLogin')->name('login'),
    Route::post('/register', 'register'),
    Route::post('/login', 'login'),
    Route::get('/logout', 'logout')->name('logout'),
]);

Route::get('register', function () {
    return view('register');
});
Route::get('login', function () {
    return view('login');
});
Route::get('dashboard', function () {
    return view('dashboard');
});
Route::get('landing_page', function () {
    return view('landing_page');
});
