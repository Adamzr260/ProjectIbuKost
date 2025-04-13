<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KamarController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('register');
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/register', 'register')->name('register.post');
    Route::post('/login', 'login')->name('login.post');
    Route::get('/logout', 'logout')->name('logout');
});

Route::get('register', function () {
    return view('register');
})->name('register');

Route::get('/dashboard', function () {
    $user = Auth::user();
    return view('dashboard', [
        'user' => $user
    ]);
})->name('dashboard');

Route::controller(KamarController::class)->group(function () {
    Route::post('/kamar', 'store')->name('kamar.store');
    Route::get('/kamar', 'showKamar')->name('kamar');
});

Route::get('landing', function () {
    return view('landing');
})->name('landing');

Route::get('riwayat', function () {
    $user = Auth::user();
    return view('riwayat', [
        'user' => $user
    ]);
})->name('riwayat');
