<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
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

     <div class="container">
 
    <div class="text">
        <img src="p.png" height="100px" width="100px">
        <h1>Tentang<br>Kami</h1>
<br>
        <p>
            Printex merupakan perusahaaan yang bergerak di bidang jasa
            printing textile, sablon digital dan kaos premium.
            kami menyediakan solusi cetak kain berkualitas tinggi
            untuk kebutuhan industri fashion, konveksi,
            hingga usaha kecil dan menengah
        </p>
    </div>

    <div class="gambar">
        <img src="orang.png">
    </div>

</div>

 <!-- Lokasi-->
  <div class="lk-main-wrapper">

        <div class="lk-header-banner">
            <h1>Lokasi<br>Kami</h1>
            <div class="lk-arrow-circle">➔</div>
        </div>

        <div class="lk-container">
            <div class="lk-location-grid">

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Salatiga
                    </div>
                    <div class="lk-location-address">
                        Jl. Joko Tingkir, Tengah, Kec. <br>
                        Tingkir, Kota Salatiga, Jawa <br>
                        Tengah 50745
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Semarang
                    </div>
                    <div class="lk-location-address">
                        Jl. Ronggolawe Tim. No.29, <br>
                        Karangayu, Kec. Semarang <br>
                        Barat, Kota Semarang, <br>
                        Jawa Tengah 50141
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Kudus
                    </div>
                    <div class="lk-location-address">
                        Gg. 10, Pedawang, Kec. Bae, <br>
                        Kabupaten Kudus, Jawa <br>
                        Tengah 59324
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Malang
                    </div>
                    <div class="lk-location-address">
                        Jl. Satsui Tubun No.32, <br>
                        Gadang, Kec. Sukun, Kota <br>
                        Malang, Jawa Timur 65149
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Pati
                    </div>
                    <div class="lk-location-address">
                        RT.01/RW.02, Ngulaan, Sukoharjo, <br>
                        Kec. Wedarijaksa, Kabupaten Pati <br>
                        Jawa Tengah 59152
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Pekalongan
                    </div>
                    <div class="lk-location-address">
                        Jl.Raya Ambokembang No.14, <br>
                        RT.01/RW.01, Lor,Podo,Kec, <br>
                        Kedungwuni, Kabupaten <br>
                        Pekalongan,Jawa tengah 51173
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Klaten
                    </div>
                    <div class="lk-location-address">
                        Jl. Utama Margorejo, RT.04/RW.03, <br>
                        Potrowangsan, Karanganom, Kec, <br>
                        Klaten Utara, Kabupaten Klaten, <br>
                        Jawa tengah 57438
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Kediri
                    </div>
                    <div class="lk-location-address">
                        Jl.KH.Agus salim No.3 a, <br>
                        Bandar Kidul, Kec. <br>
                        Mojoroto,Kota Kediri, <br>
                        Jawa Timur 63118
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Madiun
                    </div>
                    <div class="lk-location-address">
                        Jl. Sikatan No.68,Nambangan <br>
                        Lor,kec.Manguharjo,Kota <br>
                        Madiun, Jawa Timur 63129
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Surabaya
                    </div>
                    <div class="lk-location-address">
                        Jl.Raya Bangkingan No.262, <br>
                        Bangkingan, Kec. Lakarsantri, <br>
                        Surabaya, Jawa timur 60214
                    </div>
                </div>

                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Solo
                    </div>
                    <div class="lk-location-address">
                        Jl.Kasuari Dusun I No.B.33,RT/RW.06/07, <br>
                        Dusun I,Langenharjo, Kec. Grogol, Kabupaten <br>
                        Sukoharjo, Jawa Tengah 57552
                    </div>
                </div>
                
                <div class="lk-location-item">
                    <div class="lk-location-title">
                        <svg class="lk-pin-icon" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
                        Purwokerto
                    </div>
                    <div class="lk-location-address">
                        Jl. Sultan Agung, Dusun IV, Karangnanas, <br>
                         Kec. Sokaraja, Kabupaten Banyumas, <br>
                         Jawa Tengah 53181, Indonesia 
                </div>

                

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