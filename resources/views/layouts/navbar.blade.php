 <nav class="navbar">
        
        <a href="#" class="logo-container">
            <img src="{{ asset('img/printex-merah.png') }}" alt="Logo" class="logo-img">
        </a>
        <div class="search-container">
            <form action="{{ route('search') }}" method="GET">
    <input type="text" name="keyword" class="search-input"placeholder="Cari...">
</form>
        </div>

        <div class="menu-container">
            <a href="{{ route('beranda') }}" class="menu-item">Beranda</a>
            <a href="{{ route('about') }}" class="menu-item">Tentang</a>
            <a href="{{ route('pelayanan') }}" class="menu-item">Layanan</a>
            <a href="{{ route('kontak') }}" class="menu-item">Kontak</a>
            
            <button class="btn-utama">Masuk atau Daftar</button>
        </div>
    </nav>