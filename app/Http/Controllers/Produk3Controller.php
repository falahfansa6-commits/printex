<?php

namespace App\Http\Controllers;

use App\Models\Produk3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Produk3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk3 = Produk3::latest()->get();

        return view('produk3.index', compact('produk3'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk3.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $gambar = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/produk3'), $gambar);
        }

        Produk3::create([
            
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('produk3.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk3 $produk3)
    {
        return view('produk3.show', compact('produk3'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk3 $produk3)
    {
        return view('produk3.edit', [
            'data' => $produk3
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk3 $produk3)
    {
        $request->validate([
            
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $gambar = $produk3->gambar;

        if ($request->hasFile('gambar')) {

            if ($gambar && File::exists(public_path('upload/produk3/' . $gambar))) {
                File::delete(public_path('upload/produk3/' . $gambar));
            }

            $file = $request->file('gambar');
            $gambar = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('upload/produk3'), $gambar);
        }

        $produk3->update([
            
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);

        return redirect()->route('produk3.index')
            ->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk3 $produk3)
    {
        if ($produk3->gambar && File::exists(public_path('upload/produk3/' . $produk3->gambar))) {
            File::delete(public_path('upload/produk3/' . $produk3->gambar));
        }

        $produk3->delete();

        return redirect()->route('produk3.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}