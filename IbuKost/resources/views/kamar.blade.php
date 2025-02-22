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

        <!-- Section utama untuk daftar kamar -->
        <section class="daftar-kamar">
                <div class="kamar-container">
                    <!-- Misalnya kita tampilkan 20 kotak -->
                    @for($i = 1; $i <= 20; $i++)
                        <div class="kamar-box">
                            <span>nomor kamar</span>
                        </div>
                    @endfor
                </div>
            </section>
        </main>
    </div>
</body>
</html>
