<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/style4.css') }}">
    </head>
    <script>
        function resetForm(){
            document.querySelector('input[name="judul"]').value="";

            document.querySelector('textarea[name="isi"]').value="";
            };
    </script>
    <body>
        <form action="/admin/baru/update" method="POST" enctype="multipart/form-data">
            <h2>Add Informasi Tentang</h2>
           @csrf
           <label>Judul</label>
           <input type="text" name="judul" value="{{ $baru->judul ??''}}" placeholder="isi judul">
<br><br>
           <label>isi</label>
           <textarea name="isi">
            {{ $baru->isi ??'' }}
           </textarea>
<br><br>
           <label>Gambar</label>
           <input type="file" name="gambar">
<br><br>
           <button type="submit">Simpan</button>
           <button type="reset" onclick="resetForm()">Reset</button>
        </form>
    </body>
</html>