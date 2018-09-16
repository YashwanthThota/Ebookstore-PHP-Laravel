<?php

namespace App\Http\Controllers;

use Mail;
use Cart;
use Session;
//import the stripe package
/*
Stripe working:

-> the user will enter the credit card details and submit
-> stripe will authenticate the details and send a token back if the details are correct
-> we will use this token in this case it is "stripeToken" and charge the customer
*/
use Stripe\Charge;
use Stripe\Stripe;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        if(Cart::content()->count() == 0)
        {
            Session::flash('info', 'Your cart is still empty. do some shopping');
            return redirect()->back();
        }
        return view('checkout');
    }

    public function pay()
    {
        Stripe::setApiKey("sk_test_MIaaLCpft35ZZXgHBAiDgVHM");

        $charge = Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'Ebookstore practice selling books',
            'source' => request()->stripeToken
        ]);

        Session::flash('success', 'Purchase successful. wait for our email.');

        Cart::destroy();
       //check .env for mail config, it uses mailtrap.io
        Mail::to(request()->stripeEmail)->send(new \App\Mail\PurchaseSuccessful);

        return redirect('/');
    }
}
