@extends('layouts.app')

@section('content')
<div class="register-container">
<img src="{{ asset('images/logo.jpg') }}" alt="IbuKost Logo">
    <div class="register-box">


        <form method="GET" action="{{ route('dashboard') }}">
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
            <button type="submit" class="register-button">DAFTAR</a></button>
        </form>
        <p class="login-link">Sudah punya akun? <a href="{{ route('login') }}">Login</a></p>
    </div>
</div>
@endsection
