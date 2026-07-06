<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Our Value</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            background:#f4f4f4;
            margin:20px;
        }
        .container{
            max-width:1000px;
            margin:auto;
            background:#fff;
            padding:20px;
            border-radius:8px;
        }
        h2{
            margin-bottom:20px;
        }
        .btn{
            display:inline-block;
            padding:8px 15px;
            text-decoration:none;
            border-radius:5px;
            color:#fff;
        }
        .btn-add{background:#28a745;}
        .btn-edit{background:#007bff;}
        .btn-delete{
            background:#dc3545;
            border:none;
            cursor:pointer;
        }
        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }
        table th,table td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }
        table th{
            background:#333;
            color:white;
        }
        .success{
            background:#d4edda;
            color:#155724;
            padding:10px;
            margin-bottom:15px;
            border-radius:5px;
        }
        form{
            display:inline;
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Data Our Value</h2>

    @if(session('success'))
        <div class="success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('ourvalues.create') }}" class="btn btn-add">
        + Tambah Data
    </a>

    <table>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Urutan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>

        @foreach($ourvalues as $item)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $item->judul }}</td>
            <td>{{ $item->deskripsi }}</td>
            <td>{{ $item->urutan }}</td>
            <td>
                {{ $item->status ? 'Aktif' : 'Tidak Aktif' }}
            </td>
            <td>
                <a href="{{ route('ourvalues.edit',$item->id) }}" class="btn btn-edit">
                    Edit
                </a>

                <form action="{{ route('ourvalues.destroy',$item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="btn btn-delete" onclick="return confirm('Yakin hapus?')">
                        Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</div>

</body>
</html>