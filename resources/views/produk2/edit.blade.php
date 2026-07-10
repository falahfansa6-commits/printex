@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')


<div class="container mt-4">

    <h3>Edit Produk 2</h3>

    <form action="{{ route('produk2.update',$produk2->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Judul</label>

            <input
                type="text"
                name="judul"
                class="form-control"
                value="{{ $produk2->judul }}"
                required>

        </div>

        <div class="mb-3">

            <label>Isi</label>

            <textarea
                name="isi"
                rows="5"
                class="form-control"
                required>{{ $produk2->isi }}</textarea>

        </div>

        <div class="mb-3">

            <label>Gambar Lama</label><br>

            @if($produk2->gambar)

                <img src="{{ asset($produk2->gambar) }}"
                     width="180">

            @endif

        </div>

        <div class="mb-3">

            <label>Ganti Gambar</label>

            <input
                type="file"
                name="gambar"
                class="form-control">

        </div>

        <button class="btn btn-success">

            Update

        </button>

        <a href="{{ route('produk2.index') }}"
           class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>

@endsection