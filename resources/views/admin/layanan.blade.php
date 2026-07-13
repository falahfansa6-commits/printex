@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- Mengubah class "card" menjadi "card-panel" sesuai setelan CSS baru -->
<div class="card-panel">

    <div class="card-header">
        <h2>Dashboard Admin</h2>
    </div>

    <!-- inline style margin dihapus karena sudah di-handle oleh class .card-panel p di CSS -->
    <p>
        Selamat datang di Dashboard Admin <b>Printex</b>. Silakan pilih menu yang ingin dikelola.
    </p>

    <!-- Membungkus tabel agar responsive di layar kecil jika diperlukan -->
    <div class="table-responsive">
        <!-- Mengubah class table menjadi "table-admin" -->
        <table class="table-admin">
            <thead>
                <tr>
                    <th>Menu</th>
                    <!-- Mengubah teks aksi menjadi rata kanan agar terlihat modern -->
                    <th width="150" class="text-right">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Slider</td>
                    <td class="text-right">
                        <!-- Mengubah class menjadi "btn-edit" -->
                        <a href="{{ route('slider.index') }}" class="btn-edit">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Printing Solution</td>
                    <td class="text-right">
                        <a href="#" class="btn-edit">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Gambar</td>
                    <td class="text-right">
                        <a href="#" class="btn-edit">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Our Value</td>
                    <td class="text-right">
                        <a href="#" class="btn-edit">
                            <i class="fa-solid fa-pen"></i> Edit
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection