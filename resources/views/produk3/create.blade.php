@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <div class="container" style="max-width: 600px;">
        
        <div class="card">
            
            <div class="header-section" style="border-bottom: 1px solid #e2e8f0; padding-bottom: 10px;">
                <h1>Tambah Produk 3</h1>
            </div>

            <form action="{{ route('produk3.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Field Judul -->
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul') }}" placeholder="Masukkan nama atau judul produk..." required>
                    @error('judul')
                        <span style="color: #ef4444; font-size: 12px; margin-top: 4px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Field Deskripsi -->
                <div class="form-group">
                    <label for="isi">Deskripsi</label>
                    <textarea id="isi" name="isi" rows="6" placeholder="Tuliskan keterangan lengkap produk..." required>{{ old('isi') }}</textarea>
                    @error('isi')
                        <span style="color: #ef4444; font-size: 12px; margin-top: 4px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Field Unggah Gambar -->
                <div class="form-group">
                    <label for="gambar">File Gambar</label>
                    <input type="file" id="gambar" name="gambar" accept="image/*" required>
                    @error('gambar')
                        <span style="color: #ef4444; font-size: 12px; margin-top: 4px;">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Tombol Simpan / Batal -->
                <div class="aksi" style="justify-content: flex-start; margin-top: 25px; gap: 10px;">
                    <button type="submit" class="btn btn-add">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan Data
                    </button>
                    <a href="{{ route('produk3.index') }}" class="btn btn-edit" style="background: #64748b; color: white;">
                        <i class="fa-solid fa-arrow-left"></i> Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection