<?php

namespace App\Http\Controllers;

use App\Models\OurValue;
use Illuminate\Http\Request;

class OurValueController extends Controller
{
    public function index()
    {
        $ourvalues = OurValue::orderBy('urutan')->get();
      

        return view('ourvalue.index', compact('ourvalues'));
    }

    public function create()
    {
        return view('ourvalue.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required|max:255',
            'deskripsi'=>'required',
            'urutan'=>'required|integer',
        ]);

        OurValue::create([
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'urutan'=>$request->urutan,
            'status'=>$request->status ?? 1,
        ]);

        return redirect()->route('ourvalues.index')
                ->with('success','Data berhasil ditambahkan.');
    }

    public function edit(OurValue $ourvalue)
    {
        return view('ourvalue.edit',compact('ourvalue'));
    }

    public function update(Request $request, OurValue $ourvalue)
    {
        $request->validate([
            'judul'=>'required|max:255',
            'deskripsi'=>'required',
            'urutan'=>'required|integer',
        ]);

        $ourvalue->update([
            'judul'=>$request->judul,
            'deskripsi'=>$request->deskripsi,
            'urutan'=>$request->urutan,
            'status'=>$request->status ?? 1,
        ]);

        return redirect()->route('ourvalues.index')
                ->with('success','Data berhasil diubah.');
    }

    public function destroy(OurValue $ourvalue)
    {
        $ourvalue->delete();

        return redirect()->route('ourvalues.index')
                ->with('success','Data berhasil dihapus.');
    }
}