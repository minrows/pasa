<?php
namespace App\Http\Controllers;
use App\overseas_client;
use App\recruitment_procedure;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\pasa_carousel;
use App\about;
use App\gallery;
use App\curr_demand_img;
use App\curr_demand;
use App\online_form;
use App\link;


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

        // Game::limit(8)->offset(8)->get();

        return view('pasa_home/home',compact('carousels','about','chairman','rps','gallery','curr_demand_img','links'));
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
        $links=link::all();
        return view('pasa_home/about',compact('abouts','oc_countries','overseas_clients','links'));
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


    public function online_submit(Request $request)
    {
        if (empty($request))
        {
            return back();
        }
        else
        {
//            return $request->doe;
            $pasa=new online_form;
            $pasa->name=$request->name;
            $pasa->position=$request->position;
            $pasa->tel_no=$request->tel_no;
            $pasa->mob_no=$request->mob_no;
            $pasa->religion=$request->religion;
            $pasa->address=$request->address;
            $pasa->con_address=$request->con_address;
            $pasa->email=$request->email;
            $pasa->qualification=$request->qualification;
            $pasa->dob=$request->dob;
            $pasa->gender=$request->gender;
            $pasa->marital_status=$request->marital_status;
            if($request->spouse_name!=null && $request->spouse_name!="")
            {
                $pasa->spouse_name=$request->spouse_name;
            }
            $pasa->passport_no=$request->passport_no;
            $pasa->doi=$request->doi;
            $pasa->place_of_issue=$request->place_of_issue;
            $pasa->doe=$request->doe;
            $pasa->height_feet=$request->height_feet;
            $pasa->height_inch=$request->height_inch;
            $pasa->weight=$request->weight;
            $pasa->parent_name=$request->parent_name;
            $pasa->prior_exp=$request->prior_exp;
            $pasa->document=$request->document;

            $pasa->save();

            $inserted=online_form::orderBy('id','desc')->first();

            $pasa1=online_form::find($inserted->id);
            $path_pp=$request->pp->storeAs('online_files','pp_'.$inserted->id.'.'.$request->pp->extension());
            $pasa1->img=$path_pp;
            $pasa1->save();

            $path_pp_doc=$request->pp_doc->storeAs('online_files','pp_doc_'.$inserted->id.'.'.$request->pp_doc->extension());
            $path_cv_doc=$request->cv_doc->storeAs('online_files','cv_doc_'.$inserted->id.'.'.$request->cv_doc->extension());


            $row = $result->fetch_assoc();
            $font="./fonts/times.ttf";
            //$font="home/pasa_international/pasainternational.com.np/fonts/times.TTF";
            $sImg = ImageCreateFromJPEG( $row['img'] );
            $dImg = ImageCreateFromJPEG( "temp.jpg" );



            if ($request->hasFile('edu_doc')) {
                $path_edu_doc=$request->edu_doc->storeAs('online_files','edu_doc_'.$inserted->id.'.'.$request->edu_doc->extension());
            }
            if ($request->hasFile('exp_doc')) {
                $path_exp_doc=$request->exp_doc->storeAs('online_files','exp_doc_'.$inserted->id.'.'.$request->exp_doc->extension());
            }
            if ($request->hasFile('train_doc')) {
                $path_train_doc=$request->train_doc->storeAs('online_files','train_doc_'.$inserted->id.'.'.$request->train_doc->extension());
            }
            if ($request->hasFile('drive_doc')) {
                $path_drive_doc=$request->drive_doc->storeAs('online_files','drive_doc_'.$inserted->id.'.'.$request->drive_doc->extension());
            }

            if($this->create_pdf($inserted->id))
            {
                session()->flash('message', 'Form Submitted Successfully!');
                return redirect('/');
            }
            else
            {
                session()->flash('message', 'Sorry, some error occurred!');
                return back();
            }
        }
    }

    public function create_pdf($id)
    {
        $row=online_form::where('id',$id)->first();
        if (count($row)>0) {
            $font=public_path('/fonts/times.ttf');
            //$font="home/pasa_international/pasainternational.com.np/fonts/times.TTF";

//            $del=str_replace('/','\\',$del);
//            $del=public_path('image\\').$del;
//
            $sImg = ImageCreateFromJPEG( public_path("image\\".str_replace('/','\\',$row->img)) );
            $dImg = ImageCreateFromJPEG( public_path("/image/temp.jpg") );
            imagecopymerge($dImg, $sImg, 1022, 97, 0, 0, 157, 208, 100);
            //header('Content-Type: image/png');
            imagejpeg($dImg,"temp1.jpg");
            imagedestroy($dImg);
            imagedestroy($sImg);
            $rImg = ImageCreateFromJPEG( "temp1.jpg" );
            $color = imagecolorallocate($rImg, 0, 0, 0);
            imagettftext($rImg,18,0,255,350,$color,$font,$row['name']);
            imagejpeg($dImg,public_path("/image/temp1.jpg"));
            imagedestroy($dImg);
            imagedestroy($sImg);
            $rImg = ImageCreateFromJPEG( public_path("/image/temp1.jpg") );
            $color = imagecolorallocate($rImg, 0, 0, 0);
            imagettftext($rImg,18,0,255,350,$color,$font,$row->name);
//            imagestring( $rImg,50,255,345,urldecode(imagettftext($rImg,15,0,260,345,$color,$font,$row['name'])),$color );
            imagettftext($rImg,18,0,939,350,$color,$font,$row->position);
            imagettftext( $rImg,18,0,255,403,$color,$font,$row->tel_no);
            imagettftext( $rImg,18,0,558,403,$color,$font,$row->mob_no);
            imagettftext( $rImg,18,0,942,403,$color,$font,$row->religion);
            imagettftext( $rImg,18,0,255,452,$color,$font,$row->address);
            imagettftext( $rImg,18,0,255,510,$color,$font,$row->con_address);
            imagettftext( $rImg,18,0,255,565,$color,$font,$row->email);
            imagettftext( $rImg,18,0,814,565,$color,$font,$row->qualification);

            //inserting dob date
            $time_dob = strtotime($row->dob);
            $dob_y= date('Y', $time_dob);
            $dob_m= date('m', $time_dob);
            $dob_d= date('d', $time_dob);

            imagettftext( $rImg,18,0,233,630,$color,$font,($dob_d[0]));
            imagettftext( $rImg,18,0,275,630,$color,$font,($dob_d[1]));
            imagettftext( $rImg,18,0,335,630,$color,$font,($dob_m[0]));
            imagettftext( $rImg,18,0,376,630,$color,$font,($dob_m[1]));
            imagettftext( $rImg,18,0,433,630,$color,$font,($dob_y[0]));
            imagettftext( $rImg,18,0,472,630,$color,$font,($dob_y[1]));
            imagettftext( $rImg,18,0,515,630,$color,$font,($dob_y[2]));
            imagettftext( $rImg,18,0,553,630,$color,$font,($dob_y[3]));

            //inserting doi date
            $time_doi = strtotime($row->doi);
            $doi_y= date('Y', $time_doi);
            $doi_m= date('m', $time_doi);
            $doi_d= date('d', $time_doi);

            imagettftext( $rImg,18,0,572,736,$color,$font,($doi_d[0]));
            imagettftext( $rImg,18,0,603,736,$color,$font,($doi_d[1]));
            imagettftext( $rImg,18,0,642,736,$color,$font,($doi_m[0]));
            imagettftext( $rImg,18,0,672,736,$color,$font,($doi_m[1]));
            imagettftext( $rImg,18,0,714,736,$color,$font,($doi_y[0]));
            imagettftext( $rImg,18,0,744,736,$color,$font,($doi_y[1]));
            imagettftext( $rImg,18,0,772,736,$color,$font,($doi_y[2]));
            imagettftext( $rImg,18,0,800,736,$color,$font,($doi_y[3]));

            //inserting Expiry date
            $time_doe = strtotime($row->doe);
            $doe_y= date('Y', $time_doe);
            $doe_m= date('m', $time_doe);
            $doe_d= date('d', $time_doe);

            imagettftext( $rImg,18,0,232,796,$color,$font,($doe_d[0]));
            imagettftext( $rImg,18,0,268,796,$color,$font,($doe_d[1]));
            imagettftext( $rImg,18,0,317,796,$color,$font,($doe_m[0]));
            imagettftext( $rImg,18,0,349,796,$color,$font,($doe_m[1]));
            imagettftext( $rImg,18,0,399,796,$color,$font,($doe_y[0]));
            imagettftext( $rImg,18,0,433,796,$color,$font,($doe_y[1]));
            imagettftext( $rImg,18,0,467,796,$color,$font,($doe_y[2]));
            imagettftext( $rImg,18,0,501,796,$color,$font,($doe_y[3]));

            if($row->gender=='male')
            {
                imagestring( $rImg,50,800,616,urldecode('*'),$color );
            }
            else
            {
                imagestring( $rImg,50,928,616,urldecode('*'),$color );
            }

            if($row->marital_status=='single')
            {
                imagestring( $rImg,50,229,667,urldecode('*'),$color );
            }
            else
            {
                imagestring( $rImg,50,326,667,urldecode('*'),$color );
            }
            imagettftext( $rImg,18,0,643,675,$color,$font,$row->spouse_name);
            imagettftext( $rImg,18,0,260,724,$color,$font,$row->passport_no);
            imagettftext( $rImg,18,0,997,724,$color,$font,$row->place_of_issue);
            imagettftext( $rImg,18,0,638,781,$color,$font,$row->height_feet);
            imagettftext( $rImg,18,0,747,781,$color,$font,$row->height_inch);
            imagettftext( $rImg,18,0,961,781,$color,$font,$row->weight);
            imagettftext( $rImg,18,0,260,831,$color,$font,$row->parent_name);
            imagettftext( $rImg,18,0,260,884,$color,$font,$row->prior_exp);
            imagettftext( $rImg,18,0,260,989,$color,$font,$row->document);

            //header('Content-type: image/jpeg');
            imagejpeg($rImg,public_path('/image/online_files/form_'.$id.'.jpg'));
            imagedestroy($rImg);
            return true;
        }
        return false;
    }
}
