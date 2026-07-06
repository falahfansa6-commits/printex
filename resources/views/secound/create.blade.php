<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Secound</title>
</head>
<body>

    <h2>Tambah Data Secound</h2>

    {{-- Error Validasi --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('secound.store') }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf

        <div>
            <label>Judul</label><br>
            <input type="text"
                   name="judul"
                   value="{{ old('judul') }}"
                   placeholder="Masukkan judul"
                   required>
        </div>

        <br>

        <div>
            <label>Deskripsi</label><br>
            <textarea name="isi"
                      rows="6"
                      cols="50"
                      placeholder="Masukkan deskripsi"
                      required>{{ old('isi') }}</textarea>
        </div>

        <br>

        <div>
            <label>Upload Gambar</label><br>
            <input type="file"
                   name="gambar"
                   accept=".jpg,.jpeg,.png,.webp"
                   required>
        </div>

        <br>

        <a href="{{ route('secound.index') }}">
            Kembali
        </a>

        <button type="submit">
            Simpan
        </button>

    </form>

</body>
</html>