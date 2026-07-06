<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Lokasi</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#ffffff,#ffffff);
            min-height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:20px;
        }

        .container{
            width:100%;
            max-width:550px;
        }

        .card{
            background:#fff;
            border-radius:15px;
            padding:35px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h1{
            text-align:center;
            color:#333;
            margin-bottom:30px;
        }

        .form-group{
            margin-bottom:20px;
        }

        label{
            display:block;
            margin-bottom:8px;
            font-weight:bold;
            color:#444;
        }

        input,
        textarea{
            width:100%;
            padding:12px 15px;
            border:1px solid #ccc;
            border-radius:8px;
            font-size:15px;
            outline:none;
            transition:.3s;
        }

        input:focus,
        textarea:focus{
            border-color:#2196f3;
            box-shadow:0 0 8px rgba(33,150,243,.3);
        }

        textarea{
            resize:vertical;
        }

        .btn-group{
            display:flex;
            justify-content:space-between;
            margin-top:25px;
        }

        .btn{
            padding:12px 25px;
            border:none;
            border-radius:8px;
            font-size:15px;
            cursor:pointer;
            text-decoration:none;
            transition:.3s;
        }

        .btn-back{
            background:#6c757d;
            color:#fff;
        }

        .btn-back:hover{
            background:#5a6268;
        }

        .btn-save{
            background:#2196f3;
            color:#fff;
        }

        .btn-save:hover{
            background:#1976d2;
            transform:translateY(-2px);
        }

        @media(max-width:600px){
            .btn-group{
                flex-direction:column;
                gap:10px;
            }

            .btn{
                width:100%;
                text-align:center;
            }
        }
    </style>

</head>
<body>

<div class="container">

    <div class="card">

        <h1>Edit Lokasi</h1>

        <form action="{{ route('location.update', $location->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Kota</label>

                <input
                    type="text"
                    name="nama_kota"
                    value="{{ $location->nama_kota }}"
                    required>
            </div>

            <div class="form-group">
                <label>Alamat</label>

                <textarea
                    name="alamat"
                    rows="5"
                    required>{{ $location->alamat }}</textarea>
            </div>

            <div class="btn-group">

                <a href="{{ route('location.index') }}" class="btn btn-back">
                    Kembali
                </a>

                <button type="submit" class="btn btn-save">
                    Simpan Perubahan
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>