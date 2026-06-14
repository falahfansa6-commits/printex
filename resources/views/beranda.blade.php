<!-- ========================= -->
<!-- FILE : index.html -->
<!-- ========================= -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINTEX | Beranda</title>

   <style>
 
   </style>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
   
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

    <!-- SLIDER -->
    <section class="slider-container">

    <button class="prev" onclick="prevSlide()">❮</button>

    <div class="slider" id="slider">

        @forelse($sliderBeranda as $slider)

            <div class="slide">

                <img
                    src="{{ asset('uploads/slider/'.$slider->gambar) }}"
                    alt="{{ $slider->judul }}">

            </div>

        @empty

            <div class="slide">
                <h3>Tidak ada slider</h3>
            </div>

        @endforelse

    </div>

    <button class="next" onclick="nextSlide()">❯</button>

</section>
<br><br>
    <!-- TENTANG -->
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
<br>
    <!-- HASIL SABLON -->
  <img src="batik.png" style="width: 100%; height: 400px;">
<div class="pts-section-container">
        
        <div class="pts-left-title">
            <h2 class="pts-main-heading">
                Printing<br>
                Textile<br>
                Solution
            </h2>
        </div>

        <div class="pts-right-description">
            <p class="pts-small-text">
                Kami tidak sekadar mencetak, melainkan <span class="pts-highlight-link">memberikan solusi komprehensif</span> yang mencakup konsultasi desain, pemilihan material, proses produksi, hingga pelayanan yang terbaik. Semuanya terintegrasi demi memberikan pengalaman layanan yang maksimal kepada setiap pelanggan.
            </p>
        </div>

    </div>
     
   <!--our values-->
   <div class="ov-section-wrapper">
        
        <div class="ov-left-side">
            <div class="ov-image-container">
                <img class="ov-profile-img" src="staf.png">
            </div>
            <div class="ov-title-container">
                <h2 class="ov-main-title">Our Values</h2>
                <div class="ov-arrow-button">➔</div>
            </div>
        </div>

        <div class="ov-right-side">
            
            <div class="ov-card">
                <h3 class="ov-card-title">Garansi Hasil Berkualitas</h3>
                <p class="ov-card-text">
                    Setiap produk yang kami hasilkan telah melalui <br>
                     proses kontrol kualitas yang ketat. Dengan <br>
                     penggunaan mesin berteknologi tinggi dan tinta <br>
                      berkualitas unggul, kami memastikan hasil cetakan <br>
                      yang tajam, tahan lama, serta akurat sesuai desain <br>
                       yang diinginkan pelanggan.
                </p>
            </div>

            <div class="ov-card">
                <h3 class="ov-card-title">Konsistensi</h3>
                <p class="ov-card-text">
                    Kami memahami pentingnya konsistensi dalam setiap produk yang dihasilkan. Oleh karena itu, kami menerapkan sistem dan prosedur kerja yang memastikan kualitas cetakan tetap stabil dari awal hingga akhir produksi.
                </p>
            </div>

            <hr class="ov-divider">

            <div class="ov-card">
                <h3 class="ov-card-title">Kecepatan</h3>
                <p class="ov-card-text">
                    Didukung oleh sistem produksi yang efisien dan tenaga kerja yang andal, kami mampu memenuhi pesanan dalam waktu yang relatif singkat tanpa mengorbankan standar kualitas.
                </p>
            </div>

            <div class="ov-card">
                <h3 class="ov-card-title">Harga Kompetitif</h3>
                <p class="ov-card-text">
                    Dengan pengelolaan operasional yang efisien, kami dapat menawarkan harga yang kompetitif tanpa mengurangi kualitas layanan maupun hasil cetakan. Kami percaya bahwa kualitas tinggi harus tetap dapat diakses oleh berbagai skala usaha.
                </p>
            </div>

            <hr class="ov-divider">

            <div class="ov-card ov-card-fullwidth">
                <h3 class="ov-card-title">Pelayanan Profesional & Responsif</h3>
                <p class="ov-card-text">
                    Kami menempatkan kepuasan pelanggan sebagai prioritas utama. Tim layanan pelanggan kami siap memberikan bantuan secara cepat, informatif, dan solutif di setiap tahap proses pemesanan, monitoring produksi hingga pengiriman.
                </p>
            </div>

        </div>

    </div>
   <!-- ========================= -->
<!-- FOOTER -->
<!-- ========================= -->

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


<!-- BOTTOM -->


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
   
     

   <script>

let slider = document.getElementById('slider');
let slides = document.querySelectorAll('.slide');

let index = 0;

function nextSlide()
{
    index++;

    if(index >= slides.length)
    {
        index = 0;
    }

    slider.style.transform =
        `translateX(-${index * 100}%)`;
}

function prevSlide()
{
    index--;

    if(index < 0)
    {
        index = slides.length - 1;
    }

    slider.style.transform =
        `translateX(-${index * 100}%)`;
}

setInterval(nextSlide, 4000);

</script>

</body>
</html>