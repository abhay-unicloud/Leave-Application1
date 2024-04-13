<?php
namespace App\CPU;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class Helpers {

    public static function sendEmail($employee ,$mail, $pass)
    {
        $url="http://127.0.0.1:8000/employee-login";
        
        $content = [
            'subject' => 'VBPC Employee Id Password',
            'employee' => $employee ,
            'mail' => $mail ,
            'pass' => $pass ,
            'url' => $url ,

        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
    public static function leave_mail($employee ,$mail, $approval,$comment)
    {   if($approval==1)
        {
            $approval='Approved';
        }elseif($approval==2){
            $approval='Decline';
        }else{
            $approval='Pending';

        }
        $content = [
            'subject' => 'Leave Notification Mail',
            'employee' => $employee ,
            'mail' => $mail ,
            'approval' => $approval ,
            'comment' => $comment ,
        ];
        
        Mail::to($mail)->send(new SampleMail($content));
        
        return "Email has been sent.";
    }
}