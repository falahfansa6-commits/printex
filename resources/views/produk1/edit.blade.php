@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar gaya visual form seragam -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <!-- Menggunakan batas max-width kecil agar layout form tetap proporsional -->
    <div class="container" style="max-width: 600px;">
        
        <div class="card">
            
            <!-- Bagian Header Form -->
            <div class="header-section" style="border-bottom: 1px solid #e2e8f0; padding-bottom: 10px;">
                <h1>Edit Produk</h1>
            </div>

            <!-- Blok Pesan Error Validasi Global -->
            @if($errors->any())
                <div class="alert-danger">
                    <p style="margin: 0; font-weight: bold;">
                        <i class="fa-solid fa-triangle-exclamation"></i> Harap perbaiki kesalahan pengisian form di bawah ini.
                    </p>
                </div>
            @endif

            <!-- Form edit produk -->
            <form action="{{ route('produk1.update', $produk1->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Input Judul -->
                <div class="form-group">
                    <label for="judul">Judul <span style="color: #ef4444;">*</span></label>
                    <input 
                        type="text" 
                        id="judul" 
                        name="judul" 
                        value="{{ old('judul', $produk1->judul) }}" 
                        placeholder="Masukkan judul produk"
                        class="@error('judul') is-invalid @enderror">
                    @error('judul')
                        <small style="color: #ef4444; font-size: 12px; margin-top: 4px; display: block;">
                            <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                        </small>
                    @enderror
                </div>

                <!-- Input Isi / Deskripsi -->
                <div class="form-group">
                    <label for="isi">Isi / Deskripsi <span style="color: #ef4444;">*</span></label>
                    <textarea 
                        id="isi" 
                        name="isi" 
                        rows="5" 
                        placeholder="Masukkan deskripsi lengkap produk"
                        class="@error('isi') is-invalid @enderror">{{ old('isi', $produk1->isi) }}</textarea>
                    @error('isi')
                        <small style="color: #ef4444; font-size: 12px; margin-top: 4px; display: block;">
                            <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                        </small>
                    @enderror
                </div>

                <!-- Preview Gambar Saat Ini memanfaatkan class img-thumbnail-wrapper -->
                <div class="form-group">
                    <label>Gambar Saat Ini</label>
                    <div class="img-thumbnail-wrapper" style="width: 200px; height: auto;">
                        <img src="{{ asset($produk1->gambar) }}" alt="Preview Gambar">
                    </div>
                </div>

                <!-- Input Ganti Gambar -->
                <div class="form-group">
                    <label for="gambar">Ganti Gambar</label>
                    <input 
                        type="file" 
                        id="gambar" 
                        name="gambar"
                        class="@error('gambar') is-invalid @enderror">
                    <small class="text-muted-row" style="margin-top: 4px; display: block;">*Biarkan kosong jika tidak ingin mengubah gambar.</small>
                    @error('gambar')
                        <small style="color: #ef4444; font-size: 12px; margin-top: 4px; display: block;">
                            <i class="fa-solid fa-circle-exclamation"></i> {{ $message }}
                        </small>
                    @enderror
                </div>

                <!-- Kelompok Tombol Aksi menggunakan wrapper .aksi bawaan CSS -->
                <div class="aksi" style="justify-content: flex-start; margin-top: 25px; gap: 10px;">
                    <button type="submit" class="btn btn-add" style="background: #10b981;">
                        <i class="fa-solid fa-floppy-disk"></i> Update Data
                    </button>
                    <a href="{{ route('produk1.index') }}" class="btn btn-edit" style="background: #64748b; color: white;">
                        <i class="fa-solid fa-arrow-left"></i> Batal
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection