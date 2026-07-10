<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;


class AboutController extends Controller
{
  public function index()
  {
    return view('admin.about');
  }
}
