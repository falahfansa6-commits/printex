<?php
$data = App\Models\Baru::first();
?>

<h1>{{ $data->judul }}</h1>

<p>{{ $data->isi }}</p>

<img src="{{ asset('storage/'.$data->gambar) }}">