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
        $about=about::where(['state'=>'on','title'=>'Company Profile'])->first();
        return view('pasa_home/home',compact('carousels','about'));
    }

    public function about()
    {
        $abouts=about::where('state','on')->get();
        return view('pasa_home/about',compact('abouts'));
    }
}
