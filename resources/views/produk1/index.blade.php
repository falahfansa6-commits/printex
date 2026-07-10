@extends('layouts.admin')

@section('title', 'Layanan')

@section('content')


<div class="container">
    <div style="display:flex;justify-content:space-between;align-items:center;margin-bottom:20px;">
        <h2>Data Produk</h2>

        <a href="{{ route('produk1.create') }}" class="btn btn-primary">
            + Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Gambar</th>
                <th>Judul</th>
                <th>Isi</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($produk1 as $item)

            <tr>
                <td>{{ $loop->iteration }}</td>

                <td>
                    <img src="{{ asset($item->gambar) }}"
                         width="100">
                </td>

                <td>{{ $item->judul }}</td>

                <td>{{ $item->isi }}</td>

                <td>

                    <a href="{{ route('produk1.edit',$item->id) }}"
                       class="btn btn-warning">
                        Edit
                    </a>

                    <form
                        action="{{ route('produk1.destroy',$item->id) }}"
                        method="POST"
                        style="display:inline;">

                        @csrf
                        @method('DELETE')

                        <button
                            onclick="return confirm('Yakin ingin menghapus?')"
                            class="btn btn-danger">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="5" align="center">
                    Belum ada data.
                </td>
            </tr>

        @endforelse

        </tbody>
    </table>

</div>

@endsection