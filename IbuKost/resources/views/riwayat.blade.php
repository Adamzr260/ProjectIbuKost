<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard IbuKost</title>
    <!-- Import Boxicons CDN -->
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/forrtt.css') }}">
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
                    <li class="{{ request()->is('riwayat') ? 'active' : '' }}">
                        <a href="{{ route('riwayat') }}">Riwayat Tagihan Tahunan</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <!-- Konten utama -->
        <main class="content">
            <header>
                <h1>Selamat datang anak Kos!!</h1>
                <!-- Ikon user -->
                <i class='bx bx-user-circle' id="user-icon"></i>

                <!-- Popup kecil -->
                <div id="user-popup" class="user-popup">
                    <p>Apakah anda ingin keluar?</p>
                    <div class="popup-buttons">
                        <button type="button" class="btn-tidak" onclick="closeUserPopup()">Tidak</button>
                        <button type="button" class="btn-ya" onclick="goToLanding()"><a href="{{ route('landing') }}">Ya</a></button>
                    </div>
                </div>
            </header>

                        <!-- Tabel Riwayat Tagihan Tahunan -->
            <section class="riwayat-container">
                <table class="riwayat-table">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Pendapatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2023</td>
                            <td>100.000.000</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
        <!-- Memanggil file JavaScript terpisah -->
        <script src="{{ asset('js/ritata.js') }}"></script>
</body>
</html>