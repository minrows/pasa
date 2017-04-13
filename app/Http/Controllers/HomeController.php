<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\pasa_carousel;
use App\about;

class HomeController extends Controller
{
    public function index()
    {
        $carousels=pasa_carousel::where('state','on')->get();
        $abouts=about::all();
        return view('pasa_home/home',compact('carousels','abouts'));
    }

    public function about()
    {
        return view('pasa_home/about');
    }
}
