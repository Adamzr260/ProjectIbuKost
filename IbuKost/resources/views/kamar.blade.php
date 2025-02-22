<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard IbuKost</title>
    <!-- Import Boxicons CDN -->
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forkmr.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <img src="{{ asset('images/LOGO.jpg') }}" alt="IbuKost">
            </div>
            <nav>
                <ul>
                    <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">Beranda</a>
                    </li>
                    <li class="{{ request()->is('kamar') ? 'active' : '' }}">
                        <a href="{{ route('kamar') }}">Kamar</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Konten utama -->
        <main class="content">
            <header>
                <h1>Selamat datang anak Kos!!</h1>
                <i class='bx bx-user-circle'></i>
            </header>

            <section class="info">
                <!-- Galeri Foto -->
                <h2>Galeri Kost ></h2>
                <div class="gallery-container">
                    <div class="gallery">
                        <img src="{{ asset('images/kost1.jpg') }}" alt="Kost 1">
                        <img src="{{ asset('images/kost2.jpg') }}" alt="Kost 2">
                        <img src="{{ asset('images/kost3.jpg') }}" alt="Kost 3">
                        <img src="{{ asset('images/kost4.jpg') }}" alt="Kost 4">
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
