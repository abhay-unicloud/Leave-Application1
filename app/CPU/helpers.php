<?php
namespace App\CPU;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class Helpers {

    public static function sendEmail($employee ,$mail, $pass)
    {
        
        $content = [
            'subject' => 'This is the mail subject',
            'employee' => $employee ,
            'mail' => $mail ,
            'pass' => $pass ,
        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
}