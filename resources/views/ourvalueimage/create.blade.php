<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Gambar</title>

<style>
body{
    font-family:Arial;
    background:#f4f4f4;
}
.container{
    width:500px;
    margin:40px auto;
    background:white;
    padding:20px;
    border-radius:8px;
}
input{
    width:100%;
    margin:15px 0;
}
button{
    padding:10px 20px;
    background:green;
    color:white;
    border:none;
}
</style>

</head>
<body>

<div class="container">

<h2>Tambah Gambar Our Value</h2>

@if($errors->any())

<ul style="color:red">

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

@endif

<form action="{{ route('ourvalueimage.store') }}" method="POST" enctype="multipart/form-data">

@csrf

<input type="file" name="gambar" required>

<button type="submit">
Simpan
</button>

<a href="{{ route('ourvalueimage.index') }}">
Kembali
</a>

</form>

</div>

</body>
</html>