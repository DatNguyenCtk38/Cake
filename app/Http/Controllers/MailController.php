<?php

namespace App\Http\Controllers;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;
use Mail;
use App\Mail\newMail;
use App\Mail\SendMail;
class MailController extends Controller
{
    public function getSend(){
    	 Mail::send(new newMail(1,1,1,1));
    }
    public function getChoi(){
    	Mail::send(new SendMail(1,1,1,1,11,1));
    	//return view('mail');
    }
}
