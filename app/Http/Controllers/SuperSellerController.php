<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperSellerController extends Controller
{
    public function indexx()
    {
    	// $this->AdminAuthCheck();
    	return view('seller.seller_dashboard');
    }

    public function logout()
    {
    	Session::flush();
    	return Redirect::to('/seller');
    }

    public function AdminAuthCheck()
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
