@extends('layouts.app')

@section('content')

<div class="container">

<h2>Tambah Produk</h2>

<form
action="{{ route('produk1.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

<div style="margin-bottom:15px;">
<label>Judul</label>

<input
type="text"
name="judul"
value="{{ old('judul') }}"
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
class="form-control">{{ old('isi') }}</textarea>

@error('isi')
<small style="color:red">{{ $message }}</small>
@enderror

</div>

<div style="margin-bottom:15px;">

<label>Gambar</label>

<input
type="file"
name="gambar"
class="form-control">

@error('gambar')
<small style="color:red">{{ $message }}</small>
@enderror

</div>

<button class="btn btn-primary">
Simpan
</button>

<a href="{{ route('produk1.index') }}"
class="btn btn-secondary">
Kembali
</a>

</form>

</div>

@endsection