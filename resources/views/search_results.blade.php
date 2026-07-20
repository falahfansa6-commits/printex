<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Search</title>
</head>
<body>
    <nav>@include('layouts.navbar')</nav>

    <div class="container"style="padding:20px;">
        <h2>Hasil Pencarian untuk: "{{$keyword}}"</h2>

        @if($results->count() > 0 )
        @foreach ($results as $item )

        <div class="item-hasil">
        <h3>{{ $item->judul }}</h3>
        <p>{{ $item->isi }}</p>
        </div>
        @endforeach
        @else
        <p>Tidak ada hasil yang di temukan untuk akta kunci tersebut.</p>
        @endif
            
        

    </div>
    
</body>
</html>