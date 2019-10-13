<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;

class PaymentController extends Controller
{
    public function order_complete()
    {

    	$odata=array();
    	$odata['customer_id']=Session::get('customer_id');
    	$odata['shipping_id']=Session::get('shipping_id');
    	// $odata['payment_id']=$payment_id;
    	$order_id=DB::table('tbl_order')
    				->insertGetId($odata);

    	$contents=Cart::content();
    	$odata=array();

    	foreach ($contents as $row) 
    	{
    		$odata['order_id']=$order_id;
    		$odata['product_id']=$row->id;
    		$odata['product_name']=$row->name;
    		$odata['product_price']=$row->price;
    		$odata['product_sales_quantity']=$row->qty;

    		DB::table('tbl_order_details')
    			->insert($odata);
    	}

    	return view('pages.order_complete');

    }
}
