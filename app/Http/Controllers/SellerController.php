<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class SellerController extends Controller
{
    public function indexx()
   {
   	 return view('seller_login');
   }

   public function sellerdashboard(request $request)
   {
   	 $seller_email=$request->seller_email;
   	 $seller_password=md5($request->seller_password);
   	 $result=DB::table('tbl_seller')
   	 			->where('seller_email',$seller_email)
   	 			->where('seller_password',$seller_password)
   	 			->first();
   	 		
   	 		if ($result) 
   	 		{
   	 			Session::put('seller_name',$result->seller_name);
   	 			Session::put('seller_id',$result->seller_id);
   	 			return Redirect::to('/sellerdashboard');
   	 		}	
   	 		else
   	 		{
   	 			Session::put('message','Email or Password Invalid');
   	 			return Redirect::to('/seller');
   	 		}
   }
}
