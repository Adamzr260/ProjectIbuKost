@extends('layouts.app')

@section('content')
<div class="register-container">
    <div class="register-box">
        <div class="logo-container">
            <img src="{{ asset('images/logo.jpg') }}" alt="IbuKost Logo">
        </div>
        <h2>Daftar</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="input-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <div class="input-group">
                <input type="password" name="password_confirmation" placeholder="Masukkan ulang password" required>
            </div>
            <button type="submit" class="register-button"><a href="{{ route('dashboard') }}">DAFTAR</a></button>
        </form>
        <p class="login-link">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>
@endsection
