<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DiverseController extends Controller
{
  public function about_us(){
    return view('layouts.about-us');
}
}
