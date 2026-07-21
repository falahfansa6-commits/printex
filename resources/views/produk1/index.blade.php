@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<!-- Memanggil file CSS dan Icon FontAwesome agar visual tabel admin seragam -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <div class="container">
        
        <!-- Notifikasi Sukses bawaan dari slider.css -->
        @if(session('success'))
            <div class="alert-success">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
            </div>
        @endif

        <div class="card">
            
            <!-- Header Section diselaraskan menggunakan flex global -->
            <div class="header-section" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h1 style="margin: 0;">Data Produk</h1>
                
                <!-- Tombol Tambah Data -->
                <a href="{{ route('produk1.create') }}" class="btn btn-add">
                    <i class="fa-solid fa-plus"></i> Tambah Data
                </a>
            </div>

            <!-- Pembungkus responsif dan tabel admin-table agar layout seragam -->
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th width="120">Gambar</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th width="200">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produk1 as $item)
                        <tr>
                            <!-- Kolom No -->
                            <td>{{ $loop->iteration }}</td>
                            
                            <!-- Kolom Gambar menggunakan thumbnail wrapper standar -->
                            <td>
                                <div class="img-thumbnail-wrapper" style="width: 80px; height: 80px;">
                                    <img src="{{ asset($item->gambar) }}" alt="Gambar Produk">
                                </div>
                            </td>
                            
                            <!-- Kolom Judul -->
                            <td class="judul-row">{{ $item->judul }}</td>
                            
                            <!-- Kolom Isi/Deskripsi -->
                            <td class="text-muted-row">{{ $item->isi }}</td>
                            
                            <!-- Kolom Aksi -->
                            <td>
                                <div class="aksi">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('produk1.edit', $item->id) }}" class="btn btn-edit">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('produk1.destroy', $item->id) }}" method="POST" style="margin: 0; display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')">
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 40px 20px;">
                                <i class="fa-regular fa-folder-open" style="font-size: 28px; margin-bottom: 10px; display: block; color: #cbd5e1;"></i>
                                <span class="text-muted-row">Belum ada data produk.</span>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
 <br>
  <a href="{{ route('admin.layanan') }}" class="btn btn-back" style="background: #64748b; color: #fff;">
                        <i class="fa-solid fa-arrow-left"></i> Kembali
                    </a>
        </div>
    </div>
</div>

@endsection