<h1>Data Lokasi</h1>

<a href="{{ route('location.create') }}">
    Tambah Lokasi
</a>

<table border="1">
    <tr>
        <th>No</th>
        <th>Kota</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

    @foreach($locations as $location)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $location->nama_kota }}</td>
        <td>{{ $location->alamat }}</td>
        <td>
            <a href="{{ route('location.edit', $location->id) }}">
                Edit
            </a>

           <form action="{{ route('location.destroy', $location->id) }}"
      method="POST"
      style="display:inline">

    @csrf
    @method('DELETE')

    <button type="submit"
            onclick="return confirm('Yakin ingin menghapus lokasi ini?')">
        Hapus
    </button>

</form>
        </td>
    </tr>
    @endforeach

</table>