<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page | IbuKost</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

    <div class="landing-container">
        <!-- Header -->
        <x-header></x-header>

       <div>
        <h1>Mau Ngekost Di IbuKost?</h1>
        <p>Langsung sewa di IbuKost dan dapatkan kenyamanannya!</p>
       </div>

        <div class="address">
            <p>JLN. PERUMAHAN ASTON VILLA BLOK S NO 64 Mendalo Darat, Kec. Jambi Luar Kota, Kabupaten Muaro Jambi, Jambi.</p>
            
        </div>

        
        <div class="facilities">
            <span>Lokasi Strategis</span>
            <span>Full WIFI 5G</span>
            <span>Semua sisi terpantau CCTV</span>
            <span>Full fasilitas tersedia</span>
        </div>

        <!-- Galeri -->
        <div class="gallery">
            
            <img src="{{ asset('images/kost2.jpg') }}" alt="Kost 1">
            <img src="{{ asset('images/kost.webp') }}" alt="Kost 2">
            <img src="{{ asset('images/kamar.webp') }}" alt="Kamar Kost">
            <img src="{{ asset('images/wc.jpg') }}" alt="Kamar Mandi">
            <img src="{{ asset('images/wc.jpg') }}" alt="Kamar Mandi">
            <img src="{{ asset('images/wc.jpg') }}" alt="Kamar Mandi">
         
    </div>


    <!-- Popup Login -->
    <div class="popup" id="popup">
        <div class="popup-content">
            <span class="close-btn" onclick="closePopup()">&times;</span>
            <h2>Masuk ke IbuKost</h2>
            <p>Saya ingin masuk sebagai</p>
            <a href="{{ route('login') }}" style="text-decoration: none;">
                <button class="role-btn">Penyewa Kost</button>
            </a>
            <a href="{{ route('login') }}" style="text-decoration: none;">
                <button class="role-btn">Pemilik Kost</button>
            </a>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>