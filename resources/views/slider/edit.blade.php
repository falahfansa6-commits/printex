@extends('layouts.app')

@section('content')

<h2>Edit Slider</h2>

<form action="{{ route('slider.update',$slider->id) }}"
      method="POST"
      enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div>
        <label>Judul</label>

        <input type="text"
               name="judul"
               value="{{ $slider->judul }}">
    </div>

    <br>

    <div>
        <label>Posisi</label>

        <select name="posisi">

           <option value="beranda"
{{ $slider->posisi == 'beranda' ? 'selected' : '' }}>
Beranda
</option>

<option value="pelayanan"
{{ $slider->posisi == 'pelayanan' ? 'selected' : '' }}>
Pelayanan
</option>

        </select>
    </div>

    <br>

    <div>
        <label>Status</label>

        <select name="status">

            <option value="1"
            {{ $slider->status == 1 ? 'selected' : '' }}>
            Aktif
            </option>

            <option value="0"
            {{ $slider->status == 0 ? 'selected' : '' }}>
            Tidak Aktif
            </option>

        </select>
    </div>

    <br>

    <div>
        <label>Urutan</label>

        <input type="number"
               name="urutan"
               value="{{ $slider->urutan }}">
    </div>

    <br>

    <div>
        <label>Gambar Saat Ini</label>

        <br>

        <img
        src="{{ asset('uploads/slider/'.$slider->gambar) }}"
        width="300">
    </div>

    <br>

    <div>
        <label>Ganti Gambar</label>

        <input type="file"
               name="gambar">
    </div>

    <br>

    <button type="submit">
        Update Slider
    </button>

</form>

@endsection