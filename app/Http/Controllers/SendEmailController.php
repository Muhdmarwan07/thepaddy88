<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendEmailController extends Controller
{

	function index()
	{
    	return view('pages.contact');
	}

	function send(Request $request)
	{
	 $this->validate($request,[
	 	'name'	=>	'required',
	 	'email' =>	'required',
	 	'message' => 'required'
	 ]);
	}
}
