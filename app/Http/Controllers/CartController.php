<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	$product_id=$request->product_id;
    	$product_info=DB::table('tbl_products')
    				->where('product_id',$product_id)
    				->first();

    				echo "<pre>";
    					print_r($product_info);
    				echo "</pre>";

    }
}
