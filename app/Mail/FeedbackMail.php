<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\feedback;

class FeedbackMail extends Mailable
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
        $inserted=feedback::orderBy('id','desc')->first();
        return $this->to('info@pasainternational.com.np')
            ->from("'".$inserted->email."'")
            ->subject('Contact Us: < Contact Id: '.$inserted->id.' >')
            ->view('pasa_home/feedback_check', compact('inserted'));
    }
}
