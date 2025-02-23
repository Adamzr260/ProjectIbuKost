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

            <!-- Section utama untuk daftar kamar -->
            <section class="daftar-kamar">
                <div class="kamar-container">
                    <!-- Tampilkan 20 kotak -->
                    @for($i = 1; $i <= 20; $i++)
                        <!-- Perhatikan: tambahkan data-index untuk penanda -->
                        <div class="kamar-box" data-index="{{ $i - 1 }}" onclick="openPopup({{ $i - 1 }})">
                            <!-- Tulisan default "nomor kamar" -->
                            <span id="kamar-label-{{ $i - 1 }}">Kamar Kosong</span>
                        </div>
                    @endfor
                </div>
            </section>
        </main>
    </div>

 <!-- Popup Form -->
 <div id="popup-form" class="popup-form">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2>Form Kamar</h2>
            <p id="kamar-info">Kamar #</p>

            <form>
                <label for="nama">Nama Penghuni</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama...">

                <label for="telp">No. Telp</label>
                <input type="text" id="telp" name="telp" placeholder="Masukkan nomor telepon...">

                <label for="tagihan">Tagihan</label>
                <input type="text" id="tagihan" name="tagihan" placeholder="Masukkan nominal tagihan...">

                <label for="deskripsi">Deskripsi Tagihan</label>
                <textarea id="deskripsi" name="deskripsi" rows="3" placeholder="Tambahan keterangan..."></textarea>

                <label for="tanggal-sewa">Tanggal Sewa</label>
                <input type="date" id="tanggal-sewa" name="tanggal-sewa">

                <!-- Pesan error -->
                <p id="form-error" class="error-message" style="display: none; color: red;"></p>

                <!-- Tombol -->
                <button type="submit" onclick="saveData(event)">Simpan</button>
                <button type="button" onclick="deleteData()">Hapus</button>
            </form>
        </div>
    </div>

    <!-- Memanggil file JavaScript terpisah -->
    <script src="{{ asset('js/kamar.js') }}"></script>
</body>
</html>
