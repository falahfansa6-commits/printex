<link rel="stylesheet" href="{{ asset('css/style4.css') }}">
<form action="/admin/telepon" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')


    <div>
        <label>Nomor</label><br>

        <input 
        type="number"
        name="nomor"
        value="{{ $telepon->nomor ??''}}">
    </div>
<br>

    <div>
        <label>Link Whatsapp</label>

        <input 
        type="text"
        name="link_whatsapp"
        value="{{ $telepon->link_whatsapp ??''}}">
    </div>


    <button type="submit">
        Simpan
    </button>

</form>