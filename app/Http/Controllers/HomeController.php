<?php

namespace App\Http\Controllers;

use App\overseas_client;
use App\recruitment_procedure;
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
        $chairman=about::where(['state'=>'on','title'=>'Message from Chairman'])->first();
        $rps=recruitment_procedure::where('state','on')->get();

        return view('pasa_home/home',compact('carousels','about','chairman','rps'));
    }

    public function about()
    {
        $abouts=about::where('state','on')->get();

        $oc_countries=overseas_client::select('country')->where('state','on')->distinct()->get();

        $overseas_clients=$overseas_clients=overseas_client::orderBy('country')
            ->groupBy('country')
            ->groupBy('title')
            ->groupBy('id')
            ->groupBy('img')
            ->groupBy('state')
            ->groupBy('created_at')
            ->groupBy('updated_at')
            ->get();

        return view('pasa_home/about',compact('abouts','oc_countries','overseas_clients'));
    }

    public function recruitment(Request $request)
    {
        $rps=recruitment_procedure::where('state','on')->get();
        $sel=$request->sel;
        return view('pasa_home/recruitment',compact('rps','sel'));
    }

    public function download($dwn)
    {
        switch ($dwn)
        {
            case "application_form":
                $pathToFile=public_path('/files/pasa-international-application-form.pdf');
                break;
            case "recruitment_procedure":
                $pathToFile=public_path('/files/pasa-international-recruitment-process.pdf');
                break;
            default:
                $pathToFile="";
                break;
        }
        return response()->download($pathToFile);
    }

    public function online()
    {
        return view('pasa_home/online');
    }
}
