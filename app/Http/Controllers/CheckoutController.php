<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CheckoutController extends Controller
{
    public function login_check()
    {
    	return view('pages.login');
    }

    public function customer_registration(Request $request)
    {
    	$data=array();
    	$data['customer_name']=$request->customer_name;
    	$data['customer_email']=$request->customer_email;
    	$data['password']=md5($request->password);
    	$data['mobile_number']=$request->mobile_number;


    	$customer_id=DB::table('tbl_customer')
    			->insertGetId($data);


    		Session::put('customer_id',$customer_id);
    		Session::put('customer_name',$request->customer_name);
    		return Redirect('/checkout');
    }

    public function checkout()
    {
    	// $all_published_category=DB::table('tbl_category')
     //                    ->where('publication_status',1)
     //                    ->get();

     //    $manage_published_category=view('pages.payment')
     //        ->with('all_published_catgeory',$all_published_category);
     //    return view('layout')
     //        ->with('pages.payment',$manage_published_category);

    	return view('pages.checkout');
    }

    public function save_shipping_details(Request $request)
    {
    	$data=array();
    	$data['shipping_email']=$request->shipping_email;
    	$data['shipping_first_name']=$request->shipping_first_name;
    	$data['shipping_last_name']=$request->shipping_last_name;
    	$data['shipping_address']=$request->shipping_address;
    	$data['shipping_mobile_number']=$request->shipping_mobile_number;
    	$data['shipping_city']=$request->shipping_city;

    	$shipping_id=DB::table('tbl_shipping')
    		->insertGetId($data);
    	  Session::put('shipping_id',$shipping_id);
    	  return Redirect::to('/payment');

    }

    public function customer_login(Request $request)
    {
    	$customer_email=$request->customer_email;
    	$password=md5($request->password);
    	$result=DB::table('tbl_customer')
    			->where('customer_email',$customer_email)
    			->where('password',$password)
    			->first();

    		if ($result) 
    		{
    			Session::put('customer_id',$result->customer_id);
    			return Redirect::to('/');
    		}
    		else
    		{
    			return Redirect::to('/login-check ');
    		}
    }

    public function payment()
    {
    	$all_published_category=DB::table('tbl_category')
                        ->where('publication_status',1)
                        ->get();

        $manage_published_category=view('pages.payment')
            ->with('all_published_catgeory',$all_published_category);
        return view('layout')
            ->with('pages.payment',$manage_published_category);
    }

    public function manage_order()
    {
        $all_order_info=DB::table('tbl_order')
                        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
                        ->select('tbl_order.*','tbl_customer.customer_name','tbl_order_details.*')
                        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_details_id')
                        ->get();

        $manage_order=view('admin.manage_order')
            ->with('all_order_info',$all_order_info);
        return view('admin_layout')
            ->with('admin.manage_order',$manage_order);
    }

     public function seller_manage_order()
    {
        $all_order_info=DB::table('tbl_order')
                        ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
                        ->select('tbl_order.*','tbl_customer.customer_name','tbl_order_details.*')
                        ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_details_id')
                        ->get();

        $manage_order=view('admin.manage_order')
            ->with('all_order_info',$all_order_info);
        return view('seller_layout')
            ->with('seller.seller_manage_order',$manage_order);
    }


    public function customer_logout()
    {
    	Session::flush();
    	return Redirect::to('/');
    }
}
