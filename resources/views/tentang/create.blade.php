<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Tentang Kami</title>
<style>
/* ===========================
   RESET
=========================== */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* ===========================
   BODY
=========================== */
body{
    background: linear-gradient(135deg,#ffffff,#ffffff);
    min-height: 100vh;
    padding: 40px 20px;
}

/* ===========================
   CONTAINER
=========================== */
.container{
    max-width: 1100px;
    margin: auto;
}

/* ===========================
   CARD
=========================== */
.card{
    background: #fff;
    padding: 35px;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,.2);
}

/* ===========================
   TITLE
=========================== */
h1,
h2{
    text-align: center;
    color: #333;
    margin-bottom: 30px;
}

/* ===========================
   FORM
=========================== */
.form-group{
    margin-bottom: 20px;
}

label{
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    color: #444;
}

input[type=text],
input[type=email],
input[type=password],
input[type=number],
input[type=file],
textarea,
select{
    width: 100%;
    padding: 12px 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
    font-size: 15px;
    outline: none;
    transition: .3s;
}

input:focus,
textarea:focus,
select:focus{
    border-color: #ff0000;
    box-shadow: 0 0 8px rgba(33,150,243,.3);
}

textarea{
    resize: vertical;
}

/* ===========================
   FILE INPUT
=========================== */
input[type=file]::file-selector-button{
    background: #ff0000;
    color: white;
    border: none;
    padding: 10px 18px;
    border-radius: 6px;
    cursor: pointer;
    margin-right: 12px;
    transition: .3s;
}

input[type=file]::file-selector-button:hover{
    background: #ff000d;
}

/* ===========================
   BUTTON
=========================== */
.btn{
    display: inline-block;
    padding: 12px 22px;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    text-decoration: none;
    font-size: 15px;
    transition: .3s;
}

.btn:hover{
    transform: translateY(-2px);
}

.btn-save{
    background: #ff0000;
    color: white;
}

.btn-save:hover{
    background: #ff0000;
}

.btn-add{
    background: #28a745;
    color: white;
}

.btn-add:hover{
    background: #218838;
}

.btn-edit{
    background: #ffc107;
    color: black;
}

.btn-edit:hover{
    background: #e0a800;
}

.btn-delete{
    background: #dc3545;
    color: white;
}

.btn-delete:hover{
    background: #c82333;
}

.btn-back{
    background: #6c757d;
    color: white;
}

.btn-back:hover{
    background: #5a6268;
}

/* ===========================
   BUTTON GROUP
=========================== */
.btn-group{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 25px;
    gap: 10px;
}

/* ===========================
   TOP BAR
=========================== */
.top-bar{
    display: flex;
    justify-content: flex-end;
    margin-bottom: 20px;
}

/* ===========================
   TABLE
=========================== */
table{
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

thead{
    background: #2196f3;
    color: white;
}

th,
td{
    padding: 15px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

tbody tr:nth-child(even){
    background: #f8f9fa;
}

tbody tr:hover{
    background: #eef6ff;
}

.aksi{
    display: flex;
    gap: 10px;
    align-items: center;
}

form{
    display: inline;
}

/* ===========================
   IMAGE PREVIEW
=========================== */
.preview{
    width: 120px;
    border-radius: 8px;
    margin-top: 10px;
    border: 1px solid #ddd;
}

/* ===========================
   ALERT
=========================== */
.alert-success{
    background: #d4edda;
    color: #155724;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
}

.alert-danger{
    background: #f8d7da;
    color: #721c24;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
}

/* ===========================
   RESPONSIVE
=========================== */
@media(max-width:992px){

    .container{
        max-width: 95%;
    }

}

@media(max-width:768px){

    body{
        padding:20px;
    }

    .card{
        padding:25px;
    }

    h1,
    h2{
        font-size:28px;
    }

    .btn-group{
        flex-direction:column;
    }

    .btn{
        width:100%;
        text-align:center;
    }

    .top-bar{
        justify-content:center;
    }

    table{
        min-width:700px;
    }

}

@media(max-width:576px){

    body{
        padding:15px;
    }

    .card{
        padding:20px;
    }

    h1,
    h2{
        font-size:24px;
    }

    input,
    textarea,
    select,
    .btn{
        font-size:14px;
    }

}

@media(max-width:400px){

    h1,
    h2{
        font-size:22px;
    }

    .card{
        padding:15px;
    }

}
</style>
    
</head>
<body>

<div class="container">

    <div class="card">

        <h1>Tambah Tentang Kami</h1>

        <form action="{{ route('tentang.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Judul</label>
                <input type="text"
                       name="judul"
                       placeholder="Masukkan judul"
                       required>
            </div>

            <div class="form-group">
                <label>Isi</label>
                <textarea name="isi"
                          rows="6"
                          placeholder="Masukkan isi tentang kami"
                          required></textarea>
            </div>

            <div class="form-group">
                <label>Gambar (Opsional)</label>
                <input type="file" name="gambar">
            </div>

            <div class="btn-group">
                <a href="{{ route('tentang.index') }}" class="btn btn-back">
                    Kembali
                </a>

                <button type="submit" class="btn btn-save">
                    Simpan
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>