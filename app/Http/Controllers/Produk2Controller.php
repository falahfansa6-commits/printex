<?php

namespace App\Http\Controllers;

use App\Models\Produk2;
use Illuminate\Http\Request;

class Produk2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk2 = Produk2::latest()->get();
        return view('produk2.index', compact('produk2'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk2.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $folder = public_path('uploads/produk2');

        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }

        $gambarPath = null;

        if ($request->hasFile('gambar')) {

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $gambarPath = 'uploads/produk2/' . $namaFile;
        }

        Produk2::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambarPath,
        ]);

        return redirect()
            ->route('produk2.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk2 $produk2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk2 = Produk2::findOrFail($id);

        return view('produk2.edit', compact('produk2'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk2 = Produk2::findOrFail($id);

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $folder = public_path('uploads/produk2');

        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }

        $gambarPath = $produk2->gambar;

        if ($request->hasFile('gambar')) {

            if ($produk2->gambar && file_exists(public_path($produk2->gambar))) {
                unlink(public_path($produk2->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $gambarPath = 'uploads/produk2/' . $namaFile;
        }

        $produk2->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $gambarPath,
        ]);

        return redirect()
            ->route('produk2.index')
            ->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk2 = Produk2::findOrFail($id);

        if ($produk2->gambar && file_exists(public_path($produk2->gambar))) {
            unlink(public_path($produk2->gambar));
        }

        $produk2->delete();

        return redirect()
            ->route('produk2.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}