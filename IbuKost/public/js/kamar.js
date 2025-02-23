const userIcon = document.getElementById('user-icon');
const userPopup = document.getElementById('user-popup');

// Klik ikon => toggle popup
userIcon.addEventListener('click', () => {
    userPopup.classList.toggle('show');
});

// Tutup popup jika klik di luar
document.addEventListener('click', (e) => {
    if (!userPopup.contains(e.target) && e.target !== userIcon) {
        userPopup.classList.remove('show');
    }
});

// Array untuk menyimpan data penghuni kamar secara sederhana (tanpa database)
let kamarData = new Array(20).fill(null); 
// Misalnya 20 kamar, setiap index menampung data penghuninya. null artinya belum diisi.

let currentIndex = null; // Menyimpan index kamar yang sedang di-edit

// Tombol "Tidak" => tutup popup
function closeUserPopup() {
    userPopup.classList.remove('show');
}

// Tombol "Ya" => ke landing
function goToLanding() {
    window.location.href = "{{ route('landing') }}";
}

function openPopup(index) {
    // Tampilkan popup
    document.getElementById('popup-form').style.display = 'block';

    // Simpan index kamar yang sedang diubah
    currentIndex = index;

    // Set informasi kamar
    const kamarInfo = document.getElementById('kamar-info');
    kamarInfo.innerText = `Kamar #${index + 1}`;

    // Jika sudah ada data, tampilkan di input form
    const inputNama = document.getElementById('nama');
    if (kamarData[index]) {
        // Data sudah pernah diisi => mode Update
        inputNama.value = kamarData[index];
    } else {
        // Data belum ada => mode Create
        inputNama.value = '';
    }

    // Pastikan pesan error hilang saat popup dibuka kembali
    const errorMsg = document.getElementById('form-error');
    errorMsg.style.display = 'none';
    errorMsg.innerText = '';
}

function closePopup() {
    // Sembunyikan popup
    document.getElementById('popup-form').style.display = 'none';
    // Reset index
    currentIndex = null;
}

// Fungsi dipanggil saat user menekan tombol "Simpan" di form
function saveData(event) {
    event.preventDefault(); // Mencegah reload jika tombol "Simpan" type="submit"

    // Ambil nilai dari semua field
    const nama = document.getElementById('nama').value.trim();
    const telp = document.getElementById('telp').value.trim();
    const tagihan = document.getElementById('tagihan').value.trim();
    const deskripsi = document.getElementById('deskripsi').value.trim();
    const tanggal = document.getElementById('tanggal-sewa').value.trim();

    // Periksa apakah ada input yang kosong
    if (!nama || !telp || !tagihan || !deskripsi || !tanggal) {
        // Tampilkan pesan error
        const errorMsg = document.getElementById('form-error');
        errorMsg.style.display = 'block';
        errorMsg.innerText = 'Harap isi semua field sebelum menyimpan!';
        return; // Berhenti di sini, jangan simpan data, jangan tutup popup
    }

    // Jika lolos validasi (semua terisi), sembunyikan pesan error
    const errorMsg = document.getElementById('form-error');
    errorMsg.style.display = 'none';
    errorMsg.innerText = '';

    // Lanjutkan proses simpan data...
    if (currentIndex !== null) {
        // Misalnya, simpan ke array
        kamarData[currentIndex] = {
            nama: nama,
            telp: telp,
            tagihan: tagihan,
            deskripsi: deskripsi,
            tanggal: tanggal
        };

        // Update label (contoh: label jadi nama, atau tetap "nomor kamar" jika mau)
        const label = document.getElementById(`kamar-label-${currentIndex}`);
        label.innerText = nama || 'nomor kamar';

        // Tambahkan class .saved pada kotak
        const kamarBox = document.querySelector(`.kamar-box[data-index='${currentIndex}']`);
        kamarBox.classList.add('saved');
    }

    closePopup();
}

// Hapus data
function deleteData() {
    if (currentIndex !== null) {
        // Kosongkan data array
        kamarData[currentIndex] = null;

        // Kembalikan label jadi "nomor kamar"
        const label = document.getElementById(`kamar-label-${currentIndex}`);
        label.innerText = 'nomor kamar';

        // Hapus class .saved agar warnanya kembali abu-abu
        const kamarBox = document.querySelector(`.kamar-box[data-index='${currentIndex}']`);
        kamarBox.classList.remove('saved');
    }

    closePopup();
}