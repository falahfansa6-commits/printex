

<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="container">

    <div class="card">

        <h1>Data Slider</h1>

        <div class="top-bar">

            <a href="{{ route('slider.create') }}" class="btn btn-add">
                + Tambah Slider
            </a>

        </div>

        @if(session('success'))

            <div class="alert-success">

                {{ session('success') }}

            </div>

        @endif  

        <div class="table-responsive">

            <table class="admin-table">

                <thead>

                    <tr>

                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Posisi</th>
                        <th>Status</th>
                        <th>Urutan</th>
                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                    @forelse($sliders as $slider)

                    <tr>

                        <td>{{ $slider->judul }}</td>

                        <td>

                            @if($slider->gambar)

                                <img
                                    src="{{ asset('uploads/slider/'.$slider->gambar) }}"
                                    alt="{{ $slider->judul }}"
                                    class="preview"
                                    width="150px">

                            @else

                                -

                            @endif

                        </td>

                        <td>{{ ucfirst($slider->posisi) }}</td>

                        <td>

                            @if($slider->status)

                                <span class="badge badge-success">
                                    Aktif
                                </span>

                            @else

                                <span class="badge badge-danger">
                                    Tidak Aktif
                                </span>

                            @endif

                        </td>

                        <td>{{ $slider->urutan }}</td>

                        <td>

                            <div class="aksi">

                                <a href="{{ route('slider.edit',$slider->id) }}"
                                   class="btn btn-edit">

                                    Edit

                                </a>

                                <form action="{{ route('slider.destroy',$slider->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-delete"
                                        onclick="return confirm('Yakin ingin menghapus slider ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="6" class="empty-data">

                            Belum ada data slider.

                        </td>

                    </tr>

                    @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

