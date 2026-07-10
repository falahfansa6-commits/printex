@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h3>Data Produk 2</h3>

        <a href="{{ route('produk2.create') }}" class="btn btn-primary">
            Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">

        <thead>

            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th width="180">Aksi</th>
            </tr>

        </thead>

        <tbody>

            @foreach($produk2 as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->judul }}</td>

                <td>{{ $item->isi }}</td>

                <td>

                    @if($item->gambar)

                        <img src="{{ asset($item->gambar) }}"
                             width="120">

                    @endif

                </td>

                <td>

                    <a href="{{ route('produk2.edit',$item->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('produk2.destroy',$item->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Yakin ingin menghapus?')"
                            class="btn btn-danger btn-sm">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection