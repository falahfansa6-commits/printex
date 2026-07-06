<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kontak;

class KontakController extends Controller
{
    public function index(Request $request)
    {
        $kontak = Kontak::first();

        return view('admin.kontak', compact('kontak'));
    }


    public function update(Request $request)
    {
        $kontak = Kontak::first();

        if (!$kontak) {

            Kontak::create([
                'email' => $request->email,
                'link_email' => $request->link_email
            ]);

        } else {

            $kontak->update([
                'email' => $request->email,
                'link_email' => $request->link_email
            ]);

        }

        return redirect()->route('kontak')
            ->with('success', 'Berhasil Ditambahkan');
    }
}