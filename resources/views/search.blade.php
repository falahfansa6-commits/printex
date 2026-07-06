<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Pencarian</title>
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
   <style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f4f7fb;
}

.search-container{
    width:90%;
    max-width:900px;
    margin:60px auto;
}

.search-container h1{
    font-size:34px;
    margin-bottom:10px;
    color:#222;
}

.keyword{
    color:#666;
    margin-bottom:35px;
    font-size:16px;
}

.keyword span{
    color:#0d9488;
    font-weight:600;
}

.search-card{
    background:#fff;
    border-radius:18px;
    padding:28px;
    margin-bottom:20px;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
    transition:.3s;
}

.search-card:hover{
    transform:translateY(-5px);
    box-shadow:0 12px 35px rgba(0,0,0,.12);
}

.category{
    display:inline-block;
    background:#0d9488;
    color:white;
    padding:6px 14px;
    border-radius:50px;
    font-size:13px;
    margin-bottom:15px;
    font-weight:500;
}

.search-card h2{
    color:#222;
    font-size:24px;
    margin-bottom:20px;
}

.btn-open{
    display:inline-block;
    text-decoration:none;
    background:#ef4444;
    color:white;
    padding:12px 22px;
    border-radius:10px;
    transition:.3s;
    font-weight:600;
}

.btn-open:hover{
    background:#dc2626;
}

.not-found{
    background:white;
    border-radius:18px;
    padding:50px;
    text-align:center;
    box-shadow:0 8px 25px rgba(0,0,0,.08);
}

.not-found h2{
    color:#ef4444;
    margin-bottom:10px;
}

.not-found p{
    color:#666;
}
</style>
</head>
<body>

<div class="search-container">

    <h1>🔍 Hasil Pencarian</h1>

    <p class="keyword">
        Kata kunci :
        <span>"{{ $keyword }}"</span>
    </p>

    @if(count($hasil) > 0)

        @foreach($hasil as $item)

            <div class="search-card">

                <div class="category">
                    {{ $item['kategori'] }}
                </div>

                <h2>{{ $item['judul'] }}</h2>

                <a href="{{ $item['url'] }}" class="btn-open">
                    Buka Halaman →
                </a>

            </div>

        @endforeach

    @else

        <div class="not-found">
            <h2>😥 Tidak ada hasil ditemukan</h2>
            <p>Coba gunakan kata kunci lain.</p>
        </div>

    @endif

</div>

</body>
</html>