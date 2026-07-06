<?php

namespace App\Http\Controllers;

use App\Models\Maps;


class MapsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maps = Maps::first();
        return view('maps', compact('maps'));
    }

    
}
