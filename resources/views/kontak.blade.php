<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami & Informasi Kontak</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
    
    </style>
</head>
<body>
  <!-- NAVBAR -->
   <!-- ========================= -->
<!-- FILE : index.html -->
<!-- ========================= -->

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PRINTEX</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

  <!-- ========================= -->
<!-- NAVBAR MIRIP GAMBAR -->

    <nav class="navbar">
        
        <a href="#" class="logo-container">
            <img src="printex-merah.png" alt="Logo" class="logo-img">
        </a>
        <div class="search-container">
            <input type="text" class="search-input" placeholder="Cari kebutuhanmu disini!...">
        </div>

        <div class="menu-container">
            <a href="{{ route('beranda') }}" class="menu-item">Beranda</a>
            <a href="{{ route('about') }}" class="menu-item">Tentang</a>
            <a href="{{ route('pelayanan') }}" class="menu-item">Layanan</a>
            <a href="{{ route('kontak') }}" class="menu-item">Kontak</a>
            
            <button class="btn-utama">Masuk atau Daftar</button>
        </div>
    </nav>
    <div class="hk-section-wrapper">
        <div class="hk-badge">Kontak Kami</div>
        <h2 class="hk-main-title">Hubungi <span class="hk-title-underline">Kami</span></h2>
        
        <div class="hk-form-card">
            <form action="#" method="POST">
                <div class="hk-input-group">
                    <label class="hk-label">Nama<span class="hk-required">*</span></label>
                    <input type="text" class="hk-input-field" placeholder="Nama kamu" required>
                </div>
                
                <div class="hk-input-group">
                    <label class="hk-label">No. WA / Email<span class="hk-required">*</span></label>
                    <input type="text" class="hk-input-field" placeholder="Nomor WA atau alamat email" required>
                </div>
                
                <div class="hk-input-group">
                    <label class="hk-label">Ceritakan Kebutuhanmu <span class="hk-optional">(opsional)</span></label>
                    <textarea class="hk-textarea-field" placeholder="Contoh: Saya butuh website company profile untuk usaha logistik, target selesai bulan depan."></textarea>
                </div>

                <button type="submit" class="hk-btn-submit">Kirim Pesan</button>
                
                <p class="hk-form-note">
                    Formulir ini akan membuka WhatsApp dengan pesan yang sudah terisi.
                </p>
            </form>
        </div>
    </div>

    <div class="ic-cards-section-wrapper">
        <div class="ic-cards-grid">
            
            <div class="ic-contact-card">
                <div>
                    <div class="ic-card-icon-box">✉</div>
                    <div class="ic-card-label">Email</div>
                    <h3 class="ic-card-main-info">info@printex.co.id</h3>
                    <p class="ic-card-sub-desc">Kami akan merespons secepat mungkin.</p>
                </div>
                <a href="mailto:kapsynergy@gmail.com" class="ic-card-action-link">Kirim Email ↗</a>
            </div>

            <div class="ic-contact-card">
                <div>
                    <div class="ic-card-icon-box">📍</div>
                    <div class="ic-card-label">Kantor</div>
                    <h3 class="ic-card-main-info"> jl. watubelang 1 noborejo kota salatiga jawa tengah</h3>
                    <p class="ic-card-sub-desc">Mari ngobrol langsung dan temukan solusi sablon terbaik.</p>
                </div>
                <a href="https://www.google.com/maps/search/amazink+people+group+%E2%9B%89+jl.+watubelang+1+noborejo+kota+salatiga+jawa+tengah/@-7.3718145,110.4960024,15z/data=!3m1!4b1?entry=ttu&g_ep=EgoyMDI2MDUyMC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="ic-card-action-link ic-link-green">Buka Maps ↗</a>
            </div>

            <div class="ic-contact-card">
                <div>
                    <div class="ic-card-icon-box">📞</div>
                    <div class="ic-card-label">Telephone</div>
                    <h3 class="ic-card-main-info">+62 851-9609-3295</h3>
                    <p class="ic-card-sub-desc">Tersedia Senin-Jumat, pukul 08:00 - 17:00 WIB. <br>
                     Sabtu, pukul 08:00 - 14:00 WIB
                    </p>
                </div>
                <a href="tel:+6285196093295" class="ic-card-action-link">Hubungi Sekarang ↗</a>
            </div>

            <div class="ic-contact-card ic-featured-green">
                <div>
                    <div class="ic-card-icon-box">💬</div>
                    <div class="ic-card-label">Whatsapp Chat</div>
                    <h3 class="ic-card-main-info">Chat Langsung</h3>
                    <p class="ic-card-sub-desc">Butuh bantuan cepat? Tim support kami siap di sini.</p>
                </div>
                <a href="https://wa.me/6285196093295" target="_blank" class="ic-card-action-link">Mulai Chat ↗</a>
            </div>

        </div>

        <div class="ic-operational-bar">
            <div class="ic-op-left-info">
                <span class="ic-op-icon">🕒</span>
                <div>
                    <h4 class="ic-op-title">Jam Operasional</h4>
                    <p class="ic-op-hours">Senin - Jumat 08:00 - 17:00 WIB <br>
                      Sabtu 08:00 - 14:00 WIB
                    </p>
                </div>
            </div>
            
            <div class="ic-op-right-nav">
                <a href="" class="ic-op-nav-item">Email</a>
                <a href="https://wa.me/6285196093295" class="ic-op-nav-item">WhatsApp</a>
                <a href="" class="ic-op-nav-item">Telepon</a>
            </div>
        </div>
    </div>


    <footer class="printex-footer">

