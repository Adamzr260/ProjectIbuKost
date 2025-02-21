<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard IbuKost</title>
    <!-- Memuat file CSS eksternal -->
    <link rel="stylesheet" href="{{ asset('css/fordb.css') }}">
</head>
<body>
    <div class="container">
        <!-- Sidebar untuk navigasi -->
        <aside class="sidebar">
            <div class="logo">
                <!-- Logo IbuKost -->
                <img src="{{ asset('images/logo.png') }}" alt="IbuKost">
                <span>IbuKost</span>
            </div>
            <nav>
            <ul>
                <!-- Menu navigasi dengan highlight pada halaman aktif -->
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
                <!-- Header dengan ucapan selamat datang dan ikon profil -->
                <h1>Selamat datang anak Kos!!</h1>
                <div class="profile-icon">&#128100;</div>
            </header>
            
            <section class="info">
                <!-- Bagian Tentang Kost -->
                <div class="section">
                    <h2>Tenang Kost ></h2>
                    <div class="box"></div>
                </div>
                
                <!-- Bagian Aturan -->
                <div class="section">
                    <h2>Aturan ></h2>
                    <div class="box small"></div>
                </div>
                
                <!-- Bagian Kondisi Kost dengan beberapa kotak kecil -->
                <div class="section">
                    <h2>Kondisi Kost ></h2>
                    <div class="box small-grid">
                        <div class="small"></div>
                        <div class="small"></div>
                        <div class="small"></div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
