<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mail;
use Session;	
use App\Mail\SendEmail;

class MailController extends Controller
{
   public function contact()
   {
   	 return view ("mail.contactus");
   }

   public function sendmail(Request $get)
   {
   		$this->validate($get,[

   			"name" => "required",
   			"email" => "required",
   			"message" => "required",

   		]);
   	 	$name = $get->name;
   	 	$email = $get->email;
   	 	$message = $get->message;

   	 	mail::to($email)->send(new SendEmail($name,$message));
   	 	Session::flash("success");
   	 	return back();
   }
}
