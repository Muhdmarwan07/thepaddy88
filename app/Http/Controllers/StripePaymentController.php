<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Session;
use Cart;

class StripePaymentController extends Controller
{
	public function stripe(Request $request){

	Stripe::setApiKey ('sk_test_9EjIb0s1ijfAQMsI8bEZctfY00fQ89Csk2');
	try {
			Charge::create (array(

				"amount" => $request->input('amount')*100,
				"currency" => "usd",
				"source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
				"description" => "Test payment."
			));
			Session::flash( 'success-message', 'Payment done successfully !' );
			
			return Redirect::to('/order-complete');
		}
	 catch ( \Exception $e )
		{
		Session::flash ( 'fail-message', "Error! Please Try again." );
		return Redirect::back ();
	 	}
	 }
}
