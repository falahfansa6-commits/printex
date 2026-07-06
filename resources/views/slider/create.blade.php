<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tambah slider</title>
</head>
<body>
  

<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="container">

    <div class="card">

        <h1>Tambah Slider</h1>

        @if ($errors->any())

            <div class="alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('slider.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="form-group">

                <label for="judul">Judul</label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ old('judul') }}"
                    placeholder="Masukkan judul slider"
                    required>

            </div>

            <div class="form-group">

                <label for="gambar">Gambar</label>

                <input
                    type="file"
                    id="gambar"
                    name="gambar"
                    accept="image/*"
                    required>

            </div>

            <div class="form-group">

                <label for="posisi">Posisi</label>

                <select id="posisi" name="posisi">

                    <option value="beranda">Beranda</option>

                    <option value="pelayanan">Pelayanan</option>

                </select>

            </div>

            <div class="form-group">

                <label for="status">Status</label>

                <select id="status" name="status">

                    <option value="1">Aktif</option>

                    <option value="0">Tidak Aktif</option>

                </select>

            </div>

            <div class="form-group">

                <label for="urutan">Urutan</label>

                <input
                    type="number"
                    id="urutan"
                    name="urutan"
                    value="{{ old('urutan',1) }}"
                    min="1">

            </div>

            <div class="btn-group">

                <a href="{{ route('slider.index') }}"
                   class="btn btn-back">

                    Kembali

                </a>

                <button
                    type="submit"
                    class="btn btn-save">

                    Simpan

                </button>

            </div>

        </form>

    </div>

</div>


</body>
</html>