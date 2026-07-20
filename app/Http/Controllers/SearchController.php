<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Tentang;
use App\Models\Service;
use App\Models\OurValue;
use App\Models\Secound;
use App\Models\TheProduk;
use App\Models\Produk1;
use App\Models\Produk2;
use App\Models\Produk3;
use App\Models\Hub_kami;
use App\Models\Kontak;
use App\Models\Location;
use Illuminate\Support\Facades\Schema;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $keyword = $request->k;
        $results = collect();

        $models = [
            Slider::class,
            Tentang::class,
            Service::class,
            OurValue::class,
            Secound::class,
            TheProduk::class,
            Produk1::class,
            Produk2::class,
            Produk3::class,
            Hub_kami::class,
            Kontak::class,
            Location::class,
        ];

        foreach ($models as $model) {
            if (Schema::hasColumn((new $model)->getTable(), 'judul') &&
                Schema::hasColumn((new $model)->getTable(), 'isi')) {

                $data = $model::where('judul', 'like', "%{$keyword}%")
                    ->orWhere('isi', 'like', "%{$keyword}%")
                    ->get();

                $results = $results->merge($data);
            }
        }

        return view('search_results', compact('results', 'keyword'));
    }
}