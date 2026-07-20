<!-- ========================= -->
<!-- FILE : index.html         -->
<!-- ========================= -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINTEX | Beranda</title>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        /* Anda bisa menambahkan custom CSS internal di sini jika diperlukan */
    </style>
</head>
<body>

    <!-- NAVBAR -->
    <nav>
        @include('layouts.navbar')
    </nav>

    <!-- SLIDER -->
    <section class="slider-container">
        <button class="prev" onclick="prevSlide()">❮</button>

        <div class="slider" id="slider">
            @forelse($sliderPelayanan as $slider)
                <div class="slide">
                    <img src="{{ asset('uploads/slider/'.$slider->gambar) }}" alt="{{ $slider->judul }}">
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

    <!-- LAYANAN SECTION -->
   <section id="service" class="printex-section">
        <div class="printex-top">
            <div class="printex-left">
                <div class="printex-logo">
                    <img src="{{ asset('img/p.png') }}" alt="Logo">
                </div>
                <div class="printex-title">
                    <h1>Produk<br>Layanan</h1>
                    <div class="printex-arrow">
                        <img src="{{ asset('img/panahkebawah.png') }}" alt="Panah">
                    </div>
                </div>
            </div>
            <div class="printex-right">
                <div class="printex-desc">
                    Sebagai penyedia solusi cetak tekstil terpercaya, Printex menawarkan berbagai layanan dengan kualitas terbaik yang disesuaikan untuk kebutuhan industri fashion, konveksi, hingga bisnis skala kecil dan menengah. Dengan dukungan teknologi modern dan tenaga profesional, kami siap membantu kebutuhan produksi tekstil secara cepat, presisi, dan berkualitas tinggi.
                </div>
            </div>
        </div>

        <div class="printex-services">
            @forelse($services as $service)
                <div class="printex-card">
                    <h3>{{ $service->judul }}</h3>
                    <p>{{ $service->deskripsi }}</p>
                </div>
            @empty
                <p>Belum ada layanan.</p>
            @endforelse
        </div>
    </section>

    <!-- GRID PRODUCTS & PROCESS 01 -->
   <div id="theproduk" class="ks-full-page-container"> 
        @if($theprodukimage)
            <div class="ks-box-top-left" style="background-image: url('{{ asset($theprodukimage->gambar) }}');"></div>
        @else
            <div class="ks-box-top-left" style="background-color: #ccc;"></div>
        @endif

        <div class="ks-box-top-right">
            <div class="ks-products-header">
                <span>the products</span>
                <div class="ks-arrow-image-container">
                    <img src="{{ asset('img/panahputih.png') }}" alt="Arrow">
                </div>
            </div>
            
            <div class="ks-products-grid">
                @forelse($theproduk as $item)
                    <div class="ks-product-item">
                        <h3>{{ $item->judul }}</h3>
                        <p>{{ $item->isi }}</p>
                    </div>
                @empty
                    <div class="ks-product-item">
                        <h3>Belum Ada Produk</h3>
                        <p>Silakan tambahkan data melalui halaman admin.</p>
                    </div>
                @endforelse
            </div>
        </div>

       <div id="produk1" class="ks-box-bottom-left"> 
            @foreach ($produk1 as $item)
                <div class="ks-process-title">
                    <h2><span class="ks-number">01</span>{{ $item->judul }}</h2>
                    <p class="ks-process-desc">{{ $item->isi }}</p>
                </div>
            @endforeach
            
            <div class="ks-process-footer">
                <div class="ks-arrow-image-container">
                    <img src="{{ asset('img/panah ke atas.png') }}" alt="Arrow">
                </div>
                <span>the process</span>
            </div>
        </div>

        @foreach($produk1 as $item)
            <div class="ks-box-bottom-right" style="background-image: url('{{ asset($item->gambar) }}');"></div>
        @endforeach
    </div>

    <!-- PROCESS 02 SECTION -->
  <section id="produk2" class="ptx-section-container">
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
                    @foreach($produk2 as $item)
                        <h2 class="ptx-main-title">{{ $item->judul }}</h2>
                    @endforeach
                </div>
                @foreach($produk2 as $item)
                    <p class="ptx-main-desc">{{ $item->isi }}</p>
                @endforeach
            </div>
        </div>

        <div class="ptx-right-side-image">
            <div class="ptx-picture-holder">
                @foreach($produk2 as $item)
                    <img class="ptx-showcase-img" src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}">
                @endforeach
            </div>
        </div>
    </section>

    <!-- PROCESS 03 SECTION -->
   <div id="produk3" class="kp-main-card-container"> 
        <div class="kp-text-section">
            <div class="kp-title-group">
                <span class="kp-badge-number">03</span>
                @foreach($produk3 as $item)
                    <h2 class="kp-main-title">{{ $item->judul }}</h2>
                @endforeach
            </div>
            @foreach($produk3 as $item)
                <p class="kp-paragraph-desc">{{ $item->deskripsi }}</p>
            @endforeach
        </div>

        <div class="kp-image-section">
            <div class="kp-picture-holder">
                @foreach($produk3 as $item)
                    <img class="kp-showcase-img" src="{{ asset('upload/produk3/' . $item->gambar) }}" alt="{{ $item->judul }}">
                @endforeach
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="printex-footer">
        @include('layouts.footer')
    </footer>

    <!-- JAVASCRIPT SLIDER -->
    <script>
        let slider = document.getElementById('slider');
        let slides = document.querySelectorAll('.slide');
        let index = 0;

        function nextSlide() {
            index++;
            if(index >= slides.length) {
                index = 0;
            }
            updateSliderPosition();
        }

        function prevSlide() {
            index--;
            if(index < 0) {
                index = slides.length - 1;
            }
            updateSliderPosition();
        }

        function updateSliderPosition() {
            slider.style.transform = `translateX(-${index * 100}%)`;
        }

        // Jalankan auto-play slider setiap 4 detik
        setInterval(nextSlide, 4000);
    </script>
</body>
</html>