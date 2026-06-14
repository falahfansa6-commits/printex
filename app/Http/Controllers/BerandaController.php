<?php

namespace App\Http\Controllers;

use App\Models\Slider;

class BerandaController extends Controller
{
    public function index()
    {
        $sliderBeranda = Slider::where('posisi', 'beranda')
            ->where('status', 1)
            ->orderBy('urutan', 'asc')
            ->get();

        return view('beranda', compact('sliderBeranda'));
    }
}