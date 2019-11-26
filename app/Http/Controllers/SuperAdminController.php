<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class SuperAdminController extends Controller
{
    
    public function index()
    {
    	$this->AdminAuthCheck();
    	return view('admin.dashboard');
    }

    public function logout()
    {
    	Session::flush();
    	return Redirect::to('/admin');
    }

    public function seller_registration(Request $request)
    {
        $data=array();
        $data['seller_name']=$request->seller_name;
        $data['seller_email']=$request->seller_email;
        $data['seller_password']=md5($request->seller_password);
        $data['seller_mobile_number']=$request->seller_mobile_number;
        

        $customer_id=DB::table('tbl_seller')
                ->insertGetId($data);


            Session::put('seller_id',$seller_id);
            Session::put('seller_name',$request->seller_name);
            return Redirect('/seller-dashboard');
    }

    public function AdminAuthCheck()
    {
    	$admin_id=Session::get('admin_id');
    	if ($admin_id)
        {
    		return;
    	}
    	else
    	{
    		return Redirect::to('/admin')->send();
    	}
    }
}
