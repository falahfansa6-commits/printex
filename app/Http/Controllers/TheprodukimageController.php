<?php

namespace App\Http\Controllers;

use App\Models\Theprodukimage;
use Illuminate\Http\Request;

class TheprodukimageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {
        $theprodukimage = Theprodukimage::all();
        return view('theprodukimage.index', compact('theprodukimage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('theprodukimage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);
        $file = $request->file('gambar');

        $namaFile =time().'_'.$file->getClientOriginalName();
    }

    /**
     * Display the specified resource.
     */
    public function show(theprodukimage $theprodukimage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(theprodukimage $theprodukimage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, theprodukimage $theprodukimage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(theprodukimage $theprodukimage)
    {
        //
    }
}
