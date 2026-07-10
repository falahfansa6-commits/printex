<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Lokasi</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            background:linear-gradient(135deg,#f7f7f7,#f3f3f3);
            min-height:100vh;
            padding:40px;
        }

        .container{
            max-width:1100px;
            margin:auto;
        }

        .card{
            background:#fff;
            border-radius:15px;
            padding:30px;
            box-shadow:0 10px 30px rgba(0,0,0,.2);
        }

        h1{
            color:#333;
            margin-bottom:25px;
            text-align:center;
        }

        .top-bar{
            display:flex;
            justify-content:flex-end;
            margin-bottom:20px;
        }

        .btn{
            display:inline-block;
            text-decoration:none;
            border:none;
            padding:10px 18px;
            border-radius:8px;
            cursor:pointer;
            font-size:14px;
            transition:.3s;
            color:#fff;
        }

        .btn-add{
            background:#28a745;
        }

        .btn-add:hover{
            background:#218838;
            transform:translateY(-2px);
        }

        table{
            width:100%;
            border-collapse:collapse;
            overflow:hidden;
            border-radius:10px;
        }

        thead{
            background:#ec0000;
            color:white;
        }

        th,td{
            padding:15px;
            text-align:left;
            border-bottom:1px solid #ddd;
        }

        tbody tr:nth-child(even){
            background:#f8f9fa;
        }

        tbody tr:hover{
            background:#eaf4ff;
        }

        .aksi{
            display:flex;
            gap:8px;
            align-items:center;
        }

        .btn-edit{
            background:#ffc107;
            color:#000;
        }

        .btn-edit:hover{
            background:#e0a800;
        }

        .btn-delete{
            background:#dc3545;
        }

        .btn-delete:hover{
            background:#c82333;
        }

        .btn-delete{
            padding:10px 18px;
        }

        form{
            display:inline;
        }

        @media(max-width:768px){

            body{
                padding:15px;
            }

            .card{
                overflow-x:auto;
            }

            table{
                min-width:700px;
            }
        }

    </style>

</head>
<body>

<div class="container">

    <div class="card">

        <h1>Data Lokasi</h1>

        <div class="top-bar">
            <a href="{{ route('location.create') }}" class="btn btn-add">
                + Tambah Lokasi
            </a>
        </div>

        <table>

            <thead>
                <tr>
                    <th width="70">No</th>
                    <th>Nama Kota</th>
                    <th>Alamat</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

                @forelse($locations as $location)

                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $location->nama_kota }}</td>
                    <td>{{ $location->alamat }}</td>

                    <td>

                        <div class="aksi">

                            <a href="{{ route('location.edit', $location->id) }}"
                               class="btn btn-edit">
                                Edit
                            </a>

                            <form action="{{ route('location.destroy', $location->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-delete"
                                        onclick="return confirm('Yakin ingin menghapus lokasi ini?')">
                                    Hapus
                                </button>

                            </form>

                        </div>

                    </td>

                </tr>

                @empty

                <tr>
                    <td colspan="4" style="text-align:center;">
                        Data lokasi belum tersedia.
                    </td>
                </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>