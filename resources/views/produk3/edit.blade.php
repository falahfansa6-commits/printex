<!DOCTYPE html>
<html>
<head>

<title>Edit Produk 3</title>

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

img{
    width:200px;
    margin-bottom:15px;
}

button{
    padding:10px 20px;
    background:orange;
    color:white;
    border:none;
}

</style>

</head>

<body>

<h2>Edit Produk 3</h2>

<form action="{{ route('produk3.update',$data->id) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<label>Nomor</label><br>



<br>

<label>Judul</label><br>

<input
type="text"
name="judul"
value="{{ $data->judul }}">

<br>

<label>Deskripsi</label><br>

<textarea
name="deskripsi"
rows="8">{{ $data->deskripsi }}</textarea>

<br>

<label>Gambar Saat Ini</label><br>

<img src="{{ asset('upload/produk3/'.$data->gambar) }}">

<br>

<label>Ganti Gambar</label><br>

<input type="file" name="gambar">

<br><br>

<button type="submit">

Update

</button>

</form>

</body>
</html>