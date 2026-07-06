<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Secound</title>
</head>
<body>

    <h2>Data Secound</h2>

    <a href="{{ route('secound.create') }}">
        Tambah Data
    </a>

    @if(session('success'))
        <div style="color: green; margin: 10px 0;">
            {{ session('success') }}
        </div>
    @endif

    <br>

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th width="50">No</th>
                <th width="120">Gambar</th>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>

        <tbody>
            @forelse($secounds as $item)
                <tr>

                    <td align="center">
                        {{ $loop->iteration }}
                    </td>

                    <td align="center">
                        @if($item->gambar)
                            <img
                                src="{{ asset('uploads/secound/' . $item->gambar) }}"
                                alt="{{ $item->judul }}"
                                width="100"
                                height="80"
                                style="object-fit: cover; border-radius:5px;">
                        @else
                            Tidak ada gambar
                        @endif
                    </td>

                    <td>
                        {{ $item->judul }}
                    </td>

                    <td>
                        {{ \Illuminate\Support\Str::limit($item->isi, 100) }}
                    </td>

                    <td align="center">

                        <a href="{{ route('secound.edit', $item->id) }}">
                            Edit
                        </a>

                        |

                        <form action="{{ route('secound.destroy', $item->id) }}"
                              method="POST"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">
                                Hapus
                            </button>
                        </form>

                    </td>

                </tr>
            @empty

                <tr>
                    <td colspan="5" align="center">
                        Data belum tersedia.
                    </td>
                </tr>

            @endforelse
        </tbody>
    </table>

</body>
</html>