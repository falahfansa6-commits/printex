@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')

<div class="container mt-4">

    <h3>Tambah Produk 2</h3>

    <form action="{{ route('produk2.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div class="mb-3">
            <label>Judul</label>

            <input
                type="text"
                name="judul"
                class="form-control"
                required>
        </div>

        <div class="mb-3">
            <label>Isi</label>

            <textarea
                name="isi"
                rows="5"
                class="form-control"
                required></textarea>
        </div>

        <div class="mb-3">
            <label>Gambar</label>

            <input
                type="file"
                name="gambar"
                class="form-control"
                required>
        </div>

        <button class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('produk2.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection