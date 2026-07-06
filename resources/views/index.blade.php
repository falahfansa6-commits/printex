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
  

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>PRINTEX</title>

  {{-- <link rel="stylesheet" href="style.css"> --}}

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
        <img src="{{ asset('img/p.png') }}" height="100px" width="100px">
        <h1>{{ $baru->judul ??'' }}</h1>
        <p>{{ $baru->isi ??''  }}</p>
        <br>
        <a href="{{ url('/admin/baru/update') }}" class="btn-edit">Edit Tentang Kami</a>
    </div>

    <div class="gambar">
        <img src="{{ asset('storage/'.($baru->gambar ??'' )) }}">
    </div>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
</div>

</div>
<br>
    <!-- HASIL SABLON -->
 @foreach ($secounds as $item)

    @if($item->gambar)
        <img src="{{ asset('uploads/secound/' . $item->gambar) }}"
             alt="{{ $item->judul }}"
             style="width: 100%; height: 400px; object-fit: cover;">
    @endif

    <div class="pts-section-container">

        <div class="pts-left-title">
            <h2 class="pts-main-heading">
                {{ $item->judul }}
            </h2>
        </div>

        <div class="pts-right-description">
            <p class="pts-small-text">
                {!! nl2br(e($item->isi)) !!}
            </p>
        </div>

    </div>

@endforeach
     
 
<!-- Our Values -->
<div class="ov-section-wrapper">

    <!-- Bagian kiri -->
    <div class="ov-left-side">

        <div class="ov-image-container">
            @if($gambar)
                <img class="ov-profile-img"
                     src="{{ asset($gambar->gambar) }}"
                     alt="Our Values">
            @endif
        </div>

        <div class="ov-title-container">
            <h2 class="ov-main-title">
                Our Values
            </h2>

            <div class="ov-arrow-button">
                ➔
            </div>
        </div>

    </div>

    <!-- Bagian kanan -->
    <div class="ov-right-side">

        @foreach($ourvalues as $item)

            <div class="ov-card {{ $loop->last ? 'ov-card-fullwidth' : '' }}">

                <h3 class="ov-card-title">
                    {{ $item->judul }}
                </h3>

                <p class="ov-card-text">
                    {!! nl2br(e($item->deskripsi)) !!}
                </p>

            </div>

            @if($loop->iteration == 2 || $loop->iteration == 4)
                <hr class="ov-divider">
            @endif

        @endforeach

    </div>

</div>
   <!-- ========================= -->
<!-- FOOTER -->
<!-- ========================= -->

<footer class="printex-footer">
@include('layouts.footer')
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