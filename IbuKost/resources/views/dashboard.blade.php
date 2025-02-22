<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard IbuKost</title>
    <!-- Import Boxicons CDN -->
    <link href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/fordb.css') }}">
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

           <!-- Bagian Info -->
            <section class="info">

            <!-- 1. Tentang Kost -->
            <div class="section">
                <h2>Tentang Kost ></h2>
                <div class="box big">
                    <!-- Gambar dummy / link palsu -->
                    <img src="https://via.placeholder.com/600x200?text=Foto+Tentang+Kost" alt="Tentang Kost">
                </div>
            </div>

            <!-- 2. Aturan -->
            <div class="section">
                <h2>Aturan ></h2>
                <div class="box medium">
                    <!-- Gambar dummy / link palsu -->
                    <img src="https://via.placeholder.com/600x80?text=Foto+Aturan+Kost" alt="Aturan">
                </div>
            </div>

            <!-- 3. Kondisi Kost -->
            <div class="section">
                <h2>Kondisi Kost ></h2>
                <div class="box-grid">
                    <!-- Isi foto kondisi kost berjejer -->
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Kondisi+1" alt="Kondisi 1">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Kondisi+2" alt="Kondisi 2">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Kondisi+3" alt="Kondisi 3">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Kondisi+4" alt="Kondisi 4">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Kondisi+5" alt="Kondisi 5">
                    </div>
                </div>
            </div>

            <!-- 4. Fasilitas Kamar (1) -->
            <div class="section">
                <h2>Fasilitas Kamar ></h2>
                <div class="box-grid">
                    <!-- Grid 3 kolom x 2 baris (misal) -->
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Fasilitas+1" alt="Fasilitas 1">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Fasilitas+2" alt="Fasilitas 2">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Fasilitas+3" alt="Fasilitas 3">
                    </div>
                </div>
            </div>

            <!-- 5. Fasilitas Kamar (2) -->
            <div class="section">
                <h2>Fasilitas Kamar ></h2>
                <div class="box-grid">
                    <!-- Grid 3 kolom x 2 baris (misal) -->
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Fasilitas+4" alt="Fasilitas 4">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Fasilitas+5" alt="Fasilitas 5">
                    </div>
                    <div class="box small">
                        <img src="https://via.placeholder.com/150x100?text=Fasilitas+6" alt="Fasilitas 6">
                    </div>
                </div>
            </div>

        </section>
        </main>
    </div>
</body>
</html>
