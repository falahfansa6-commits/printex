@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar visual dan gaya tabel admin seragam -->
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
                <div>
                    <h2 style="margin: 0;">Daftar The Products</h2>
                    <p style="margin: 5px 0 0 0; color: #64748b; font-size: 14px;">Kelola data The Products.</p>
                </div>
                
                <!-- Tombol Tambah Data -->
                <a href="{{ route('theproduk.create') }}" class="btn btn-edit" style="background-color: #0ea5e9; border-color: #0ea5e9; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
                    <i class="fa-solid fa-plus"></i> Tambah Data
                </a>
            </div>

            <!-- Pembungkus responsif dan tabel admin-table agar layout seragam -->
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th width="80">No</th>
                            <th>Judul</th>
                            <th>Isi</th>
                            <th width="100">Urutan</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($theproduk as $item)
                        <tr>
                            <!-- Kolom No -->
                            <td>{{ $loop->iteration }}</td>

                            <!-- Kolom Judul -->
                            <td style="font-weight: 600; color: #1e293b;">
                                {{ $item->judul }}
                            </td>

                            <!-- Kolom Isi/Deskripsi (dibatasi 80 karakter agar rapi) -->
                            <td style="color: #64748b; max-width: 350px; white-space: normal; word-break: break-word;">
                                {{ Str::limit($item->isi, 80) }}
                            </td>

                            <!-- Kolom Urutan -->
                            <td style="text-align: center; font-weight: 600; color: #0f172a;">
                                <span style="background-color: #f1f5f9; padding: 4px 10px; border-radius: 20px; font-size: 13px; border: 1px solid #e2e8f0;">
                                    {{ $item->urutan }}
                                </span>
                            </td>

                            <!-- Kolom Aksi -->
                            <td>
                                <div class="aksi" style="display: flex; gap: 8px;">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('theproduk.edit', $item->id) }}" class="btn btn-edit">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('theproduk.destroy', $item->id) }}" method="POST" style="margin: 0; display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')" style="background-color: #ef4444; border-color: #ef4444; color: white; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
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
                                Belum ada data produk.
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