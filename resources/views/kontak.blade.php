<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami & Informasi Kontak</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        /* ==========================================================================
           1. CSS UNTUK SEKSI FORMULIR HUBUNGI KAMI (ANTI-BENTROK)
           ========================================================================== */
        
       .hk-section-wrapper {
    font-family: 'Inter', sans-serif;
    width: 100%;
    max-width: 1200px;
    margin: 40px auto 10px auto;
    padding: 20px;
    background-color: #ffffff;
    /* MEMBUAT KONTEN DI DALAMNYA RATA TENGAH */
    display: flex;
    flex-direction: column;
    align-items: center; 
    text-align: center;
}

/* Reset lokal khusus di dalam struktur kelas form */
.hk-section-wrapper *, 
.hk-section-wrapper *::before, 
.hk-section-wrapper *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Badge kecil atas "KONTAK KAMI" */
.hk-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    border: 1px solid #e0e0e0;
    padding: 6px 14px;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 700;
    color: #0b2f23;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-bottom: 15px;
}

/* Titik hijau penanda aktif di dalam badge */
.hk-badge::before {
    content: '';
    width: 6px;
    height: 6px;
    background-color: #10b981;
    border-radius: 50%;
}

/* Judul Utama "Hubungi Kami" */
.hk-main-title {
    font-size: 3rem;
    font-weight: 800;
    color: #0b2f23;
    margin-bottom: 35px;
    line-height: 1.1;
    width: 100%;
}

/* Garis dekoratif hijau di bawah kata "Kami" */
.hk-title-underline {
    position: relative;
    display: inline-block;
}

.hk-title-underline::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 4px;
    width: 100%;
    height: 4px;
    background-color: #10b981;
}

/* Kotak Card Area Form */
.hk-form-card {
    background-color: #f8faf9;
    border: 1px solid #eef2f0;
    border-top: 3px solid #0b2f23;
    border-radius: 12px;
    padding: 30px;
    width: 100%;
    max-width: 650px; 
    margin: 0 auto; /* MEMASTIKAN CARD FORM BERADA DI TENGAH */
    text-align: left; /* Mengembalikan teks di dalam form agar tetap rata kiri demi kenyamanan membaca */
}

