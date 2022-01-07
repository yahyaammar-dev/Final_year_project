<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;

class CheckoutController extends Controller
{
    public function checkout(REQUEST $req)
    {   


        $cost = $_GET["cost"];
        $products = $_GET["products"];


        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51KEovFGr5GeXgirvvb8ao8Zxd7Dfl77GGNFVN1wA5QuefmKL6BiyewQ2GWTLy237k5NrSVzA6xrXCFxkb9PX873e00IWXvTth0');
        		
		$amount = $cost;
		$amount *= 100;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment From Codehunger',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('credit-card',compact('intent','products'));

    }

    public function afterPayment(REQUEST $req)
    {
        echo 'Payment Has been Received';

        $user = session("user");
        $products = $_POST["products"];



        $add = new orders;
        $add->user_id = $user->id;
        $add->product_ids = $products;
        $add->save(); 

    }
}
