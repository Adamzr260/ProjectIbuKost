@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/fordb.css') }}">
<div class="container">
    <div class="sidebar">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="IbuKost Logo">
            <span class="brand">IbuKost</span>
        </div>
        <ul class="menu">
            <li><a href="{{ route('dashboard') }}">Beranda</a></li>
            <li class="active"><a href="{{ route('kamar') }}">Kamar</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="header">
            <span class="welcome">Selamat datang anak Kos!!</span>
            <div class="user-icon">
                <i class="fas fa-user-circle"></i>
            </div>
        </div>
        <div class="content">
            <h2>Daftar Kamar</h2>
            <div class="room-list">
                <div class="room">
                    <h3>Kamar 101</h3>
                    <p>Status: <span class="available">Tersedia</span></p>
                </div>
                <div class="room">
                    <h3>Kamar 102</h3>
                    <p>Status: <span class="occupied">Terisi</span></p>
                </div>
                <div class="room">
                    <h3>Kamar 103</h3>
                    <p>Status: <span class="available">Tersedia</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
