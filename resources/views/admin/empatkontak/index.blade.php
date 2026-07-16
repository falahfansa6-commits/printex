@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar gaya visual dan tabel admin seragam -->
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
                <h2 style="margin: 0;">Data Empat Kontak</h2>
                
                <!-- Tombol Tambah Kontak -->
                <a href="{{ route('empatkontak.create') }}" class="btn btn-edit" style="background-color: #0ea5e9; border-color: #0ea5e9; display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">
                    <i class="fa-solid fa-plus"></i> Tambah Kontak
                </a>
            </div>

            <!-- Pembungkus responsif dan tabel admin-table agar layout seragam -->
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th width="150">Jenis</th>
                            <th>Isi Kontak</th>
                            <th>Link</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($empatkontaks as $kontak)
                        <tr>
                            <!-- Kolom Jenis -->
                            <td style="font-weight: 600; color: #1e293b;">
                                {{ ucfirst($kontak->jenis) }}
                            </td>

                            <!-- Kolom Isi -->
                            <td style="color: #334155;">
                                {{ $kontak->isi }}
                            </td>

                            <!-- Kolom Link -->
                            <td>
                                <a href="{{ $kontak->link }}" target="_blank" style="color: #0ea5e9; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                    <i class="fa-solid fa-link" style="font-size: 12px;"></i> {{ $kontak->link }}
                                </a>
                            </td>

                            <!-- Kolom Aksi -->
                            <td>
                                <div class="aksi" style="display: flex; gap: 8px;">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('empatkontak.edit', $kontak->id) }}" class="btn btn-edit">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus -->
                                    <form action="{{ route('empatkontak.destroy', $kontak->id) }}" method="POST" style="margin: 0; display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus kontak ini?')" style="background-color: #ef4444; border-color: #ef4444; color: white; cursor: pointer; display: inline-flex; align-items: center; gap: 6px;">
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" style="text-align: center; color: #64748b; padding: 30px 20px;">
                                <i class="fa-regular fa-address-book" style="font-size: 24px; margin-bottom: 8px; display: block; color: #cbd5e1;"></i>
                                Belum ada data kontak.
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