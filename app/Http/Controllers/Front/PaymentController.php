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
        if(isset($proposal->price)){
            \Stripe\Stripe::setApiKey (env('STRIPE_SECRET_KEY'));
            $payment_intent = \Stripe\PaymentIntent::create([
                'amount' => ($proposal->price) *100,
                'currency' => 'EUR'
            ]);
        }
        $intent = $payment_intent->client_secret;
        return view('front.payment.index', compact('proposal', 'title', 'intent'));
    }
}
