@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

<div class="container">

    <div class="card">

        <h1>Edit Kontak</h1>

        @if ($errors->any())

            <div class="alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

        <form action="{{ route('empatkontak.update', $empatkontak->id) }}" method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">

                <label>Jenis Kontak</label>

                <select name="jenis" class="form-control" required>
                    <option value="email" {{ $empatkontak->jenis == 'email' ? 'selected' : '' }}>Email</option>
                    <option value="kantor" {{ $empatkontak->jenis == 'kantor' ? 'selected' : '' }}>Kantor</option>
                    <option value="telepon" {{ $empatkontak->jenis == 'telepon' ? 'selected' : '' }}>Telepon</option>
                    <option value="whatsapp" {{ $empatkontak->jenis == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
                </select>

            </div>

            <div class="form-group">

                <label>Isi Kontak</label>

                <input
                    type="text"
                    name="isi"
                    class="form-control"
                    value="{{ old('isi', $empatkontak->isi) }}"
                    required>

            </div>

            <div class="form-group">

                <label>Link</label>

                <input
                    type="text"
                    name="link"
                    class="form-control"
                    value="{{ old('link', $empatkontak->link) }}"
                    required>

            </div>

            <br>

            <button type="submit" class="btn btn-add">
                Update
            </button>

            <a href="{{ route('empatkontak.index') }}" class="btn btn-delete">
                Batal
            </a>

        </form>

    </div>

</div>
@endsection