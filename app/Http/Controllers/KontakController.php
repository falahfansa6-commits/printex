<?php

namespace App\Http\Controllers;

use App\Models\Kontak;


class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kontak = Kontak::first();
        return view('kontak', compact('kontak'));
    }

}
