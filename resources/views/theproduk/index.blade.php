@extends('layouts.app')

@section('content')

<div class="card">

    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;margin-bottom:20px;">
        <div>
            <h2>Daftar The Products</h2>
            <p>Kelola data The Products.</p>
        </div>

        <a href="{{ route('theproduk.create') }}" class="btn-tambah">
            + Tambah Data
        </a>
    </div>

    @if(session('success'))
        <div class="alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>

        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Urutan</th>
                <th width="170">Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($theproduk as $item)

            <tr>

                <td>{{ $loop->iteration }}</td>

                <td>{{ $item->judul }}</td>

                <td>{{ Str::limit($item->isi,80) }}</td>

                <td>{{ $item->urutan }}</td>

                <td>

                    <a href="{{ route('theproduk.edit',$item->id) }}" class="btn-edit">
                        Edit
                    </a>

                    <form action="{{ route('theproduk.destroy',$item->id) }}"
                        method="POST"
                        style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button
                            class="btn-hapus"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">

                            Hapus

                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>

                <td colspan="5" style="text-align:center;">
                    Belum ada data.

                </td>

            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection