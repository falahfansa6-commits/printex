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
 <style>
         *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family:Arial, sans-serif;
            background:#ffffff;
        }

        /* PERBAIKAN: Menghilangkan border & margin luar agar layout full satu halaman */
        .section{
            width:100%;
            overflow:hidden;
        }

       
    </style>
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

    <button class="prev" onclick="prevSlide()"></button>

    <div class="slider" id="slider">

        @forelse($sliderPelayanan as $slider)

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

<br>
      <section class="printex-section">
        <div class="printex-top">
            <div class="printex-left">
                <div class="printex-logo">
                    <img src="p.png" alt="Logo">
                </div>
                <div class="printex-title">
                    <h1>Produk<br>Layanan</h1>
                    <div class="printex-arrow">
                        <img src="panahkebawah.png" alt="Panah">
                    </div>
                </div>
            </div>
            <div class="printex-right">
                <div class="printex-desc">
                    Sebagai penyedia solusi cetak tekstil terpercaya, Printex menawarkan berbagai layanan dengan kualitas terbaik yang disesuaikan untuk kebutuhan industri fashion, konveksi, hingga bisnis skala kecil dan menengah. Dengan dukungan teknologi modern and tenaga profesional, kami siap membantu kebutuhan produksi tekstil secara cepat, presisi, dan berkualitas tinggi.
                </div>
            </div>
        </div>

        <div class="printex-services">
            <div class="printex-card">
                <h3>Printing Sublim</h3>
                <p>Printing Sublim merupakan metode cetak digital menggunakan tinta khusus yang dipanaskan hingga berubah menjadi gas and menyatu secara permanen ke dalam serat kain sehingga menghasilkan warna yang tajam dan tahan lama.</p>
            </div>
            <div class="printex-card">
                <h3>Sablon DTF</h3>
                <p>Sablon DTF (Direct Transfer Film) adalah teknik pencetakan desain pada lapisan film khusus yang kemudian dipindahkan ke media kain menggunakan proses press panas dengan hasil cetak yang fleksibel dan tahan lama.</p>
            </div>
            <div class="printex-card">
                <h3>Kaos Premium</h3>
                <p>Menyediakan berbagai jenis kaos premium menggunakan bahan berkualitas seperti cotton combed 30s, 24s, dan material unggulan lainnya yang nyaman digunakan serta cocok untuk kebutuhan fashion maupun promosi.</p>
            </div>
        </div>
    </section>

    <div class="ks-full-page-container">
        <div class="ks-box-top-left"></div>

        <div class="ks-box-top-right">
            <div class="ks-products-header">
                <span>the products</span>
                <div class="ks-arrow-image-container">
                    <img src="panahputih.png" alt="Arrow">
                </div>
            </div>
            
            <div class="ks-products-grid">
                <div class="ks-product-item">
                    <h3>Jersey Olahraga</h3>
                    <p>berbagai jenis jersey olahraga seperti sepak bola, futsal, badminton, dan e-sports.</p>
                </div>
                <div class="ks-product-item">
                    <h3>Totebag</h3>
                    <p>keperluan merchandise, promosi, atau retail brand.</p>
                </div>
                <div class="ks-product-item">
                    <h3>Kain Meteran Bermotif</h3>
                    <p>kebutuhan industri fashion, seragam batik, home decor, dan kerajinan tekstil.</p>
                </div>
                <div class="ks-product-item">
                    <h3>Bendera Spanduk Kain</h3>
                    <p>kebutuhan branding acara, komunitas, atau keperluan instansi.</p>
                </div>
                <div class="ks-product-item">
                    <h3>Scarf & Hijab</h3>
                    <p>memenuhi detail dan warna gradasi untuk scarf dan hijab printing.</p>
                </div>
            </div>
        </div>

        <div class="ks-box-bottom-left">
            <div class="ks-process-title">
                <h2><span class="ks-number">01</span>Print Sublim</h2>
                <p class="ks-process-desc">Adapun produk-produk yang umum dihasilkan melalui proses sublimasi</p>
            </div>
            
            <div class="ks-process-footer">
                <div class="ks-arrow-image-container">
                    <img src="panahkeatas.png" alt="Arrow">
                </div>
                <span>the process</span>
            </div>
        </div>

        <div class="ks-box-bottom-right"></div>
    </div>

    <section class="ptx-section-container">
        <div class="ptx-left-side">
            <div class="ptx-header-wrapper">
                <div class="ptx-process-badge">
                    <svg class="ptx-arrow-icon" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50" fill="#d10000"/>
                        <line x1="66" y1="34" x2="34" y2="66" stroke="white" stroke-width="9" stroke-linecap="square"/>
                        <path d="M58 66H34V42" stroke="white" stroke-width="9" stroke-linecap="square" stroke-linejoin="miter"/>
                    </svg>
                    <span class="ptx-process-text">the process</span>
                </div>
            </div>

            <div class="ptx-content-body">
                <div class="ptx-title-group">
                    <span class="ptx-main-number">02</span>
                    <h2 class="ptx-main-title">Sablon DTF</h2>
                </div>
                <p class="ptx-main-desc">
                    Mencetak custom desain satuan atau dalam jumlah besar dengan biaya yang tetap efisien.
                </p>
            </div>
        </div>

        <div class="ptx-right-side-image">
            <div class="ptx-picture-holder">
                <img class="ptx-showcase-img" src="merah.png" alt="Display Sablon DTF Products">
            </div>
        </div>
    </section>

    <div class="kp-main-card-container">
        <div class="kp-text-section">
            <div class="kp-title-group">
                <span class="kp-badge-number">03</span>
                <h2 class="kp-main-title">Kaos Premium</h2>
            </div>
            <p class="kp-paragraph-desc">
                Kaos Premium dengan menggunakan bahan cotton combed 30s. Combed 30s adalah jenis kain katun yang terbuat dari 100% serat kapas alami, melalui proses penyisiran (combing) untuk menghilangkan serat-serat pendek dan kotoran. Proses ini menghasilkan kain yang lebih halus, kuat, dan nyaman saat dikenakan.
            </p>
        </div>

        <div class="kp-image-section">
            <div class="kp-picture-holder">
                <img class="kp-showcase-img" src="kaos.png" alt="Display Kaos Premium">
            </div>
        </div>
    </div>
    <!-- FOOTER -->
    
<footer class="printex-footer">

<div class="printex-container">

   
    <div>

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



<div class="printex-bottom">

    <div class="printex-copy">
        © 2026 Printex — All Rights Reserved.
    </div>

   <div class="printex-social">

<<<<<<< HEAD
   <a href="https://wa.me/6285196093295" class="social-item">
=======
    <a href="https://wa.me/6285196093295" class="social-item">
>>>>>>> 510852399e85b7627056468ab77ba314e182c9d0
        <img src="{{ asset('img/logo-wa.png') }}" alt="WA">
    </a>

    <a href="https://www.instagram.com/printex.official?igsh=MTlqbjFnZXBsOHl4cg==" class="social-item">
        <img src="{{ asset('img/logo-ig.png') }}" alt="IG">
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