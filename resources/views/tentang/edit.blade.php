<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tentang Kami</title>
<style>
    *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:linear-gradient(135deg,#4facfe,#00f2fe);
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
}

.container{
    width:100%;
    max-width:700px;
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

input[type="text"],
textarea,
input[type="file"]{
    width:100%;
    padding:12px 15px;
    border:1px solid #ccc;
    border-radius:8px;
    font-size:15px;
    outline:none;
    transition:.3s;
}

input[type="text"]:focus,
textarea:focus,
input[type="file"]:focus{
    border-color:#2196f3;
    box-shadow:0 0 8px rgba(33,150,243,.3);
}

textarea{
    resize:vertical;
}

input[type="file"]::file-selector-button{
    background:#2196f3;
    color:#fff;
    border:none;
    padding:10px 18px;
    border-radius:6px;
    cursor:pointer;
    margin-right:12px;
    transition:.3s;
}

input[type="file"]::file-selector-button:hover{
    background:#1976d2;
}

.preview{
    display:block;
    width:220px;
    max-width:100%;
    border-radius:10px;
    border:1px solid #ddd;
    margin-top:10px;
}

.btn-group{
    display:flex;
    justify-content:space-between;
    gap:10px;
    margin-top:25px;
}

.btn{
    display:inline-block;
    padding:12px 22px;
    border:none;
    border-radius:8px;
    text-decoration:none;
    cursor:pointer;
    font-size:15px;
    transition:.3s;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-save{
    background:#2196f3;
    color:white;
}

.btn-save:hover{
    background:#1976d2;
}

.btn-back{
    background:#6c757d;
    color:white;
}

.btn-back:hover{
    background:#5a6268;
}

/* Tablet */
@media (max-width:768px){

    body{
        padding:20px;
    }

    .container{
        max-width:100%;
    }

    .card{
        padding:25px;
    }

    h1{
        font-size:28px;
    }

    .btn-group{
        flex-direction:column;
    }

    .btn{
        width:100%;
        text-align:center;
    }

    .preview{
        width:180px;
        margin:auto;
    }

}

/* Smartphone */
@media (max-width:576px){

    body{
        padding:15px;
    }

    .card{
        padding:20px;
    }

    h1{
        font-size:24px;
    }

    input,
    textarea,
    .btn{
        font-size:14px;
    }

    .preview{
        width:150px;
    }

}

/* HP kecil */
@media (max-width:400px){

    h1{
        font-size:22px;
    }

    .card{
        padding:15px;
    }

    .preview{
        width:130px;
    }

}
</style>
</head>
<body>

<div class="container">

    <div class="card">

        <h1>Edit Tentang Kami</h1>

        <form action="{{ route('tentang.update', $tentang->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Judul</label>
                <input type="text"
                       name="judul"
                       value="{{ $tentang->judul }}"
                       required>
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi"
                          rows="6"
                          required>{{ $tentang->isi }}</textarea>
            </div>

            @if($tentang->gambar)

                <div class="form-group">
                    <label>Gambar Saat Ini</label>

                    <img src="{{ asset($tentang->gambar) }}"
                         class="preview"
                         style="width:200px;height:auto;">
                </div>

            @endif

            <div class="form-group">
                <label>Ganti Gambar</label>
                <input type="file" name="gambar">
            </div>

            <div class="btn-group">

                <a href="{{ route('tentang.index') }}"
                   class="btn btn-back">
                    Kembali
                </a>

                <button type="submit"
                        class="btn btn-save">
                    Update
                </button>

            </div>

        </form>

    </div>

</div>

</body>
</html>