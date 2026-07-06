<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Telepon;

class TeleponController extends Controller
{
    public function index(Request $request)
    {
        $telepon = Telepon::first();

        return view('admin.telepon', compact('telepon'));
    }


    public function update(Request $request)
    {
        $telepon = Telepon::first();

        if (!$telepon) {

            Telepon::create([
                'nomor' => $request->nomor,
                'link_whatsapp' => $request->link_whatsapp
            ]);

        } else {

            $telepon->update([
                'nomor' => $request->nomor,
                'link_whatsapp' => $request->link_whatsapp
            ]);

        }

        return redirect()->route('telepon')
            ->with('success', 'Berhasil Ditambahkan');
    }
}