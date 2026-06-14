@extends('layouts.app')

@section('content')

<div class="card">

<h2>Tambah Slider</h2>

<form action="{{ route('slider.store') }}"
      method="POST"
      enctype="multipart/form-data">

@csrf

<div class="form-group">
    <label>Judul</label>
    <input type="text"
           name="judul"
           class="form-control">
</div>

<div class="form-group">
    <label>Gambar</label>
    <input type="file"
           name="gambar"
           class="form-control">
</div>

<div class="form-group">
    <label>Posisi</label>

    <select name="posisi"
            class="form-control">

        <option value="beranda">
            Beranda
        </option>

        <option value="pelayanan">
            Pelayanan
        </option>

    </select>
</div>

<div class="form-group">
    <label>Status</label>

    <select name="status"
            class="form-control">

        <option value="1">
            Aktif
        </option>

        <option value="0">
            Tidak Aktif
        </option>

    </select>
</div>

<div class="form-group">
    <label>Urutan</label>

    <input type="number"
           name="urutan"
           value="1"
           class="form-control">
</div>

<button class="btn btn-primary">
    Simpan
</button>

</form>

</div>

@endsection