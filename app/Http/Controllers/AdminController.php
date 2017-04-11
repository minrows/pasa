<?php

namespace App\Http\Controllers;

use App\overseas_client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\pasa_carousel;
use App\curr_demand;
use App\curr_demand_img;
use App\about;
use App\recruitment_procedure;
use App\contact;
use App\gallery;



class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pasa_admin.home');
    }

    public function carousel()
    {
        $carousels=pasa_carousel::all();
        return view('pasa_admin.carousel',compact('carousels'));
    }

    public function add_carousel(Request $request)
    {
        $pasa=new pasa_carousel;
        $this->validate($request,[
            'title'=>'required',
            'state'=>'required',
            'img'=>'required',
            ]);
        $path = $request->file('img')->store('carousel');
        //$filename  = time() . '.' . $image->getClientOriginalExtension();

//        echo $path = public_path('image/carousel' . $filename);
//        echo '<br />';
//        echo $save_path='carousel/'.$filename;
//
//        Image::make($image->getRealPath())->resize(1200, 600)->save($path);

//        $user->save();

        $pasa->title=$request->title;
        $pasa->img=$path;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_carousel(Request $request)
    {
        $pasa=pasa_carousel::find($request->id);

        if ($request->hasFile('img')) {
            $del=$pasa->img;
            $del=str_replace('/','\\',$del);
            $del=public_path('image\\').$del;
            File::delete($del);
            $path = $request->file('img')->store('carousel');
            $pasa->img=$path;
        }
        $pasa->title=$request->title;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_carousel(Request $request)
    {
        $pasa=pasa_carousel::find($request->del_id);

        //img file delete
        $del=$pasa->img;
        $del=str_replace('/','\\',$del);
        $del=public_path('image\\').$del;
        File::delete($del);

        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }

    public function current_demand()
    {
        $curr_demands=curr_demand::all();
        return view('pasa_admin.current_demand',compact('curr_demands'));
    }

    public function add_current_demand(Request $request)
    {
        $pasa = new curr_demand;
        $pasa->title=$request->title;
        $pasa->trade=$request->trade;
        $pasa->quantity=$request->quantity;
        $pasa->country=$request->country;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_current_demand(Request $request)
    {
        $pasa=curr_demand::find($request->id);

        $pasa->title=$request->title;
        $pasa->trade=$request->trade;
        $pasa->quantity=$request->quantity;
        $pasa->country=$request->country;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_current_demand(Request $request)
    {
        $pasa=curr_demand::find($request->del_id);

        //img file delete
        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }


    public function current_demand_img()
    {
        $curr_demand_imgs=curr_demand_img::all();
        return view('pasa_admin.current_demand_img',compact('curr_demand_imgs'));
    }

    public function add_current_demand_img(Request $request)
    {
        $pasa = new curr_demand_img;
        $path = $request->file('myFile')->store('current_demand');
        // $pasa->title=$request->title;
        $pasa->img_thumb=$path;
        $pasa->img_full=$path;

        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_current_demand_img(Request $request)
    {
        $pasa=curr_demand_img::find($request->id);

        if ($request->hasFile('img')) {

            $del=$pasa->img_thumb;
            $del=str_replace('/','\\',$del);
            $del=public_path('image\\').$del;
            File::delete($del);
            $path = $request->file('img')->store('current_demand');
            $pasa->img_thumb=$path;
            $pasa->img_full=$path;

//            $del=$pasa->img_full;
//            $del=str_replace('/','\\',$del);
//            $del=public_path('image\\').$del;
//            File::delete($del);
//            $path = $request->file('img')->store('current_demand');
//            $pasa->img_thumb=$path;
        }
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_current_demand_img(Request $request)
    {
        $pasa=curr_demand_img::find($request->del_id);

        //img file delete
        $del=$pasa->img_thumb;
        $del=str_replace('/','\\',$del);
        $del=public_path('image\\').$del;
        File::delete($del);

        $del=$pasa->img_full;
        $del=str_replace('/','\\',$del);
        $del=public_path('image\\').$del;
        File::delete($del);

        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }


    public function about()
    {
        $abouts=about::all();
        return view('pasa_admin.about',compact('abouts'));
    }

    public function add_about(Request $request)
    {
        $pasa = new about;
        $pasa->title=$request->title;
        $pasa->description=$request->description;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_about(Request $request)
    {
        $pasa=about::find($request->id);

        $pasa->title=$request->title;
        $pasa->description=$request->input('description_'.$request->id);
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_about(Request $request)
    {
        $pasa=about::find($request->del_id);

        //img file delete
        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }

    public function recruitment_procedure()
    {
        $recruitment_procedures=recruitment_procedure::all();
        return view('pasa_admin.recruitment_procedure', compact('recruitment_procedures'));
    }

    public function add_recruitment_procedure(Request $request)
    {
        $pasa = new recruitment_procedure;
        $pasa->title=$request->title;
        $pasa->description=$request->description;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_recruitment_procedure(Request $request)
    {
        $pasa=recruitment_procedure::find($request->id);

        $pasa->title=$request->title;
        $pasa->description=$request->input('description_'.$request->id);
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_recruitment_procedure(Request $request)
    {
        $pasa=recruitment_procedure::find($request->del_id);

        //img file delete
        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }

    public function contact()
    {
        $contacts=contact::all();
        return view('pasa_admin.contact',compact('contacts'));
    }

    public function add_contact(Request $request)
    {
        $pasa = new contact;
        $pasa->title=$request->title;
        $pasa->description=$request->description;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_contact(Request $request)
    {
        $pasa=contact::find($request->id);

        $pasa->title=$request->title;
        $pasa->description=$request->input('description_'.$request->id);
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_contact(Request $request)
    {
        $pasa=contact::find($request->del_id);

        //img file delete
        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }

    public function gallery()
    {
        // $pass=curr_demand_img::all();
        // return array_keys(curr_demand_img:ldap_get_attributes(link_identifier, result_entry_identifier);
        return view('pasa_admin.gallery');
    }
    public function add_gallery(Request $request)
    {
        $pasa = new gallery;
        $path = $request->file('myFile')->store('gallery');
        $pasa->title=$request->title;
        $pasa->img_thumb=$path;
        $pasa->img_full=$path;

        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function overseas_client()
    {
//        $overseas_clients=overseas_client::all();
        $overseas_clients=overseas_client::orderBy('country')
            ->groupBy('country')
            ->groupBy('id')
            ->groupBy('title')
            ->groupBy('img')
            ->groupBy('state')
            ->groupBy('created_at')
            ->groupBy('updated_at')
            ->get();
//        return $overseas_clients;
        return view('pasa_admin.overseas_client',compact('overseas_clients'));
    }

    public function add_overseas_client(Request $request)
    {
        $pasa=new overseas_client();

        if($request->hasFile('img'))
        {
            $path = $request->file('img')->store('overseas_client');
            $pasa->img=$path;
        }
        //$filename  = time() . '.' . $image->getClientOriginalExtension();

//        echo $path = public_path('image/carousel' . $filename);
//        echo '<br />';
//        echo $save_path='carousel/'.$filename;
//
//        Image::make($image->getRealPath())->resize(1200, 600)->save($path);

//        $user->save();

        $pasa->title=$request->title;
        $pasa->country=$request->country;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_overseas_client(Request $request)
    {
        $pasa=overseas_client::find($request->id);

        if ($request->hasFile('img')) {
            $del=$pasa->img;
            $del=str_replace('/','\\',$del);
            $del=public_path('image\\').$del;
            File::delete($del);
            $path = $request->file('img')->store('overseas_client');
            $pasa->img=$path;
        }
        $pasa->title=$request->title;
        $pasa->country=$request->country;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_overseas_client(Request $request)
    {
        $pasa=overseas_client::find($request->del_id);

        //img file delete
        if($pasa->img!=null && $pasa->img!="") {
            $del = $pasa->img;
            $del = str_replace('/', '\\', $del);
            $del = public_path('image\\') . $del;
            File::delete($del);
        }

        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }

}
