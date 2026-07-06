<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Layanan</title>

    <link rel="stylesheet" href="{{ asset('css/service.css') }}">
</head>
<body>

<div class="container">

    <div class="card">

        <h1>Edit Layanan</h1>

        @if ($errors->any())

            <div class="alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('service.update',$service->id) }}" method="POST">

            @csrf
            @method('PUT')

            <!-- Judul -->

            <div class="form-group">

                <label for="judul">Judul</label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    maxlength="30"
                    value="{{ old('judul',$service->judul) }}"
                    placeholder="Masukkan judul layanan"
                    required>

                <small id="judulCount" class="text-muted"></small>

            </div>

            <!-- Deskripsi -->

            <div class="form-group">

                <label for="deskripsi">Deskripsi</label>

                <textarea
                    id="deskripsi"
                    name="deskripsi"
                    rows="6"
                    maxlength="200"
                    placeholder="Masukkan deskripsi layanan"
                    required>{{ old('deskripsi',$service->deskripsi) }}</textarea>

                <small id="deskCount" class="text-muted"></small>

            </div>

            <!-- Urutan -->

            <div class="form-group">

                <label for="urutan">Urutan</label>

                <input
                    type="number"
                    id="urutan"
                    name="urutan"
                    min="1"
                    value="{{ old('urutan',$service->urutan) }}"
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

                    Update

                </button>

            </div>

        </form>

    </div>

</div>

<script>

const judul = document.getElementById('judul');
const deskripsi = document.getElementById('deskripsi');

const judulCount = document.getElementById('judulCount');
const deskCount = document.getElementById('deskCount');

function updateCounter(){

    judulCount.textContent =
        judul.value.length + " / 30 karakter";

    deskCount.textContent =
        deskripsi.value.length + " / 200 karakter";

}

judul.addEventListener('input', updateCounter);
deskripsi.addEventListener('input', updateCounter);

updateCounter();

</script>

</body>
</html>