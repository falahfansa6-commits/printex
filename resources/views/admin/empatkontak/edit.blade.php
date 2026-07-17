@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- Memanggil asset FontAwesome dan CSS utama -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <!-- Membatasi lebar kontainer form secara proporsional menggunakan max-width inline mini -->
    <div class="container" style="max-width: 600px;">
        
        <div class="card">
            
            <!-- Bagian Header Form -->
            <div class="header-section" style="border-bottom: 1px solid #e2e8f0; padding-bottom: 10px;">
                <h1>Edit Kontak</h1>
            </div>

            <!-- Blok Pesan Error Validasi -->
            @if ($errors->any())
                <div class="alert-danger">
                    <ul style="margin: 0; padding-left: 20px;">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('empatkontak.update', $empatkontak->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Dropdown Pilihan Jenis Kontak -->
                <div class="form-group">
                    <label for="jenis">Jenis Kontak</label>
                    <select id="jenis" name="jenis" required>
                        <option value="email" {{ old('jenis', $empatkontak->jenis) == 'email' ? 'selected' : '' }}>Email</option>
                        <option value="kantor" {{ old('jenis', $empatkontak->jenis) == 'kantor' ? 'selected' : '' }}>Kantor</option>
                        <option value="telepon" {{ old('jenis', $empatkontak->jenis) == 'telepon' ? 'selected' : '' }}>Telepon</option>
                        <option value="whatsapp" {{ old('jenis', $empatkontak->jenis) == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
                    </select>
                </div>

                <!-- Input Isi Kontak -->
                <div class="form-group">
                    <label for="isi">Isi Kontak</label>
                    <input 
                        type="text" 
                        id="isi" 
                        name="isi" 
                        value="{{ old('isi', $empatkontak->isi) }}" 
                        required>
                </div>

                <!-- Input Tautan / Link -->
                <div class="form-group">
                    <label for="link">Link Tautan</label>
                    <input 
                        type="text" 
                        id="link" 
                        name="link" 
                        value="{{ old('link', $empatkontak->link) }}" 
                        required>
                </div>

                <!-- Kelompok Tombol Aksi menggunakan wrapper .aksi bawaan CSS -->
                <div class="aksi" style="justify-content: flex-start; margin-top: 25px; gap: 10px;">
                    <button type="submit" class="btn btn-add" style="background: #10b981;">
                        <i class="fa-solid fa-floppy-disk"></i> Update Data
                    </button>
                    <a href="{{ route('empatkontak.index') }}" class="btn btn-edit" style="background: #64748b; color: white;">
                        <i class="fa-solid fa-arrow-left"></i> Batal
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection