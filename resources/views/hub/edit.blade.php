@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2>Edit Pesan Hubungi Kami</h2>

    @if ($errors->any())

        <div class="alert alert-danger">

            <ul>

                @foreach($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif

    <form action="{{ route('Hub_kami.update',$hub_kami->id) }}"
          method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">

            <label>Nama</label>

            <input
                type="text"
                name="nama"
                class="form-control"
                value="{{ old('nama',$hub_kami->nama) }}"
            >

        </div>

        <div class="mb-3">

            <label>No WhatsApp</label>

            <input
                type="text"
                name="no_wa"
                class="form-control"
                value="{{ old('no_wa',$hub_kami->no_wa) }}"
            >

        </div>

        <div class="mb-3">

            <label>Email</label>

            <input
                type="email"
                name="email"
                class="form-control"
                value="{{ old('email',$hub_kami->email) }}"
            >

        </div>

        <div class="mb-3">

            <label>Pesan</label>

            <textarea
                name="des"
                class="form-control"
                rows="5"
            >{{ old('des',$hub_kami->des) }}</textarea>

        </div>

        <button type="submit">
            Update
        </button>

        <a href="{{ route('Hub_kami.index') }}">
            Kembali
        </a>

    </form>

</div>

@endsection