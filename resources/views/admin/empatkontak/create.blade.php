<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="container">

    <div class="card">

        <h1>Tambah Kontak</h1>

        @if ($errors->any())

            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{ route('empatkontak.store') }}" method="POST">

            @csrf

            <div class="form-group">

                <label>Jenis Kontak</label>

                <select name="jenis" class="form-control" required>
                    <option value="">-- Pilih Jenis --</option>
                    <option value="email">Email</option>
                    <option value="kantor">Kantor</option>
                    <option value="telepon">Telepon</option>
                    <option value="whatsapp">WhatsApp</option>
                </select>

            </div>

            <div class="form-group">

                <label>Isi Kontak</label>

                <input
                    type="text"
                    name="isi"
                    class="form-control"
                    value="{{ old('isi') }}"
                    required>

            </div>

            <div class="form-group">

                <label>Link</label>

                <input
                    type="text"
                    name="link"
                    class="form-control"
                    value="{{ old('link') }}"
                    required>

            </div>

            <br>

            <button type="submit" class="btn btn-add">
                Simpan
            </button>

            <a href="{{ route('empatkontak.index') }}" class="btn btn-delete">
                Batal
            </a>

        </form>

    </div>

</div>