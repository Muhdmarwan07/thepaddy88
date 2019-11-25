<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;

class SuperSellerController extends Controller
{
    public function indexx()
    {
    	$this->SellerAuthCheck();
    	return view('seller.seller_dashboard');
    }

    public function seller_logout()
    {
    	Session::flush();
         return Redirect::to('/seller');

    }

    public function SellerAuthCheck()

    {
    	$seller_id=Session::get('seller_id');
    	if ($seller_id)
        {
    		return;
    	}
    	else
    	{
    		return Redirect::to('/seller')->send();
    	}
    }
}
