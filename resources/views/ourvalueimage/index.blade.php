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
                <h1>Data Gambar Our Value</h1>
                
                <!-- Tombol Tambah Gambar disesuaikan dengan warna tema .btn-add -->
                <a href="{{ route('ourvalueimage.create') }}" class="btn btn-add">
                    <i class="fa-solid fa-plus"></i> Tambah Gambar
                </a>
            </div>

            <!-- Pembungkus responsif dan tabel admin-table agar layout seragam -->
            <div class="table-responsive">
                <table class="admin-table">
                    <thead>
                        <tr>
                            <th width="80">No</th>
                            <th>Gambar</th>
                            <th width="180">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($gambar as $item)
                        <tr>
                            <!-- Kolom No -->
                            <td>{{ $loop->iteration }}</td>
                            
                            <!-- Kolom Gambar dengan preview memanfaatkan class img-thumbnail-wrapper bawaan css -->
                            <td>
                                <div class="img-thumbnail-wrapper">
                                    <img src="{{ asset($item->gambar) }}" alt="Our Value Image">
                                </div>
                            </td>
                            
                            <!-- Kolom Aksi dengan tombol Edit & Hapus murni class css -->
                            <td>
                                <div class="aksi">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('ourvalueimage.edit', $item->id) }}" class="btn btn-edit">
                                        <i class="fa-solid fa-pen"></i> Edit
                                    </a>

                                    <!-- Tombol Hapus dengan class .btn-delete asli -->
                                    <form action="{{ route('ourvalueimage.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus gambar ini?')">
                                            <i class="fa-solid fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <!-- Menampilkan pesan kosong jika data nihil -->
                            <td colspan="3" class="empty-data">
                                <i class="fa-regular fa-image"></i>
                                Belum ada data gambar yang ditambahkan.
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