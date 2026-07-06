<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Secound</title>
</head>
<body>

    <h2>Edit Data Secound</h2>

    {{-- Menampilkan error validasi --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('secound.update', $secound->id) }}"
          method="POST"
          enctype="multipart/form-data">

        @csrf
        @method('PUT')

        <div>
            <label for="judul">Judul</label><br>
            <input
                type="text"
                id="judul"
                name="judul"
                value="{{ old('judul', $secound->judul) }}"
                placeholder="Masukkan Judul"
                required>
        </div>

        <br>

        <div>
            <label for="isi">Deskripsi</label><br>
            <textarea
                id="isi"
                name="isi"
                rows="6"
                cols="50"
                placeholder="Masukkan Deskripsi"
                required>{{ old('isi', $secound->isi) }}</textarea>
        </div>

        <br>

        <div>
            <label for="gambar">Gambar</label><br>

            @if($secound->gambar)
                <img src="{{ asset('uploads/secound/' . $secound->gambar) }}"
                     width="150"
                     height="120"
                     style="object-fit:cover; margin-bottom:10px; border-radius:5px;">
            @else
                <p>Tidak ada gambar.</p>
            @endif

            <br>

            <input
                type="file"
                id="gambar"
                name="gambar"
                accept="image/*">

            <br>
            <small>Kosongkan jika tidak ingin mengganti gambar.</small>
        </div>

        <br>

        <a href="{{ route('secound.index') }}">
            Kembali
        </a>

        <button type="submit">
            Update
        </button>

    </form>

</body>
</html>