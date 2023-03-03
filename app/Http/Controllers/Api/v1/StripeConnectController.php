<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\PaymentIntent;
use Stripe\Stripe;
use Stripe\StripeClient;

class StripeConnectController extends Controller
{
    public function success($id){
        $user = User::find($id);
        $user->connect_status = 1;
        $user->update();
        return view('application.connect_suucess');
    }
    public  function stripeConnect(){
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $data = $stripe->accounts->create(
            [
                'type' => 'express',
                'capabilities' => [
                    'card_payments' => ['requested' => true],
                    'transfers' => ['requested' => true],
                ],
                'business_type' => 'individual',
                'business_profile' => ['url' => 'https://misterjobby.ikaedigital.com/'],
            ]
        );
        Auth::user()->update(['connect_id' => $data->id]);
        $data2 = $stripe->accountLinks->create(
            [
                'account' => $data->id,
                'refresh_url' => 'https://misterjobby.ikaedigital.com/',
                'return_url' => route('success.connect', ['id' => Auth::user()->id]),
                'type' => 'account_onboarding',
            ]
        );
        return ['url' => $data2->url];
    }
    public function expressDashboard(){
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $data =  \Stripe\Account::createLoginLink(Auth::user()->connect_id);
        return ['url' => $data->url];
    }
    public function isConnected()
    {
        if (Auth::user()->connect_status == 1) {
            $stripe = new StripeClient(env('STRIPE_SECRET'));
            $data = $stripe->accounts->retrieve(
                Auth::user()->connect_id,
                []
            );
            if ($data->payouts_enabled == false || $data->charges_enabled == false) {
                return ['message' => 'Connect But Issue'];
            } else {
                return ['message' => 'All Okay'];
            }
        } else {
            return ['message' => 'Not Connect'];
        }
    }
    public function getConnectedAccountIntent($reciever_id, $price)
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
        $reciever = User::find($reciever_id);
        $sender = Auth::user();
        $companycharges = $price * 0.20;
        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => round($price * 100, 2),
                'currency' => 'eur',
                'automatic_payment_methods' => [
                    'enabled' => 'true',
                ],
                'description' => 'Mister Jobby',
                'application_fee_amount' => round($companycharges * 100, 2),
                'transfer_data' => [
                    'destination' => $reciever->connect_id,
                ],
                'metadata' => [
                    'Payment Type' => 'Coins',
                    'Customer Name' => $sender->first_name . ' ' . $sender->last_name,
                    'Customer Email' => $sender->email,
                    'Customer Phone' => $sender->phone,
                ],
            ]);

            $output = [
                'clientSecret' => $paymentIntent->client_secret,
            ];

            echo json_encode($output);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }
}
