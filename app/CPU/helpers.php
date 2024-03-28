<?php
namespace App\CPU;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class Helpers {

    public static function sendEmail($mail, $pass)
    {
        
        $content = [
            'subject' => 'This is the mail subject',
            'mail' => $mail ,
            'pass' => $pass ,
        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
}