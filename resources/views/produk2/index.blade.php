@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar visual tabel admin seragam -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <div class="container">
        
        <!-- Notifikasi Sukses dengan gaya alert modern -->
        @if(session('success'))
            <div class="alert alert-success" style="margin-bottom: 20px; padding: 12px 16px; background-color: #f0fdf4; color: #16a34a; border: 1px solid #bbf7d0; border-radius: 8px; font-size: 14px; display: flex; align-items: center; gap: 8px;">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
            </div>
        @endif

        <div class="card">
            
            <!-- Header Section diselaraskan dengan halaman admin lainnya -->
            <div class="header-section" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; gap: 15px; flex-wrap: wrap;">
                <h2 style="margin: 0;">Data Produk 2</h2>
                
                <!-- Tombol Tambah Data -->
                <a href="{{ route('produk2.create') }}" class="btn btn-edit" style="background-color: #0ea5e9; border-color: #0ea5e9; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
                    <i class="fa-solid fa-plus"></i> Tambah Data
                </a>
            </div>

            <!-- Pembungkus responsif dan tabel admin-table agar layout seragam -->
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th width="80">No</th>
                            <th width="120">Gambar</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($produk2 as $item)
                        <tr>
                            <!-- Kolom No -->
                            <td>{{ $loop->iteration }}</td>
                            
                            <!-- Kolom Gambar dengan preview yang rapi -->
                            <td>
                                <div style="width: 80px; height: 80px; border-radius: 8px; overflow: hidden; border: 1px solid #e2e8f0; display: flex; align-items: center; justify-content: center; background-color: #f8fafc;">
                                    @if($item->gambar)
                                        <img src="{{ asset($item->gambar) }}" alt="Gambar Produk 2" style="width: 100%; height: 100%; object-fit: cover;">
                                    @else
                                        <i class="fa-regular fa-image" style="font-size: 20px; color: #cbd5e1;"></i>
                                    @endif
                                </div>
                            </td>
                            
                            <!-- Kolom Judul -->
                            <td style="font-weight: 600; color: #1e293b;">{{ $item->judul }}</td>
                            
                            <!-- Kolom Isi/Deskripsi -->
                            <td style="color: #64748b; max-width: 300px; white-space: normal; word-break: break-word;">{{ $item->isi }}</td>
                            
                            <!-- Kolom Aksi -->
                            <td>
                                <div class="aksi" style="display: flex; gap: 8px;">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('produk2.edit', $item->id) }}" class="btn btn-edit">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('produk2.destroy', $item->id) }}" method="POST" style="margin: 0; display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus?')" style="background-color: #ef4444; border-color: #ef4444; color: white; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" style="text-align: center; color: #64748b; padding: 30px 20px;">
                                <i class="fa-regular fa-folder-open" style="font-size: 24px; margin-bottom: 8px; display: block; color: #cbd5e1;"></i>
                                Belum ada data produk 2.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

@endsection