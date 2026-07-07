@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <div class="d-flex justify-content-between mb-3">
        <h2>Data Hubungi Kami</h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table border="1" cellpadding="10" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No WhatsApp</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($hub_kami as $item)

            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->no_wa }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->des }}</td>

                <td>

                    <a href="{{ route('Hub_kami.edit',$item->id) }}">
                        Edit
                    </a>

                    |

                    <form action="{{ route('Hub_kami.destroy',$item->id) }}"
                          method="POST"
                          style="display:inline">

                        @csrf
                        @method('DELETE')

                        <button onclick="return confirm('Hapus data?')">
                            Hapus
                        </button>

                    </form>

                </td>

            </tr>

        @empty

            <tr>
                <td colspan="6" align="center">
                    Belum ada data.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection