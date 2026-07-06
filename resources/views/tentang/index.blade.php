<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tentang Kami</title>
<style>
    /* ===========================
   TABLE RESPONSIVE
=========================== */

.table-responsive{
    width:100%;
    overflow-x:auto;
}

table{
    width:100%;
    min-width:800px;
    border-collapse:collapse;
    margin-top:20px;
}

thead{
    background:#2196f3;
    color:#fff;
}

th,
td{
    padding:15px;
    border-bottom:1px solid #ddd;
    text-align:left;
    vertical-align:middle;
}

tbody tr:nth-child(even){
    background:#f8f9fa;
}

tbody tr:hover{
    background:#eef6ff;
}

/* ===========================
   GAMBAR
=========================== */

.preview{
    width:100px;
    height:80px;
    object-fit:cover;
    border-radius:8px;
    border:1px solid #ddd;
}

/* ===========================
   AKSI
=========================== */

.aksi{
    display:flex;
    gap:8px;
    align-items:center;
}

.aksi form{
    display:inline;

}
.btn{
    display:inline-block;
    padding:10px 20px;
    border:none;
    border-radius:8px;
    text-decoration:none;
    cursor:pointer;
    transition:.3s;
    font-size:15px;
}

.btn:hover{
    transform:translateY(-2px);
}

.btn-add{
    background:#28a745;
    color:#fff;
}

.btn-edit{
    background:#ffc107;
    color:#000;
}

.btn-delete{
    background:#dc3545;
    color:#fff;
}

.btn-save{
    background:#2196f3;
    color:#fff;
}

.btn-back{
    background:#6c757d;
    color:#fff;
}

/* ===========================
   RESPONSIVE
=========================== */

@media (max-width:992px){

    .container{
        max-width:95%;
    }

}

@media (max-width:768px){

    body{
        padding:20px;
    }

    .card{
        padding:25px;
    }

    h1{
        font-size:28px;
    }

    .top-bar{
        justify-content:center;
    }

    .aksi{
        flex-direction:column;
        align-items:stretch;
    }

    .aksi .btn{
        width:100%;
        text-align:center;
    }

}

@media (max-width:576px){

    body{
        padding:15px;
    }

    .card{
        padding:18px;
    }

    h1{
        font-size:24px;
    }

    .preview{
        width:80px;
        height:65px;
    }

}

@media (max-width:400px){

    h1{
        font-size:22px;
    }

}
</style>
</head>
<body>

<div class="container">

    <div class="card">

        <h1>Data Tentang Kami</h1>

        <div class="top-bar">
            <a href="{{ route('tentang.create') }}" class="btn btn-add">
                + Tambah Data
            </a>
        </div>

        <div class="table-responsive">

            <table>

                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>

                @forelse($tentang as $item)

                    <tr>

                        <td>{{ $loop->iteration }}</td>

                        <td>

                            @if($item->gambar)

                                <img src="{{ asset($item->gambar) }}"
                                     class="preview">

                            @else

                                Tidak ada gambar

                            @endif

                        </td>

                        <td>{{ $item->judul }}</td>

                        <td>{{ Str::limit($item->isi,100) }}</td>

                        <td>

                            <div class="aksi">

                                <a href="{{ route('tentang.edit',$item->id) }}"
                                   class="btn btn-edit">
                                    Edit
                                </a>

                                <form action="{{ route('tentang.destroy',$item->id) }}"
                                      method="POST">

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"
                                            class="btn btn-delete"
                                            onclick="return confirm('Yakin hapus data?')">
                                        Hapus
                                    </button>

                                </form>

                            </div>

                        </td>

                    </tr>

                @empty

                    <tr>
                        <td colspan="5" style="text-align:center;">
                            Data belum tersedia.
                        </td>
                    </tr>

                @endforelse

                </tbody>

            </table>

        </div>

    </div>

</div>

</body>
</html>