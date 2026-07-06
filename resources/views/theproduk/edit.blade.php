@extends('layouts.app')

@section('content')

<div class="form-card">

    <h2>Edit The Product</h2>

    <form action="{{ route('theproduk.update',$theproduk->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="form-group">

            <label>Judul</label>

            <input
                type="text"
                name="judul"
                maxlength="20"
                value="{{ old('judul',$theproduk->judul) }}"
                required>

            @error('judul')
                <small class="text-error">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <label>Isi</label>

            <textarea
                name="isi"
                rows="6"
                required>{{ old('isi',$theproduk->isi) }}</textarea>

            @error('isi')
                <small class="text-error">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <label>Urutan</label>

            <input
                type="number"
                name="urutan"
                value="{{ old('urutan',$theproduk->urutan) }}"
                required>

            @error('urutan')
                <small class="text-error">{{ $message }}</small>
            @enderror

        </div>

        <button class="btn-simpan">
            Update
        </button>

        <a href="{{ route('theproduk.index') }}" class="btn-kembali">
            Kembali
        </a>

    </form>

</div>

@endsection