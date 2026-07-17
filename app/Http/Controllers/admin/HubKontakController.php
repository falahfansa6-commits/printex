<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class HubKontakController extends Controller
{
    public function index()
    {
        return view('admin.hubkontak');
    }
}
