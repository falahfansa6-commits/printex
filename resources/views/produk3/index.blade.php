<!DOCTYPE html>
<html>
<head>
    <title>Data Produk 3</title>

    <style>
        body{
            font-family:Arial;
            margin:40px;
        }

        table{
            width:100%;
            border-collapse:collapse;
        }

        table th,table td{
            border:1px solid #ddd;
            padding:10px;
            text-align:center;
        }

        img{
            width:150px;
        }

        .btn{
            padding:8px 15px;
            text-decoration:none;
            color:white;
            border:none;
            cursor:pointer;
        }

        .tambah{
            background:green;
        }

        .edit{
            background:orange;
        }

        .hapus{
            background:red;
        }

    </style>

</head>
<body>

<h2>Data Produk 3</h2>

<a href="{{ route('produk3.create') }}" class="btn tambah">
Tambah Data
</a>

<br><br>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<table>

<tr>
    <th>No</th>
    <th>Nomor</th>
    <th>Judul</th>
    <th>Deskripsi</th>
    <th>Gambar</th>
    <th>Aksi</th>
</tr>

@foreach($produk3 as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>{{ $item->nomor }}</td>

<td>{{ $item->judul }}</td>

<td>{{ $item->deskripsi }}</td>

<td>
<img src="{{ asset('upload/produk3/'.$item->gambar) }}">
</td>

<td>

<a href="{{ route('produk3.edit',$item->id) }}" class="btn edit">
Edit
</a>

<form action="{{ route('produk3.destroy',$item->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn hapus">
Hapus
</button>

</form>

</td>

</tr>

@endforeach

</table>

</body>
</html>