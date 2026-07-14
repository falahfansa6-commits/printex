@extends('layouts.admin')

@section('title', 'Our Value')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar gaya visual seragam -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <div class="container">
        
        <!-- Notifikasi Sukses dengan gaya card modern -->
        @if(session('success'))
            <div class="alert alert-success" style="margin-bottom: 20px; padding: 12px 16px; background-color: #f0fdf4; color: #16a34a; border: 1px solid #bbf7d0; border-radius: 8px; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
            </div>
        @endif

        <div class="card">
            
            <!-- Header Section disamakan dengan halaman About / Slider -->
            <div class="header-section" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; gap: 15px; flex-wrap: wrap;">
                <h2 style="margin: 0;">Data Our Value</h2>
                
                <!-- Tombol Tambah Data menggunakan kelas .btn-edit sebagai basis warna/ukuran -->
                <a href="{{ route('ourvalues.create') }}" class="btn btn-edit" style="background-color: #0ea5e9; border-color: #0ea5e9; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
                    <i class="fa-solid fa-plus"></i> Tambah Data
                </a>
            </div>

            <!-- Menggunakan pembungkus responsif dan kelas tabel admin-table agar sama dengan Slider / Lokasi -->
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th width="60">No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th width="80">Urutan</th>
                            <th width="120">Status</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ourvalues as $item)
                        <tr>
                            <!-- Kolom No -->
                            <td>{{ $loop->iteration }}</td>
                            
                            <!-- Judul menggunakan kelas .judul-text agar tebalnya sama seperti di halaman Slider -->
                            <td class="judul-text">{{ $item->judul }}</td>
                            
                            <!-- Kolom Deskripsi dengan pembatasan style agar tetap rapi -->
                            <td style="color: #475569; font-size: 14px; max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                {{ $item->deskripsi }}
                            </td>
                            
                            <!-- Kolom Urutan -->
                            <td>{{ $item->urutan }}</td>
                            
                            <!-- Kolom Status dengan badge styling minimalis -->
                            <td>
                                <span style="display: inline-block; padding: 4px 10px; border-radius: 50px; font-size: 12px; font-weight: 600; {{ $item->status ? 'background-color: #d1e7dd; color: #0f5132;' : 'background-color: #f8d7da; color: #842029;' }}">
                                    {{ $item->status ? 'Aktif' : 'Tidak Aktif' }}
                                </span>
                            </td>
                            
                            <!-- Kolom Aksi dengan tombol Edit & Hapus -->
                            <td>
                                <div class="aksi" style="display: flex; gap: 8px;">
                                    <!-- Tombol Edit menggunakan class murni slider.css -->
                                    <a href="{{ route('ourvalues.edit', $item->id) }}" class="btn btn-edit">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus disamakan ukurannya dengan tombol Edit -->
                                    <form action="{{ route('ourvalues.destroy', $item->id) }}" method="POST" style="margin: 0; display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete" onclick="return confirm('Yakin hapus?')" style="background-color: #ef4444; border-color: #ef4444; color: white; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection