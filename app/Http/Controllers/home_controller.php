<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\pasa_carousel;

class home_controller extends Controller
{
    public function index(pasa_carousel $check)
    {
        $data=['title'=>'asdf','img'=>'','state'=>'on'];
        return $check::all();
            //redirect('store');
        //return view('test',compact('check'));
    }

    public function add_carousel()
    {
        $pasa=new pasa_carousel;
        $pasa->title="check1";
        $pasa->img="check1";
        $pasa->state="on";
        $pasa->save();
        return redirect('/');
    }

    public function edit_carousel($id)
    {
        $pasa=pasa_carousel::find($id);
        $pasa->title="check_edit";
        $pasa->img="check_edit";
        $pasa->state="on";
        $pasa->save();
        return redirect('/');
    }

    public function delete_carousel($id)
    {
        $pasa=pasa_carousel::find($id);
        $pasa->delete();
        return redirect('/');
    }


}
