<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Edit Gambar</title>

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
img{
    width:200px;
    margin-bottom:20px;
}
input{
    width:100%;
}
button{
    padding:10px 20px;
    background:blue;
    color:white;
    border:none;
}
</style>

</head>
<body>

<div class="container">

<h2>Edit Gambar Our Value</h2>

@if($errors->any())

<ul style="color:red">

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

@endif

<img src="{{ asset($ourvalueimage->gambar) }}">

<form action="{{ route('ourvalueimage.update',$ourvalueimage->id) }}" method="POST" enctype="multipart/form-data">

@csrf
@method('PUT')

<input type="file" name="gambar">

<br><br>

<button type="submit">
Update
</button>

<a href="{{ route('ourvalueimage.index') }}">
Kembali
</a>

</form>

</div>

</body>
</html>