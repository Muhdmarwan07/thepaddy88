<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;	
use App\Mail\SendEmail;

class MailController extends Controller
{
   public function contact()
   {
   	 return view ("mail.contactus");
   }

   public function sendmail(Request $request)
   {
   	 	$name = $request->name;
   	 	$email = $request->email;
   	 	$message = $request->message;

   	 	Mail::to($email)->send(new SendEmail($name,$message));
   	 	Session::flash("success");
   	 	return back();
   }
}
