<?php

namespace App\Http\Controllers;

use App\Models\OurValueImage;
use Illuminate\Http\Request;

class OurValueImageController extends Controller
{
    public function index()
    {
        $gambar = OurValueImage::all();

        return view('ourvalueimage.index', compact('gambar'));
    }

    public function create()
    {
        return view('ourvalueimage.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'gambar'=>'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $file = $request->file('gambar');

        $namaFile = time().'_'.$file->getClientOriginalName();

        if(!file_exists(public_path('uploads/ourvalueimage'))){
            mkdir(public_path('uploads/ourvalueimage'),0777,true);
        }

        $file->move(public_path('uploads/ourvalueimage'),$namaFile);

        OurValueImage::create([
            'gambar'=>'uploads/ourvalueimage/'.$namaFile
        ]);

        return redirect()->route('ourvalueimage.index')
                ->with('success','Gambar berhasil ditambahkan.');
    }

    public function edit(OurValueImage $ourvalueimage)
    {
        return view('ourvalueimage.edit', compact('ourvalueimage'));
    }

    public function update(Request $request, OurValueImage $ourvalueimage)
    {
        $request->validate([
            'gambar'=>'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $gambar = $ourvalueimage->gambar;

        if($request->hasFile('gambar')){

            if(file_exists(public_path($gambar))){
                unlink(public_path($gambar));
            }

            $file = $request->file('gambar');

            $namaFile = time().'_'.$file->getClientOriginalName();

            $file->move(public_path('uploads/ourvalueimage'),$namaFile);

            $gambar='uploads/ourvalueimage/'.$namaFile;
        }

        $ourvalueimage->update([
            'gambar'=>$gambar
        ]);

        return redirect()->route('ourvalueimage.index')
                ->with('success','Gambar berhasil diubah.');
    }

    public function destroy(OurValueImage $ourvalueimage)
    {
        if(file_exists(public_path($ourvalueimage->gambar))){
            unlink(public_path($ourvalueimage->gambar));
        }

        $ourvalueimage->delete();

        return redirect()->route('ourvalueimage.index')
                ->with('success','Data berhasil dihapus.');
    }
}