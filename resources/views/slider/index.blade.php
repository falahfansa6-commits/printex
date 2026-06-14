@extends('layouts.app')

@section('content')
<div class="card">
    <div style="display:flex; justify-content:space-between; align-items:center; gap:12px; margin-bottom:16px; flex-wrap:wrap;">
        <div>
            <h2 style="margin:0 0 4px 0;">Daftar Slider</h2>
            <p style="margin:0; color:#6b7280;">Kelola data slider untuk halaman depan.</p>
        </div>
        <a href="{{ route('slider.create') }}" class="btn btn-primary">Tambah Slider</a>
    </div>

    @if (session('success'))
        <div style="background:#ecfdf5; color:#047857; border:1px solid #a7f3d0; padding:10px 12px; border-radius:8px; margin-bottom:12px;">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Gambar</th>
                <th>Posisi</th>
                <th>Status</th>
                <th>Urutan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sliders as $slider)
                <tr>
                    <td>{{ $slider->judul }}</td>
                    <td>
                        @if($slider->gambar)
                            <img src="{{ asset('uploads/slider/' . $slider->gambar) }}" alt="{{ $slider->judul }}" style="max-width:120px; height:auto; border-radius:6px;">
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $slider->posisi }}</td>
                    <td>{{ $slider->status ? 'Aktif' : 'Tidak Aktif' }}</td>
                    <td>{{ $slider->urutan }}</td>
                    <td>
                        <a href="{{ route('slider.edit', $slider->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('slider.destroy', $slider->id) }}" method="POST" style="display:inline-block; margin-left:6px;" onsubmit="return confirm('Yakin ingin menghapus slider ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align:center; color:#6b7280;">Belum ada data slider.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
