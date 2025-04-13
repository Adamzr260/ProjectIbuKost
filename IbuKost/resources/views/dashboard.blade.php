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
        <x-sidebar></x-sidebar>

        <!-- Konten utama -->
        <main class="content" style="overflow: auto;">
            <header class="main-header">
                <h1>Selamat Datang {{ $user?->name ?? 'Anak Kos' }}</h1>
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

           <!-- Bagian Info -->
            <section class="info">

            <!-- 1. Tentang Kost -->
            <div class="section">
                <h2>Tentang Kost ></h2>
                <div class="box big tentang-kost">
                    <p><strong>Nama Kost:</strong> Kost Bu Tiara</p>
                    <p><strong>Alamat:</strong> Jl. Melati No. 10, Jakarta</p>
                    <p><strong>Pemilik:</strong> Bu Tiara</p>
                    <p><strong>Jumlah Kamar:</strong> 20</p>
                    <p><strong>Fasilitas:</strong> Wi-Fi, Dapur Bersama, Parkir Motor, CCTV, Air PAM, Listrik Prabayar</p>
                    <p><strong>Harga Sewa:</strong> Rp1.500.000 - Rp2.500.000 per bulan</p>
                </div>
            </div>

            <!-- 2. Aturan -->
            <div class="section">
                <h2>Aturan ></h2>
                <div class="box medium aturan-kost">
                    <p><strong>Peraturan Kost Bu Tiara 🏠</strong></p>
                    <p><strong>1. Umum</strong></p>
                    <ul>
                        <li>✅ Kost ini khusus untuk pria/wanita/campur (sesuai kebijakan pemilik).</li>
                        <li>✅ Maksimal 2 orang per kamar (jika berbagi kamar, dikenakan biaya tambahan).</li>
                        <li>✅ Penghuni wajib membayar sewa tepat waktu (paling lambat tanggal 5 setiap bulan).</li>
                        <li>✅ Tamu hanya boleh berkunjung sampai pukul 22.00 WIB.</li>
                        <li>✅ Tidak diperbolehkan membawa hewan peliharaan ke dalam kost.</li>
                    </ul>
                    <p><strong>2. Keamanan &amp; Kenyamanan</strong></p>
                    <ul>
                        <li>🔒 Penghuni wajib menjaga keamanan dengan mengunci pintu saat keluar.</li>
                        <li>🔒 Tidak diperbolehkan membawa, menyimpan, atau mengonsumsi alkohol &amp; narkoba.</li>
                        <li>🔒 Dilarang membuat kegaduhan, seperti musik keras atau berteriak, terutama setelah pukul 22.00 WIB.</li>
                        <li>🔒 Parkir hanya untuk penghuni kost, dan motor harus diparkir dengan rapi di area yang disediakan.</li>
                    </ul>
                    <p><strong>3. Kebersihan</strong></p>
                    <ul>
                        <li>🧹 Setiap penghuni wajib menjaga kebersihan kamar dan area bersama.</li>
                        <li>🧹 Sampah harus dibuang ke tempat sampah yang disediakan.</li>
                        <li>🧹 Tidak diperbolehkan memasak di dalam kamar (gunakan dapur bersama).</li>
                    </ul>
                    <p><strong>4. Fasilitas &amp; Kewajiban Penghuni</strong></p>
                    <ul>
                        <li>💡 Listrik menggunakan sistem prabayar/token (ditanggung masing-masing penghuni).</li>
                        <li>💡 Penghuni harus bertanggung jawab atas barang pribadi masing-masing.</li>
                        <li>💡 Kerusakan pada fasilitas yang disebabkan oleh penghuni harus diperbaiki atau diganti.</li>
                    </ul>
                    <p><strong>5. Sanksi &amp; Pelanggaran</strong></p>
                    <ul>
                        <li>⚠️ Peringatan pertama diberikan secara lisan.</li>
                        <li>⚠️ Jika melanggar lebih dari 2 kali, penghuni bisa dikenakan denda atau dikeluarkan dari kost.</li>
                        <li>⚠️ Pelanggaran berat seperti membawa narkoba, tindakan kriminal, atau merusak fasilitas dapat mengakibatkan pengusiran tanpa pengembalian uang sewa.</li>
                    </ul>
                </div>
            </div>


            <!-- 3. Kondisi Kost -->
            <div class="section">
                <h2>Kondisi Kost ></h2>
                <div class="box-grid">
                    <!-- Isi foto kondisi kost berjejer -->
                    <div class="box small">
                        <img src="{{ asset('images/Kos-1.jpeg')}}" alt="Kondisi 1">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/Kamar-kost-minimalis-1.jpg')}}" alt="Kondisi 2">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/fasilK1.png') }}" alt="Kondisi 3">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/fasilK2.png') }}" alt="Kondisi 4">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/fasilK1.png') }}" alt="Kondisi 5">
                    </div>
                </div>
            </div>

            <!-- 4. Fasilitas Kamar (1) -->
            <div class="section">
                <h2>Fasilitas Kost ></h2>
                <div class="box-grid">
                    <!-- Grid 3 kolom x 2 baris (misal) -->
                    <div class="box small">
                        <img src="{{ asset('images/fasilK1.png') }}" alt="Fasilitas 1">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/fasilK2.png') }}" alt="Fasilitas 2">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/fasilK1.png') }}" alt="Fasilitas 3">
                        <img src="{{ asset('images/Kamar-4.webp')}}" alt="Fasilitas 1">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/kamar-1.webp')}}" alt="Fasilitas 2">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/Kamar-Kost-Estetik.jpg')}}" alt="Fasilitas 3">
                    </div>
                </div>
            </div>

            <!-- 5. Fasilitas Kamar (2) -->
            <div class="section">
                <h2>Fasilitas Kamar ></h2>
                <div class="box-grid">
                    <!-- Grid 3 kolom x 2 baris (misal) -->
                    <div class="box small">
                        <img src="{{ asset('images/fasilK2.png') }}" alt="Fasilitas 4">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/fasilK2.png') }}" alt="Fasilitas 5">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/fasilK1.png') }}" alt="Fasilitas 6">
                        <img src="{{ asset('images/kamar-mandi.jpg')}}" alt="Fasilitas 4">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/jemuran-kost.jpg')}}" alt="Fasilitas 5">
                    </div>
                    <div class="box small">
                        <img src="{{ asset('images/Tempat-Parkir-Motor.jpg')}}" alt="Fasilitas 6">
                    </div>
                </div>
            </div>

        </section>
        </main>
    </div>

        <!-- Memanggil file JavaScript terpisah -->
        <script src="{{ asset('js/dashboard.js') }}"></script>
</body>
</html>
