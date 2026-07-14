@extends('layouts.admin')

@section('title', 'Tambah Gambar Our Value')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar gaya visual form seragam -->
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
                <h2 style="margin: 0;">Tambah Gambar Our Value</h2>
            </div>

            <!-- Form tambah gambar -->
            <form action="{{ route('ourvalueimage.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Input Pilih Gambar -->
                <div class="form-group" style="margin-bottom: 30px; display: flex; flex-direction: column; gap: 8px;">
                    <label style="font-weight: 600; color: #334155; font-size: 14px;">Pilih Gambar <span style="color: #ef4444;">*</span></label>
                    <input type="file" name="gambar" required style="padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; background-color: #f8fafc;" onfocus="this.style.borderColor='#0ea5e9'" onblur="this.style.borderColor='#cbd5e1'">
                    <small style="color: #64748b; font-size: 12px;">Format yang didukung: JPG, JPEG, PNG, atau WEBP.</small>
                </div>

                <!-- Bagian Tombol Aksi / Submit Form -->
                <div class="form-actions" style="display: flex; gap: 12px; border-top: 1px solid #e2e8f0; padding-top: 20px;">
                    <!-- Tombol Simpan -->
                    <button type="submit" class="btn btn-edit" style="background-color: #10b981; border-color: #10b981; color: white; display: inline-flex; align-items: center; gap: 8px; cursor: pointer; font-weight: 600; padding: 10px 20px;">
                        <i class="fa-solid fa-floppy-disk"></i> Simpan
                    </button>

                    <!-- Tombol Kembali -->
                    <a href="{{ route('ourvalueimage.index') }}" class="btn btn-edit" style="background-color: #64748b; border-color: #64748b; color: white; display: inline-flex; align-items: center; gap: 8px; text-decoration: none; font-weight: 600; padding: 10px 20px;">
                        <i class="fa-solid fa-arrow-left"></i> Kembali
                    </a>
                </div>

            </form>

        </div>
    </div>
</div>

@endsection