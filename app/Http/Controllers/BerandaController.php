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
    $keyword = $request->input('k');

    $beranda = Beranda::query();

    if (!empty($keyword)) {
        $beranda->where(function ($query) use ($keyword) {
            $query->where('judul', 'LIKE', "%{$keyword}%")
                  ->orWhere('isi', 'LIKE', "%{$keyword}%");
        });
    }

$sliderBeranda = Slider::when($keyword, function ($query) use ($keyword) {
    $query->where('judul', 'like', "%{$keyword}%")
          ->orWhere('isi', 'like', "%{$keyword}%");
})
->where('posisi', 'beranda')
->where('status', 1)
->orderBy('urutan')
->get();

$ourvalues = OurValue::when($keyword, function ($query) use ($keyword) {
$query->where('judul', 'like', "%{$keyword}%")
->orwhere('isi', 'like', "%{$keyword}%");
})

->orderBy('urutan', 'asc')
->get();


$gambar = OurValueImage::when($keyword, function ($query) use ($keyword) {
    $query->where('judul', 'like', "%{$keyword}%")
          ->orWhere('isi', 'like', "%{$keyword}%");
})->first();


$services = Service::when($keyword, function ($query) use ($keyword) {
    $query->where('judul', 'like', "%{$keyword}%")
          ->orWhere('isi', 'like', "%{$keyword}%");
})
->orderBy('urutan')
->get();

$secounds = Secound::when($keyword, function ($query) use ($keyword) {
    $query->where('judul', 'like', "%{$keyword}%")
          ->orWhere('isi', 'like', "%{$keyword}%");
})
->get();

    return view('index', compact(
        'beranda',
        'sliderBeranda',
        'ourvalues',
        'gambar',
        'services',
        'secounds',
        'keyword'
    ));
}
}
    // $beranda = $beranda->get();

    // $sliderBeranda = Slider::where('posisi', 'beranda')
    //     ->where('status', 1)
    //     ->orderBy('urutan', 'asc')
    //     ->get();

    // $ourvalues = OurValue::where('status', 1)
    //     ->orderBy('urutan', 'asc')
    //     ->get();

    // $gambar = OurValueImage::first();

    // $services = Service::orderBy('urutan', 'asc')->get();

    // $secounds = Secound::all();