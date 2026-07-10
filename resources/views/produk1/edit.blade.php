@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')


<div class="container">

<h2>Edit Produk</h2>

<form
action="{{ route('produk1.update',$produk1->id) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

<div style="margin-bottom:15px;">

<label>Judul</label>

<input
type="text"
name="judul"
value="{{ old('judul',$produk1->judul) }}"
class="form-control">

@error('judul')
<small style="color:red">{{ $message }}</small>
@enderror

</div>

<div style="margin-bottom:15px;">

<label>Isi</label>

<textarea
name="isi"
rows="5"
class="form-control">{{ old('isi',$produk1->isi) }}</textarea>

@error('isi')
<small style="color:red">{{ $message }}</small>
@enderror

</div>

<div style="margin-bottom:15px;">

<label>Gambar Lama</label>

<br>

<img
src="{{ asset($produk1->gambar) }}"
width="150">

</div>

<div style="margin-bottom:15px;">

<label>Ganti Gambar</label>

<input
type="file"
name="gambar"
class="form-control">

@error('gambar')
<small style="color:red">{{ $message }}</small>
@enderror

</div>

<button class="btn btn-success">
Update
</button>

<a href="{{ route('produk1.index') }}"
class="btn btn-secondary">
Kembali
</a>

</form>

</div>

@endsection