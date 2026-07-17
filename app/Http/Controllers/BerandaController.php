<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Beranda;
use App\Models\Slider;
use App\Models\OurValue;
use App\Models\OurValueImage;
use App\Models\Service;
use App\Models\Secound;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        $beranda = Beranda::query();

        if ($request->filled('q')) {
            $beranda->where('nama_kota', 'like', '%' . $request->q . '%');
        }

       

        $sliderBeranda = Slider::where('posisi', 'beranda')
            ->where('status', 1)
            ->orderBy('urutan', 'asc')
            ->get();

        $ourvalues = OurValue::where('status', 1)
            ->orderBy('urutan', 'asc')
            ->get();

        $gambar = OurValueImage::first();

        $services = Service::orderBy('urutan', 'asc')->get();

        $secounds = Secound::all();

        return view('index', compact(
            'beranda',
            'sliderBeranda',
            'ourvalues',
            'gambar',
            'services',
            'secounds'
        ));
    }
}