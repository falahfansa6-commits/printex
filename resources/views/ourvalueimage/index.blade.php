<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Gambar Our Value</title>

<style>
body{
    font-family:Arial;
    background:#f4f4f4;
    margin:20px;
}
.container{
    width:90%;
    margin:auto;
    background:white;
    padding:20px;
    border-radius:8px;
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
img{
    width:120px;
}
.btn{
    padding:8px 15px;
    color:white;
    text-decoration:none;
    border-radius:5px;
}
.add{background:green;}
.edit{background:blue;}
.delete{
    background:red;
    border:none;
    color:white;
    padding:8px 15px;
    cursor:pointer;
}
</style>

</head>
<body>

<div class="container">

<h2>Data Gambar Our Value</h2>

@if(session('success'))
<p style="color:green">{{ session('success') }}</p>
@endif

<a href="{{ route('ourvalueimage.create') }}" class="btn add">
Tambah Gambar
</a>

<table>

<tr>
<th>No</th>
<th>Gambar</th>
<th>Aksi</th>
</tr>

@foreach($gambar as $item)

<tr>

<td>{{ $loop->iteration }}</td>

<td>
<img src="{{ asset($item->gambar) }}">
</td>

<td>

<a href="{{ route('ourvalueimage.edit',$item->id) }}" class="btn edit">
Edit
</a>

<form action="{{ route('ourvalueimage.destroy',$item->id) }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="delete" onclick="return confirm('Hapus gambar?')">
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