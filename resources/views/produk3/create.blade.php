<!DOCTYPE html>
<html>
<head>

<title>Tambah Produk 3</title>

<style>

body{
    font-family:Arial;
    margin:40px;
}

input,textarea{
    width:500px;
    padding:10px;
    margin-bottom:15px;
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

<h2>Tambah Produk 3</h2>

<form action="{{ route('produk3.store') }}" method="POST" enctype="multipart/form-data">

@csrf



<label>Judul</label><br>

<input type="text" name="judul">

<br>

<label>Deskripsi</label><br>

<textarea name="deskripsi" rows="8"></textarea>

<br>

<label>Gambar</label><br>

<input type="file" name="gambar">

<br><br>

<button type="submit">

Simpan

</button>

</form>

</body>
</html>