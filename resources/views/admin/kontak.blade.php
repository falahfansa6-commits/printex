<link rel="stylesheet" href="{{ asset('css/style4.css') }}">
<form action="/admin/kontak" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')


    <div>
        <label>Email</label><br>

        <input 
        type="email"
        name="email"
        value="{{ $kontak->email ??''}}">
    </div>
<br>

    <div>
        <label>Link Email</label>

        <input 
        type="text"
        name="link_email"
        value="{{ $kontak->link_email ??''}}">
    </div>


    <button type="submit">
        Simpan
    </button>

</form>