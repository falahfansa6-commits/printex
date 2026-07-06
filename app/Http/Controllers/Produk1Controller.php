<?php

namespace App\Http\Controllers;

use App\Models\Produk1;
use Illuminate\Http\Request;

class Produk1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk1 = Produk1::latest()->get();
        return view('produk1.index', compact('produk1'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'  => 'required',
            'isi'    => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $folder = public_path('uploads/produk1');

        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }

        $gambarPath = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $gambarPath = 'uploads/produk1/' . $namaFile;
        }

        Produk1::create([
            'judul'  => $request->judul,
            'isi'    => $request->isi,
            'gambar' => $gambarPath,
        ]);

        return redirect()
            ->route('produk1.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk1 $produk1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produk1 = Produk1::findOrFail($id);

        return view('produk1.edit', compact('produk1'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk1 = Produk1::findOrFail($id);

        $request->validate([
            'judul'  => 'required',
            'isi'    => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $folder = public_path('uploads/produk1');

        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }

        $gambarPath = $produk1->gambar;

        if ($request->hasFile('gambar')) {

            // Hapus gambar lama
            if (
                $produk1->gambar &&
                file_exists(public_path($produk1->gambar))
            ) {
                unlink(public_path($produk1->gambar));
            }

            $file = $request->file('gambar');
            $namaFile = time() . '_' . $file->getClientOriginalName();

            $file->move($folder, $namaFile);

            $gambarPath = 'uploads/produk1/' . $namaFile;
        }

        $produk1->update([
            'judul'  => $request->judul,
            'isi'    => $request->isi,
            'gambar' => $gambarPath,
        ]);

        return redirect()
            ->route('produk1.index')
            ->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produk1 = Produk1::findOrFail($id);

        if (
            $produk1->gambar &&
            file_exists(public_path($produk1->gambar))
        ) {
            unlink(public_path($produk1->gambar));
        }

        $produk1->delete();

        return redirect()
            ->route('produk1.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}