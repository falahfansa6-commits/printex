<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Our Value</title>

<style>
body{
    font-family:Arial;
    background:#f4f4f4;
}
.container{
    width:600px;
    margin:30px auto;
    background:white;
    padding:20px;
    border-radius:8px;
}
input,textarea,select{
    width:100%;
    padding:10px;
    margin-top:5px;
    margin-bottom:15px;
}
button{
    padding:10px 20px;
    background:green;
    color:white;
    border:none;
}
a{
    text-decoration:none;
}
.error{
    color:red;
}
</style>

</head>
<body>

<div class="container">

<h2>Tambah Our Value</h2>

@if($errors->any())
<div class="error">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('ourvalues.store') }}" method="POST">

@csrf

<label>Judul</label>
<input type="text" name="judul">

<label>Deskripsi</label>
<textarea name="deskripsi" rows="5"></textarea>

<label>Urutan</label>
<input type="number" name="urutan">

<label>Status</label>
<select name="status">
    <option value="1">Aktif</option>
    <option value="0">Tidak Aktif</option>
</select>

<button type="submit">Simpan</button>

<a href="{{ route('ourvalues.index') }}">
    Kembali
</a>

</form>

</div>

</body>
</html>