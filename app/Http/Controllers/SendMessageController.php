<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Mail;
use Illuminate\Support\Facades\Input;
use Illuminate\Session\SessionManager;

class SendMessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    
  
   
    public function EventoMessage($Template, $ToEmail, $FromEmail, $Subject, $Message, $sms)
    {
        
       $ok =  Mail::send($Template,[ 'Message' => $Message, 'Phone' => $sms], function ($message){
                $message->from($FromEmail, 'Admin');
                $message->to($ToEmail)->subject($Subject);
            });
       if($ok)
            return ['s' => true];
       
       return ['s' => false];
    }

   
}
