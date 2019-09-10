<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{
    public function index()
    {
    	return view('admin.add_product');
    }

    public function save_product(Request $request)
    {
    	$data=array();
    	$data['product_id']=$request->product_id;
    	$data['product_name']=$request->product_name;
    	$data['product_description']=$request->product_description;
    	$data['publication_status']=$request->publication_status;

    	DB::table('tbl_product')->insert($data);
    	Session::put('message','Product added Sucessfully ');
    	return Redirect::to('/add-product');
    }
}
