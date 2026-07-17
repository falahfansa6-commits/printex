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
                <h1>Edit Our Value</h1>
            </div>

            <!-- Blok Pesan Error Validasi Global -->
            @if($errors->any())
                <div class="alert-danger">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form update dengan data yang sudah terisi otomatis -->
            <form action="{{ route('ourvalues.update', $ourvalue->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Input Judul -->
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input 
                        type="text" 
                        id="judul"
                        name="judul" 
                        value="{{ old('judul', $ourvalue->judul) }}" 
                        placeholder="Masukkan judul..." 
                        required>
                </div>

                <!-- Input Deskripsi -->
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea 
                        id="deskripsi"
                        name="deskripsi" 
                        rows="5" 
                        placeholder="Tuliskan deskripsi lengkap di sini..." 
                        required>{{ old('deskripsi', $ourvalue->deskripsi) }}</textarea>
                </div>

                <!-- Input Urutan -->
                <div class="form-group">
                    <label for="urutan">Urutan Halaman</label>
                    <input 
                        type="number" 
                        id="urutan"
                        name="urutan" 
                        value="{{ old('urutan', $ourvalue->urutan) }}" 
                        placeholder="Contoh: 1" 
                        required>
                </div>

                <!-- Pilihan Status -->
                <div class="form-group">
                    <label for="status">Status</label>
                    <select id="status" name="status" required>
                        <option value="1" {{ old('status', $ourvalue->status) == '1' ? 'selected' : '' }}>Aktif</option>
                        <option value="0" {{ old('status', $ourvalue->status) == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                    </select>
                </div>

                <!-- Kelompok Tombol Aksi menggunakan wrapper .aksi bawaan CSS -->
                <div class="aksi" style="justify-content: flex-start; margin-top: 25px; gap: 10px;">
                    <button type="submit" class="btn btn-add" style="background: #10b981;">
                        <i class="fa-solid fa-floppy-disk"></i> Update Data
                    </button>
                    <a href="{{ route('ourvalues.index') }}" class="btn btn-edit" style="background: #64748b; color: white;">
                        <i class="fa-solid fa-arrow-left"></i> Batal
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection