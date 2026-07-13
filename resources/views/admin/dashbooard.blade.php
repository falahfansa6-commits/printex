@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<!-- Menambahkan class container agar layout memiliki ruang spasi yang pas -->
<div class="card container-dashboard">

    <div class="card-header">
        <h2>Dashboard Admin</h2>
    </div>

    <p style="margin-bottom:25px;">
        Selamat datang di Dashboard Admin <b>Printex</b>. Silakan pilih menu yang ingin dikelola.
    </p>

    <!-- Pembungkus tabel agar spasi kanan-kiri rapi dan responsif -->
    <div class="table-responsive">
        <table class="table-modern">
            <thead>
                <tr>
                    <th>Menu</th>
                    <!-- Menambahkan class text-right agar kolom aksi bergeser ke kanan dengan rapi -->
                    <th width="150" class="text-right">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Slider</td>
                    <td class="text-right">
                        <a href="{{ route('slider.index') }}" class="btn">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Printing Solution</td>
                    <td class="text-right">
                        <a href="#" class="btn">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Gambar</td>
                    <td class="text-right">
                        <a href="#" class="btn">
                            Edit
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Our Value</td>
                    <td class="text-right">
                        <a href="#" class="btn">
                            Edit
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

@endsection