<div class="printex-container">

    <!-- ========================= -->
    <!-- KOLOM 1 -->
    <!-- ========================= -->

    <div>

        <!-- LOGO -->
        

        <!-- TEXT LOGO -->
        <div class="printex-logo-text">
            <img src="printexlogo.png" alt="Printex">
        </div>

        <!-- DESKRIPSI -->
        <p class="printex-desc">
            Solusi cetak tekstil digital masa depan untuk kebutuhan fashion,
            konveksi, dan bisnis modern.
        </p>

        <!-- FITUR -->
        <div class="printex-feature">

        

          


        </div>

    </div>

    <!-- ========================= -->
    <!-- KOLOM 2 -->
    <!-- ========================= -->

    <div>

        <h2 class="printex-title">
            Perusahaan
        </h2>

        <ul class="printex-links">

            <li>
                <a href="about.html">Tentang Kami</a>
            </li>

            <li>
                <a href="pelayanan.html">Layanan</a>
            </li>

           

    </div>

    <!-- ========================= -->
    <!-- KOLOM 3 -->
    <!-- ========================= -->

    <div>

        <h2 class="printex-title">
            Kontak
        </h2>

        <div class="printex-contact">

            <div class="printex-contact-item">
                <i class="fa-solid fa-location-dot"></i>
                <span>Tangerang, Indonesia</span>
            </div>

            <div class="printex-contact-item">
                <i class="fa-solid fa-phone"></i>
                <span>+62 851-9609-3295</span>
            </div>

            <div class="printex-contact-item">
                <i class="fa-solid fa-envelope"></i>
                <span>info@printex.co.id</span>
            </div>

            <div class="printex-contact-item">
                <i class="fa-solid fa-clock"></i>
                <span>Senin - jumat, 08.00 - 17.00 WIB <br>
                       Sabtu, 08:00 - 14:00 WIB</span>
            </div>

        </div>

    </div>

    <!-- ========================= -->
    <!-- KOLOM 4 -->
    <!-- ========================= -->

    <div class="printex-newsletter">

        <h2 class="printex-title">
            Newsletter
        </h2>

        <p>
            Dapatkan update informasi produk dan promo terbaru dari kami.
        </p>

        <form class="printex-form">

            <input type="email"
            placeholder="Alamat Email">

            <button type="submit">
                Daftar
            </button>

        </form>

    </div>

</div>

<!-- ========================= -->
<!-- BOTTOM -->
<!-- ========================= -->

<div class="printex-bottom">

    <div class="printex-copy">
        © 2026 Printex — All Rights Reserved.
    </div>

   <div class="printex-social">

    <a href="https://wa.me/6285196093295" class="social-item">
        <img src="logo-wa.png" alt="WA">
    </a>

    <a href="https://www.instagram.com/printex.official?igsh=MTlqbjFnZXBsOHl4cg==" class="social-item">
        <img src="logo-ig.png" alt="IG">
    </a>

   
   

</div>

</div>

</footer>

</body>
</html>