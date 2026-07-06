<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Maps;

class MapsController extends Controller
{
    public function index(Request $request)
    {
        $maps = Maps::first();

        return view('admin.maps', compact('maps'));
    }


    public function update(Request $request)
    {
        $maps = Maps::first();

        if (!$maps) {

            Maps::create([
                'lokasi' => $request->lokasi,
                'link_lokasi' => $request->link_lokasi
            ]);

        } else {

            $maps->update([
                'lokasi' => $request->lokasi,
                'link_maps' => $request->link_maps
            ]);

        }

        return redirect()->route('maps')
            ->with('success', 'Berhasil Ditambahkan');
    }
}