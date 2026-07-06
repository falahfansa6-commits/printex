<?php

namespace App\Http\Controllers;

use App\Models\Wa;
use Illuminate\Http\Request;

class WaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wa = Wa::first();
        return view('wa', compact('wa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(wa $wa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(wa $wa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, wa $wa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(wa $wa)
    {
        //
    }
}
