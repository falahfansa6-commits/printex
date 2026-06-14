<?php

namespace App\Http\Controllers;


use App\Models\Slider;

class PelayananController extends Controller
{
   public function index()
   {
   $sliderPelayanan = Slider::where('posisi','pelayanan')
            ->where('status','1')
            ->orderBy('urutan','asc')
            ->get();

            return view('pelayanan', compact('sliderPelayanan'));

   }
}
