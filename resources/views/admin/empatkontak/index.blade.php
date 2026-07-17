@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- Memanggil file CSS dan Icon FontAwesome agar gaya visual seragam -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="main-wrapper">
    <div class="container">

        <!-- Notifikasi Sukses memanfaatkan class bawaan css -->
        @if(session('success'))
            <div class="alert-success">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
            </div>
        @endif

        <div class="card">

            <!-- Header Section diselaraskan dengan class css asli -->
            <div class="header-section">
                <h1>Data Empat Kontak</h1>
                
                <!-- Tombol Tambah Kontak disesuaikan dengan warna tema .btn-add -->
                <a href="{{ route('empatkontak.create') }}" class="btn btn-add">
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
                            <!-- Kolom Jenis (Menggunakan class teks tebal bawaan) -->
                            <td class="judul-text">
                                {{ ucfirst($kontak->jenis) }}
                            </td>

                            <!-- Kolom Isi -->
                            <td class="text-muted-row">
                                {{ $kontak->isi }}
                            </td>

                            <!-- Kolom Link (Menggunakan class link bawaan tabel, tanpa inline style) -->
                            <td class="link-row">
                                <a href="{{ $kontak->link }}" target="_blank">
                                    <i class="fa-solid fa-link"></i> Link Tautan
                                </a>
                            </td>

                            <!-- Kolom Aksi -->
                            <td>
                                <div class="aksi">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('empatkontak.edit', $kontak->id) }}" class="btn btn-edit">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus dengan class .btn-delete asli -->
                                    <form action="{{ route('empatkontak.destroy', $kontak->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus kontak ini?')">
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <!-- Menampilkan pesan kosong jika data nihil -->
                            <td colspan="4" class="empty-data">
                                <i class="fa-regular fa-address-book"></i>
                                Belum ada data kontak.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    
    <!-- Footer Terintegrasi bawaan CSS -->
    <footer class="main-footer">
        <span class="footer-copyright">&copy; {{ date('Y') }} Admin Dashboard. All rights reserved.</span>
        <div class="footer-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
        </div>
    </footer>
</div>

@endsection