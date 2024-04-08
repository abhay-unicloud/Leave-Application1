<?php
namespace App\CPU;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class Helpers {

    public static function sendEmail($employee ,$mail, $pass)
    {
        
        $content = [
            'subject' => 'VBPC Employee Id Password',
            'employee' => $employee ,
            'mail' => $mail ,
            'pass' => $pass ,
        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
    public static function reset_password($employee ,$mail, $pass)
    {
        
        $content = [
            'subject' => 'Reset Your Employee id Password',
            'employee' => $employee ,
            'mail' => $mail ,
            'pass' => $pass ,
        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
}