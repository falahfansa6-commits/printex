<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Slider</title>

<style>

body{
    margin:0;
    background:#f5f5f5;
    font-family:Arial;
}

.navbar{
    background:#111827;
    color:white;
    padding:20px;
}

.container{
    width:90%;
    margin:auto;
    margin-top:30px;
}

.card{
    background:white;
    padding:20px;
    border-radius:10px;
}

.btn{
    text-decoration:none;
    padding:10px 15px;
    border:none;
    border-radius:5px;
    cursor:pointer;
}

.btn-primary{
    background:#2563eb;
    color:white;
}

.btn-warning{
    background:#facc15;
    color:black;
}

.btn-danger{
    background:#ef4444;
    color:white;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th,
table td{
    border:1px solid #ddd;
    padding:10px;
}

.form-group{
    margin-bottom:15px;
}

.form-control{
    width:100%;
    padding:10px;
}

</style>

</head>
<body>

<div class="navbar">
    <h2>Printex Admin Slider</h2>
</div>

<div class="container">
    @yield('content')
</div>

</body>
</html>