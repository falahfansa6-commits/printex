<link rel="stylesheet" href="{{ asset('css/style4.css') }}">
<form action="/admin/kontak" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')


    <div>
        <label>Maps</label><br>

        <input 
        type="lokasi"
        name="lokasi"
        value="{{ $lokasi->lokasi ??''}}">
    </div>
<br>

    <div>
        <label>Link Maps</label>

        <input 
        type="text"
        name="link_maps"
        value="{{ $maps->link_maps ??''}}">
    </div>


    <button type="submit">
        Simpan
    </button>

</form>