@extends('layouts.admin')

@section('title', 'Tambah Our Value')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar visual form seragam -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <div class="container" style="max-width: 800px; margin: 0 auto;">
        
        <!-- Notifikasi Error/Validasi Form -->
        @if($errors->any())
            <div class="alert alert-danger" style="margin-bottom: 20px; padding: 15px; background-color: #fef2f2; border: 1px solid #fecaca; color: #991b1b; border-radius: 8px; font-size: 14px;">
                <p style="margin: 0 0 8px 0; font-weight: bold;"><i class="fa-solid fa-triangle-exclamation"></i> Harap perbaiki kesalahan berikut:</p>
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card">
            
            <div class="header-section" style="margin-bottom: 25px; border-bottom: 1px solid #e2e8f0; padding-bottom: 15px;">
                <h2 style="margin: 0;">Tambah Our Value</h2>
            </div>

            <!-- Form input dengan style modern -->
            <form action="{{ route('ourvalues.store') }}" method="POST">
                @csrf

                <!-- Input Judul -->
                <div class="form-group" style="margin-bottom: 20px; display: flex; flex-direction: column; gap: 8px;">
                    <label style="font-weight: 600; color: #334155; font-size: 14px;">Judul</label>
                    <input type="text" name="judul" value="{{ old('judul') }}" placeholder="Masukkan judul..." style="padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; transition: border-color 0.2s;" onfocus="this.style.borderColor='#0ea5e9'" onblur="this.style.borderColor='#cbd5e1'">
                </div>

                <!-- Input Deskripsi -->
                <div class="form-group" style="margin-bottom: 20px; display: flex; flex-direction: column; gap: 8px;">
                    <label style="font-weight: 600; color: #334155; font-size: 14px;">Deskripsi</label>
                    <textarea name="deskripsi" rows="5" placeholder="Tuliskan deskripsi lengkap di sini..." style="padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; resize: vertical; transition: border-color 0.2s;" onfocus="this.style.borderColor='#0ea5e9'" onblur="this.style.borderColor='#cbd5e1'">{{ old('deskripsi') }}</textarea>
                </div>

                <!-- Baris Urutan dan Status Berdampingan -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 20px; margin-bottom: 30px;">
                    <!-- Input Urutan -->
                    <div class="form-group" style="display: flex; flex-direction: column; gap: 8px;">
                        <label style="font-weight: 600; color: #334155; font-size: 14px;">Urutan</label>
                        <input type="number" name="urutan" value="{{ old('urutan') }}" placeholder="Contoh: 1" style="padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none;" onfocus="this.style.borderColor='#0ea5e9'" onblur="this.style.borderColor='#cbd5e1'">
                    </div>

                    <!-- Pilihan Status -->
                    <div class="form-group" style="display: flex; flex-direction: column; gap: 8px;">
                        <label style="font-weight: 600; color: #334155; font-size: 14px;">Status</label>
                        <select name="status" style="padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; background-color: white;" onfocus="this.style.borderColor='#0ea5e9'" onblur="this.style.borderColor='#cbd5e1'">
                            <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Aktif</option>
                            <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Tidak Aktif</option>
                        </select>
                    </div>
                </div>

                <!-- Bagian Tombol Aksi / Submit Form -->
                <div class="form-actions" style="display: flex; gap: 12px; border-top: 1px solid #e2e8f0; padding-top: 20px;">
                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-edit" style="background-color: #10b981; border-color: #10b981; color: white; display: inline-flex; align-items: center; gap: 8px; cursor: pointer; font-weight: 600; padding: 10px 20px;">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>

                    <!-- Tombol Kembali -->
                    <a href="{{ route('ourvalues.index') }}" class="btn btn-edit" style="background-color: #64748b; border-color: #64748b; color: white; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; font-weight: 600; padding: 10px 20px;">
                        <i class="fa-solid fa-arrow-left"></i> Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection