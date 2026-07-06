<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Layanan</title>

    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
</head>
<body>

<div class="container">

    <div class="card">

        <h1>Data Layanan</h1>

        <div class="top-bar">

            <a href="{{ route('service.create') }}" class="btn btn-add">
                + Tambah Data
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

                        <th width="70">No</th>

                        <th>Judul</th>

                        <th>Deskripsi</th>

                        <th width="100">Urutan</th>

                        <th width="180">Aksi</th>

                    </tr>

                </thead>

                <tbody>

                @forelse($services as $service)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>{{ $service->judul }}</td>

                        <td>
                            {{ \Illuminate\Support\Str::limit($service->deskripsi,80) }}
                        </td>

                        <td>{{ $service->urutan }}</td>

                        <td>

                            <div class="aksi">

                                <a href="{{ route('service.edit',$service->id) }}"
                                   class="btn btn-edit">

                                    Edit

                                </a>

                                <form action="{{ route('service.destroy',$service->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-delete"
                                        onclick="return confirm('Hapus data ini?')">

                                        Hapus

                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="5" class="empty-data">

                            Belum ada data.

                        </td>

                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>