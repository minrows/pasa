<?php
namespace App\Http\Controllers;
use App\corporate_field;
use App\corporate_member;
use App\overseas_client;
use App\recruitment_procedure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pasa_carousel;
use App\about;
use App\gallery;
use App\feedback;
use App\curr_demand_img;
use App\curr_demand;
use App\online_form;
use App\link;

use Illuminate\Support\Facades\Mail;


class HomeController extends Controller
{
    public function index()
    {
        $carousels=pasa_carousel::where('state','on')->get();
        $about=about::where(['state'=>'on','title'=>'Company Profile'])->first();
        $chairman=about::where(['state'=>'on','title'=>'Message from Chairman'])->first();
        $rps=recruitment_procedure::where('state','on')->get();
        $gallery=gallery::limit(8)->where('state','on')->get();
        $curr_demand_img=curr_demand_img::where('state','on')->get();
        $links=link::all();
        $overseas_client=overseas_client::where('state','on')->get();

        return view('pasa_home/home',compact('carousels','about','chairman','rps','gallery','curr_demand_img','links','overseas_client'));
    }

    public function about()
    {
        $abouts=about::where('state','on')->get();
        $oc_countries=overseas_client::select('country')->where('state','on')->distinct()->get();
        $overseas_clients=overseas_client::orderBy('country')
            ->groupBy('country')
            ->groupBy('title')
            ->groupBy('id')
            ->groupBy('img')
            ->groupBy('state')
            ->groupBy('created_at')
            ->groupBy('updated_at')
            ->get();

        $cfs=corporate_field::where('state','on')->get();
        $cms=corporate_member::where('state','on')->get();



        $links=link::all();
        return view('pasa_home/about',compact('abouts','oc_countries','overseas_clients','links','cfs','cms'));
    }

    public function recruitment(Request $request)
    {
        $rps=recruitment_procedure::where('state','on')->get();
        $links=link::all();
        $sel=$request->sel;
        return view('pasa_home/recruitment',compact('rps','sel','links'));
    }

    public function gallery(Request $request)
    {
        $gallery=gallery::where('state','on')->get();
        $links=link::all();
        // $sel=$request->sel;
        return view('pasa_home/gallery',compact('gallery','links'));
    }
    public function curr_demand(Request $request)
    {
        $curr_demand=curr_demand::where('state','on')->get();
        $curr_demand=curr_demand::where('state','on')->orderBy('title')
            ->groupBy('title')
            ->groupBy('country')
            ->groupBy('trade')
            ->groupBy('id')
            ->groupBy('quantity')
            ->groupBy('state')
            ->groupBy('created_at')
            ->groupBy('updated_at')
             ->get();
        $links=link::all();
        return view('pasa_home/curr_demand',compact('curr_demand','links'));
    }


    public function online()
    {
        $links=link::all();
        return view('pasa_home/online','links');
    }


}
