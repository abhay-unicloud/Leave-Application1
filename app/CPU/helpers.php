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