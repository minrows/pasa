<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\online_form;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
        $inserted=online_form::orderBy('id','desc')->first();
        $s= $this->view('pasa_home.check',compact('inserted'))
            ->to('info@pasainternational.com.np')
            ->from("'".$inserted->email."'")
            ->subject('Online Application Form: < Online Ref. no: '.$inserted->id.' >')
            ->attach(public_path('image\\online_files\\form_'.str_replace('/','\\',$inserted->id.".jpg")))
            ->attach(public_path('image\\online_files\\pp_'.str_replace('/','\\',$inserted->id.".".$request->pp->extension())))
            ->attach(public_path('image\\online_files\\pp_doc_'.str_replace('/','\\',$inserted->id.".".$request->pp_doc->extension())))
            ->attach(public_path('image\\online_files\\cv_doc_'.str_replace('/','\\',$inserted->id.".".$request->cv_doc->extension())));
            //->attach(public_path('image\\online_files\\edu_doc_'.str_replace('/','\\',$inserted->id.".".$request->edu_doc->extension())));

        if ($request->hasFile('edu_doc')) {
            $s->attach(public_path('image\\online_files\\edu_doc_'.str_replace('/','\\',$inserted->id.".".$request->edu_doc->extension())));
        }
        if ($request->hasFile('exp_doc')) {
            $s->attach(public_path('image\\online_files\\exp_doc_'.str_replace('/','\\',$inserted->id.".".$request->exp_doc->extension())));
        }
        if ($request->hasFile('train_doc')) {
            $s->attach(public_path('image\\online_files\\train_doc_'.str_replace('/','\\',$inserted->id.".".$request->train_doc->extension())));
        }
        if ($request->hasFile('drive_doc')) {
           $s ->attach(public_path('image\\online_files\\drive_doc_'.str_replace('/','\\',$inserted->id.".".$request->drive_doc->extension())));
        }

        return $s;
    }



}
