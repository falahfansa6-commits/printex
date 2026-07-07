<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmpatKontak;

class EmpatKontakController extends Controller
{
    public function index()
    {
        $empatkontaks = EmpatKontak::all();
        return view('admin.empatkontak.index', compact('empatkontaks'));
    }

    public function create()
    {
        return view('admin.empatkontak.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis' => "required|in:email,kantor,telepon,whatsapp",
            'isi' => "required|string|max:255",
            'link' => "required|string|max:255",
        ]);

        EmpatKontak::create($request->all());
        return redirect()->route('empatkontak.index')->with('success', 'Data Kontak Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $empatkontak = EmpatKontak::findOrFail($id);
        return view('admin.empatkontak.edit', compact('empatkontak'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis' => 'required|in:email,kantor,telepon,whatsapp',
            'isi' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        $empatkontak = EmpatKontak::findOrFail($id);
        $empatkontak->update($request->all());

        return redirect()->route('empatkontak.index')
            ->with('success', 'Data kontak berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $empatkontak = EmpatKontak::findOrFail($id);
        $empatkontak->delete();

        return redirect()->route('empatkontak.index')
            ->with('success', 'Data kontak berhasil dihapus.');
    }

    }