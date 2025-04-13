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