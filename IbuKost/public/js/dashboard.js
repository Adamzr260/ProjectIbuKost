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

// Tombol "Tidak" => tutup popup
function closeUserPopup() {
    userPopup.classList.remove('show');
}

// Tombol "Ya" => ke landing
function goToLanding() {
    window.location.href = "{{ route('landing') }}";
}