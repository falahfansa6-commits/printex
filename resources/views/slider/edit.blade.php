<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit slider</title>
</head>
<body>
   

<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="container">

    <div class="card">

        <h1>Edit Slider</h1>

        @if ($errors->any())

            <div class="alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif

        <form action="{{ route('slider.update',$slider->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label for="judul">Judul</label>

                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ old('judul',$slider->judul) }}"
                    placeholder="Masukkan judul slider"
                    required>

            </div>

            <div class="form-group">

                <label for="posisi">Posisi</label>

                <select id="posisi" name="posisi">

                    <option value="beranda"
                        {{ old('posisi',$slider->posisi)=='beranda' ? 'selected' : '' }}>
                        Beranda
                    </option>

                    <option value="pelayanan"
                        {{ old('posisi',$slider->posisi)=='pelayanan' ? 'selected' : '' }}>
                        Pelayanan
                    </option>

                </select>

            </div>

            <div class="form-group">

                <label for="status">Status</label>

                <select id="status" name="status">

                    <option value="1"
                        {{ old('status',$slider->status)==1 ? 'selected' : '' }}>
                        Aktif
                    </option>

                    <option value="0"
                        {{ old('status',$slider->status)==0 ? 'selected' : '' }}>
                        Tidak Aktif
                    </option>

                </select>

            </div>

            <div class="form-group">

                <label for="urutan">Urutan</label>

                <input
                    type="number"
                    id="urutan"
                    name="urutan"
                    min="1"
                    value="{{ old('urutan',$slider->urutan) }}">

            </div>

            <div class="form-group">

                <label>Gambar Saat Ini</label>

                <div class="image-preview">

                    <img src="{{ asset('uploads/slider/'.$slider->gambar) }}"
                         alt="Slider"
                         class="preview">

                </div>

            </div>

            <div class="form-group">

                <label for="gambar">Ganti Gambar</label>

                <input
                    type="file"
                    id="gambar"
                    name="gambar"
                    accept="image/*">

                <small class="text-muted">
                    Kosongkan jika tidak ingin mengganti gambar.
                </small>

            </div>

            <div class="btn-group">

                <a href="{{ route('slider.index') }}"
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


</body>
</html>