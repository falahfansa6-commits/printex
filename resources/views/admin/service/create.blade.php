<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Layanan</title>

    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
</head>
<body>

<div class="container">

    <div class="card">

        <h1>Tambah Layanan</h1>

        @if ($errors->any())

            <div class="alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('service.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label for="judul">Judul</label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    maxlength="30"
                    value="{{ old('judul') }}"
                    placeholder="Masukkan judul layanan"
                    required>

                <small id="judulCount" class="text-muted">
                    0 / 30 karakter
                </small>

            </div>

            <div class="form-group">

                <label for="deskripsi">Deskripsi</label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    rows="6"
                    maxlength="200"
                    placeholder="Masukkan deskripsi layanan"
                    required>{{ old('deskripsi') }}</textarea>

                <small id="deskCount" class="text-muted">
                    0 / 200 karakter
                </small>

            </div>

            <div class="form-group">

                <label for="urutan">Urutan</label>

                <input
                    type="number"
                    id="urutan"
                    name="urutan"
                    value="{{ old('urutan',1) }}"
                    min="1"
                    required>

            </div>

            <div class="btn-group">

                <a href="{{ route('service.index') }}"
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

<script>

const judul=document.getElementById('judul');
const deskripsi=document.getElementById('deskripsi');
const judulCount=document.getElementById('judulCount');
const deskCount=document.getElementById('deskCount');

function updateCounter(){

    judulCount.innerHTML=
    judul.value.length+" / 30 karakter";

    deskCount.innerHTML=
    deskripsi.value.length+" / 200 karakter";

}

judul.addEventListener('input',updateCounter);
deskripsi.addEventListener('input',updateCounter);

updateCounter();

</script>

</body>
</html>