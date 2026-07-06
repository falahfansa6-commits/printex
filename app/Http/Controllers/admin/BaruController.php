<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Baru;

class BaruController extends Controller
{
    public function index()
    {
    $baru = Baru::first();

    return view('admin.baru', compact('baru'));
}

    public function store(Request $request){
        return redirect('/')
        ->with('success', 'Data Berhasil Disimpan');
        dd("masuk store");
        $request->validate();
    }

    public function update(Request $request)
    {
        $baru = Baru::first();

        $gambar = $baru ? $baru->gambar : null;

        if($request->hasFile('gambar')){
            $gambar = $request->file('gambar')->store('gambar','public');
        }

        if ($baru === null) {
            Baru::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $gambar
            ]);
        } else {
            if ($gambar === null) {
                $gambar = $baru->gambar;
            }

            $baru->update([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'gambar' => $gambar
            ]);
        }

        return redirect('/index');
    }
}