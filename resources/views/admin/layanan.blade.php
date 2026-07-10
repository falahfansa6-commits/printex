@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')

<div class="card">

    <div class="card-header">
        <h2>Dashboard Admin</h2>
    </div>

    <p style="margin-bottom:25px;">
        Selamat datang di Dashboard Admin <b>Printex</b>. Silakan pilih menu yang ingin dikelola.
    </p>

    <table>

        <thead>
            <tr>
                <th>Menu</th>
                <th width="150">Aksi</th>
            </tr>
        </thead>

        <tbody>

            <tr>
                <td>Slider</td>
                <td>
                    <a href="{{ route('slider.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

            <tr>
                <td>Produk</td>
                <td>
                    <a href="{{ route('service.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

            <tr>
                <td>Gambar</td>
                <td>
                    <a href="{{ route('theprodukimage.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

            <tr>
                <td>Produk</td>
                <td>
                    <a href="{{ route('theproduk.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>
            <tr>
                <td>Produk 1</td>
                <td>
                    <a href="{{ route('produk1.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

              <tr>
                <td>Produk 2</td>
                <td>
                    <a href="{{ route('produk2.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>
              <tr>
                <td>Produk 3</td>
                <td>
                    <a href="{{ route('produk3.index') }}" class="btn">
                        Edit
                    </a>
                </td>
            </tr>

        </tbody>

    </table>

</div>

@endsection