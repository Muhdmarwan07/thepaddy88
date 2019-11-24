<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{

	function index()
	{
    	return view('contact.contact');
	}

	function send(Request $request)
	{
	 $this->validate($request,[
	 	'name'=>'required',
	 	'email'=>'required|email',
	 	'message'=>'required'
	 ]);
	}
}
