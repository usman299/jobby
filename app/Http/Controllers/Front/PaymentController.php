<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Proposal;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($id){

        $title = "Page de paiement";
        $proposal = Proposal::find($id);
        $price = $proposal->price;
        $percentage = $proposal->price * (10/100);
        $total = $price + $percentage;

        if(isset($total)){

             \Stripe\Stripe::setApiKey (env('STRIPE_SECRET'));

            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($total) *100,
                'currency' => 'EUR'
            ]);

        }
        $intent = $payment_intent->client_secret;
        return view('front.payment.index', compact('proposal','total', 'title', 'price',  'intent', 'percentage'));
    }
}
