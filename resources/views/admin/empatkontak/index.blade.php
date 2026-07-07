<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="container">

    <div class="card">

        <h1>Data Empat Kontak</h1>

        <div class="top-bar">

            <a href="{{ route('empatkontak.create') }}" class="btn btn-add">
                + Tambah Kontak
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
                        <th>Jenis</th>
                        <th>Isi Kontak</th>
                        <th>Link</th>
                        <th width="180">Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    @forelse($empatkontaks as $kontak)

                    <tr>

                        <td>{{ ucfirst($kontak->jenis) }}</td>

                        <td>{{ $kontak->isi }}</td>

                        <td>
                            <a href="{{ $kontak->link }}" target="_blank">
                                {{ $kontak->link }}
                            </a>
                        </td>

                        <td>

                            <div class="aksi">

                                <a href="{{ route('empatkontak.edit', $kontak->id) }}"
                                   class="btn btn-edit">
                                    Edit
                                </a>

                                <form action="{{ route('empatkontak.destroy', $kontak->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-delete"
                                        onclick="return confirm('Yakin ingin menghapus kontak ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="4" class="empty-data">
                            Belum ada data kontak.
C
                    </tr>

                    @endforelse

                </tbody>

            </table>

            <br>

            <div>
                <a href="{{ route('kontak') }}" class="btn btn-add">
                    Kembali
                </a>
            </div>

        </div>

    </div>

</div>