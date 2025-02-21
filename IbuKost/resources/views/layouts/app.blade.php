<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IbuKost</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <!-- <div class="sidebar">
        <ul>
            <li><a href="{{ route('dashboard') }}">Beranda</a></li>
            <li><a href="{{ route('kamar') }}">Kamar</a></li>
        </ul>
    </div> -->
    
    <div class="main-content">
        @yield('content') <!-- Bagian ini akan diisi oleh halaman lain -->
    </div>
</body>
</html>