/* Group kolom input */
.hk-input-group {
    margin-bottom: 22px;
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.hk-label {
    font-size: 0.75rem;
    font-weight: 700;
    color: #5c726a;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.hk-required {
    color: #10b981;
    margin-left: 2px;
}

.hk-optional {
    color: #a3b3ac;
    text-transform: lowercase;
    font-weight: 400;
}

.hk-input-field,
.hk-textarea-field {
    width: 100%;
    padding: 14px 16px;
    border: 1px solid #d1ded8;
    background-color: #ffffff;
    border-radius: 8px;
    font-size: 0.95rem;
    color: #0b2f23;
    outline: none;
    transition: all 0.2s ease;
}

.hk-textarea-field {
    resize: vertical;
    min-height: 120px;
}

.hk-input-field:focus,
.hk-textarea-field:focus {
    border-color: #10b981;
    box-shadow: 0 0 0 3px rgba(16, 185, 129, 0.1);
}

.hk-input-field::placeholder,
.hk-textarea-field::placeholder {
    color: #b3c2bb;
}

.hk-form-note {
    font-size: 0.8rem;
    color: #788e85;
    line-height: 1.4;
    margin-top: 10px;
}

.hk-btn-submit {
    width: 100%;
    background-color: #0b2f23;
    color: #ffffff;
    border: none;
    padding: 15px;
    border-radius: 8px;
    font-size: 1rem;
    font-weight: 600;
    cursor: pointer;
    margin-top: 10px;
    transition: background-color 0.2s ease;
}

.hk-btn-submit:hover {
    background-color: #114735;
}


/* ==========================================================================
   2. CSS UNTUK SEKSI GRID KARTU KONTAK (ANTI-BENTROK)
   ========================================================================== */

.ic-cards-section-wrapper {
    font-family: 'Inter', sans-serif;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto 40px auto;
    padding: 0 20px 20px 20px;
    background-color: #ffffff;
}

/* Reset lokal khusus di dalam struktur kelas kartu kontak */
.ic-cards-section-wrapper *, 
.ic-cards-section-wrapper *::before, 
.ic-cards-section-wrapper *::after {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

/* Sistem Grid Utama untuk 4 Kotak Kontak */
.ic-cards-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-bottom: 24px;
}

/* Desain Dasar Kartu Konten */
.ic-contact-card {
    background-color: #ffffff;
    border: 1px solid #eef2f0;
    border-radius: 16px;
    padding: 30px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    min-height: 200px;
    text-align: left; /* Memastikan konten kartu kontak tetap rapi menghadap kiri */
}

.ic-contact-card.ic-featured-green {
    background-color: #e11d24; /* Mengubah hijau gelap (#0b2f23) menjadi MERAH */
    border: none;
    color: #ffffff;
}

/* Kotak Bingkai Ikon Mini */
.ic-card-icon-box {
    width: 44px;
    height: 44px;
    background-color: #f3f7f5;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.2rem;
    color: #2f0b0b;
    margin-bottom: 20px;
}

.ic-featured-green .ic-card-icon-box {
    background-color: rgba(255, 255, 255, 0.1);
    color: #ffffff;
}

/* Judul Label Identitas (Email, Kantor, dll) */
.ic-card-label {
    font-size: 0.75rem;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #10b981;
    margin-bottom: 6px;
}

/* Teks Alamat atau Informasi Inti */
.ic-card-main-info {
    font-size: 1.35rem;
    font-weight: 700;
    color: #0b2f23;
    line-height: 1.3;
    margin-bottom: 8px;
}

.ic-featured-green .ic-card-main-info {
    color: #ffffff;
}

/* Paragraf Keterangan Kecil */
.ic-card-sub-desc {
    font-size: 0.9rem;
    color: #1a1d1c;
    margin-bottom: 20px;
    line-height: 1.4;
}

.ic-featured-green .ic-card-sub-desc {
    color: rgba(255, 255, 255, 0.7);
}

/* Link Aksi Tautan di Kaki Kartu */
.ic-card-action-link {
    font-size: 0.9rem;
    font-weight: 600;
    color: #0b2f23;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 6px;
    margin-top: auto;
}

.ic-card-action-link:hover {
    text-decoration: underline;
}

.ic-featured-green .ic-card-action-link {
    color: #10b981;
}

.ic-link-green {
    color: #10b981 !important;
}

/* Bar Panjang Jam Operasional Kerja */
.ic-operational-bar {
    width: 100%;
    background-color: #f8faf9;
    border: 1px solid #eef2f0;
    border-radius: 12px;
    padding: 16px 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.ic-op-left-info {
    display: flex;
    align-items: center;
    gap: 12px;
}

.ic-op-icon {
    font-size: 1.2rem;
}

.ic-op-title {
    font-size: 0.95rem;
    font-weight: 700;
    color: #2f0b0b;
}

.ic-op-hours {
    font-size: 0.85rem;
    color: #788e85;
    margin-top: 2px;
    text-align: left;
}

.ic-op-right-nav {
    display: flex;
    gap: 20px;
}

.ic-op-nav-item {
    font-size: 0.85rem;
    color: #788e85;
    text-decoration: none;
    transition: color 0.2s ease;
}

.ic-op-nav-item:hover {
    color: #0b2f23;
}


/* ==========================================================================
   3. MEDIA QUERIES (SISTEM RESPONSIVE LAYAR HP & TABLET)
   ========================================================================== */

@media (max-width: 768px) {
    .hk-main-title {
        font-size: 2.3rem;
    }
    .hk-form-card {
        padding: 20px;
        max-width: 100%;
    }
    .ic-cards-grid {
        grid-template-columns: 1fr; /* Grid pecah menjadi baris tunggal di HP */
        gap: 16px;
    }
    .ic-operational-bar {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
        padding: 20px;
    }
    .ic-op-right-nav {
        width: 100%;
        justify-content: space-between;
        border-top: 1px solid #eef2f0;
        padding-top: 12px;
    }
}

@media (max-width: 576px) {
    .hk-section-wrapper {
        padding: 10px;
    }
    .ic-cards-section-wrapper {
        padding: 0 10px 20px 10px;
    }
}
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

  <link rel="stylesheet" href="style.css">

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