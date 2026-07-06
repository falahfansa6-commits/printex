<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Our Value</title>

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
    background:#007bff;
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

<h2>Edit Our Value</h2>

@if($errors->any())
<div class="error">
<ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="{{ route('ourvalues.update',$ourvalue->id) }}" method="POST">

@csrf
@method('PUT')

<label>Judul</label>
<input type="text" name="judul" value="{{ $ourvalue->judul }}">

<label>Deskripsi</label>
<textarea name="deskripsi" rows="5">{{ $ourvalue->deskripsi }}</textarea>

<label>Urutan</label>
<input type="number" name="urutan" value="{{ $ourvalue->urutan }}">

<label>Status</label>
<select name="status">
    <option value="1" {{ $ourvalue->status==1?'selected':'' }}>Aktif</option>
    <option value="0" {{ $ourvalue->status==0?'selected':'' }}>Tidak Aktif</option>
</select>

<button type="submit">Update</button>

<a href="{{ route('ourvalues.index') }}">
    Kembali
</a>

</form>

</div>

</body>
</html>