<?php

namespace App\Http\Controllers;


use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\pasa_carousel;
use App\curr_demand;
use App\curr_demand_img;
use App\about;
use App\recruitment_procedure;
use App\contact;
use App\gallery;
use App\achiever;
use App\corporate_field;
use App\corporate_member;
use App\overseas_client;



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
        if($pasa->title=="Message from Chairman" || $pasa->title=="Message from CEO"){
            if ($request->hasFile('myFile')) {
            $del=$pasa->img;
            $del=str_replace('/','\\',$del);
            $del=public_path('image\\').$del;
            File::delete($del);
            $path = $request->file('myFile')->store('about');
            $pasa->img=$path;
            }            
        }
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_about(Request $request)
    {
        $pasa=about::find($request->del_id);
        if($pasa->img!=null && $pasa->img!="") {
            $del = $pasa->img;
            $del = str_replace('/', '\\', $del);
            $del = public_path('image\\') . $del;
            File::delete($del);
        }
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
        $pasa->img=$request->icon;
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
        $pasa->img=$request->icon;
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
         $galleries=gallery::all();
//         return $pasa;
        // return array_keys(curr_demand_img:ldap_get_attributes(link_identifier, result_entry_identifier);
        return view('pasa_admin.gallery',compact('galleries'));
    }
    public function add_gallery(Request $request)
    {
        $i=0;
        foreach($request->file('myFiles') as $file)
        {
            $pasa=new gallery;
            $path = $file->store('gallery');
            $pasa->img_full=$path;

            $filename  = time() . '.' . $file->getClientOriginalExtension();

            $thumb=Image::make($file->getRealPath())->resize(200, 200)->save('gallery/thumb');
            $pasa->img_full=$thumb;

//            $thumb=asset('image/gallery/thumb/').substr($path,7,strlen($path));
//
//
//
//            $thumb_tmp = imagecreatetruecolor(285, 218);
//            $w=0;$h=0;
//            $image = imagecreatefromjpeg(public_path('/image/'.$path));
//
//            Image::make();
//
//
//            list($w, $h) = getimagesize(asset('/image/'.$path));
//            echo $w;
//            echo $h;
//            exit;
//
//            header('Content-Type: image/jpeg');
//            imagejpeg($image, null, 100);
//            exit;


//            imagecopyresampled($thumb_tmp, $image, 0, 0, 0, 0, 285, 218, $w, $h);
//
//            imagejpeg($thumb_tmp, $thumb, 100);
//
//            move_uploaded_file($thumb, $thumb);
//
//

            $pasa->img_thumb=$path;

            $pasa->title=" ";
            $pasa->state="on";
            $pasa->save();
            $i++;
        }
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

    public function delete_gallery(Request $request)
    {
        $pasa=gallery::find($request->del_id);

        //img file delete
        if($pasa->img!=null && $pasa->img!="") {
            $del = $pasa->img_full;
            $del = str_replace('/', '\\', $del);
            $del = public_path('image\\') . $del;
            File::delete($del);

//            todo for thumb
        }

        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }


    public function overseas_client()
    {
//        $overseas_clients=overseas_client::all();
        $overseas_clients=overseas_client::orderBy('country')
            ->groupBy('country')
            ->groupBy('title')
            ->groupBy('id')
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

    public function update_gallery(Request $request)
    {
        $pasa=gallery::find($request->id);

        if ($request->hasFile('img')) {
            $del=$pasa->img_full;
            $del=str_replace('/','\\',$del);
            $del=public_path('image\\').$del;
            File::delete($del);
            $path = $request->file('img')->store('gallery');
            $pasa->img_full=$path;
            $pasa->img_thumb=$path;
        }
        $pasa->title=$request->title;
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

    public function achiever()
    {
        $achievers=achiever::all();
        return view('pasa_admin.achiever',compact('achievers'));
    }

    public function add_achiever(Request $request)
    {
        $pasa=new achiever;

        $path = $request->file('img')->store('achiever');
        $pasa->img=$path;

        $pasa->title=$request->title;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_achiever(Request $request)
    {
        $pasa=achiever::find($request->id);

        if ($request->hasFile('img')) {
            $del=$pasa->img;
            $del=str_replace('/','\\',$del);
            $del=public_path('image\\').$del;
            File::delete($del);
            $path = $request->file('img')->store('achiever');
            $pasa->img=$path;
        }
        $pasa->title=$request->title;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_achiever(Request $request)
    {
        $pasa=achiever::find($request->del_id);

        //img file delete
        $del=$pasa->img;
        $del=str_replace('/','\\',$del);
        $del=public_path('image\\').$del;
        File::delete($del);

        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }

    public function corporate_field()
    {
        $corporate_fields=corporate_field::all();
        return view('pasa_admin.corporate_field',compact('corporate_fields'));
    }

    public function add_corporate_field(Request $request)
    {
        $pasa = new corporate_field;
        $pasa->title=$request->title;
        $pasa->description=$request->description;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_corporate_field(Request $request)
    {
        $pasa=corporate_field::find($request->id);

        $pasa->title=$request->title;
        $pasa->description=$request->input('description_'.$request->id);
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Updated Successfully!');
        return back();
    }

    public function delete_corporate_field(Request $request)
    {
        $pasa = corporate_field::find($request->del_id);

        //img file delete
        $pasa->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }

    public function corporate_member()
    {
        $corporate_fields=corporate_field::select('id','title')->orderBy('id')->get();
        $corporate_members=corporate_member::orderBy('corporate_field_id')
            ->groupBy('corporate_field_id')
            ->groupBy('title')
            ->groupBy('id')
            ->groupBy('location')
            ->groupBy('img')
            ->groupBy('state')
            ->groupBy('created_at')
            ->groupBy('updated_at')
            ->get();

//        return $corporate_fields;
        return view('pasa_admin.corporate_member',compact('corporate_fields','corporate_members'));
    }

    public function add_corporate_member(Request $request)
    {
        $pasa=new corporate_member;
        $id=0;
        $check=corporate_member::where('corporate_field_id',$request->corporate_field_id)->get()->count();
        if($check<1)
        {
            $id=1;
        }
        else
        {
            $id=$check+1;
        }

        if($request->hasFile('img'))
        {
            $path = $request->file('img')->store('corporate_member');
            $pasa->img=$path;
        }

        $pasa->corporate_field_id=$request->corporate_field_id;
        $pasa->id=$id;
        $pasa->title=$request->title;
        $pasa->location=$request->location;
        $pasa->state=$request->state;
        $pasa->save();
        session()->flash('message', 'Data Added Successfully!');
        return back();
    }

    public function update_corporate_member(Request $request)
    {
        $pasa=corporate_member::find($request->id);

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

    public function delete_corporate_member(Request $request)
    {
        $pasa=corporate_member::where(['corporate_field_id'=>$request->del_id1,'id'=>$request->del_id])->first();

//        img file delete
        if($pasa->img!=null && $pasa->img!="") {
            $del = $pasa->img;
            $del = str_replace('/', '\\', $del);
            $del = public_path('image\\') . $del;
            File::delete($del);
        }

        corporate_member::where(['corporate_field_id'=>$request->del_id1,'id'=>$request->del_id])->first()->delete();
        session()->flash('message', 'Data Deleted Successfully!');
        return back();
    }


}
