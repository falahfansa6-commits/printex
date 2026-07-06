<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Tentang;
use App\Models\Kontak;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
{
    $keyword = strtolower($request->keyword);

    $hasil = [];

    // Halaman statis
    if (str_contains('beranda', $keyword)) {
        $hasil[] = [
            'judul' => 'Beranda',
            'url' => route('beranda'),
            'kategori' => 'Halaman'
        ];
    }

    $tentang = Tentang::where('judul', 'like', "%{$keyword}%")
        ->orWhere('isi', 'like', "%{$keyword}%")
        ->get();

    foreach ($tentang as $tentang) {
        $hasil[] = [
            'judul' => $tentang->judul,
            'url' => route('about'),
            'kategori' => 'Tentang'
        ];
    }

    if (str_contains('kontak', $keyword) || str_contains('email', $keyword)) {
        $hasil[] = [
            'judul' => 'Kontak',
            'url' => route('kontak'),
            'kategori' => 'Halaman'
        ];
    }

    // Cari lokasi
    $locations = Location::where('nama_kota', 'like', "%{$keyword}%")
        ->orWhere('alamat', 'like', "%{$keyword}%")
        ->get();

    foreach ($locations as $location) {
        $hasil[] = [
            'judul' => $location->nama_kota,
            'url' => route('about'),
            'kategori' => 'Lokasi'
        ];
    }

    // Cari tentang
    $tentangs = Tentang::where('judul', 'like', "%{$keyword}%")
        ->orWhere('isi', 'like', "%{$keyword}%")
        ->get();

    foreach ($tentangs as $tentang) {
        $hasil[] = [
            'judul' => $tentang->judul,
            'url' => route('about'),
            'kategori' => 'Tentang'
        ];
    }

    // Cari kontak
    $kontaks = Kontak::where('email', 'like', "%{$keyword}%")
        ->get();

    foreach ($kontaks as $kontak) {
        $hasil[] = [
            'judul' => $kontak->email,
            'url' => route('kontak'),
            'kategori' => 'Kontak'
        ];
    }

    return view('search', compact('hasil', 'keyword'));
}
}