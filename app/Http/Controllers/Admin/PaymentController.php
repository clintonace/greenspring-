<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    public function redirectToGateway(Request $request, $p)
    {

        // dd($request->all());
        // dd(Paystack::getAuthorizationUrl());

        $data = [

            'email'=>$request->email,
            'amount'=>$request->amount*100,
            'callback_url'=>$request->callbackurl,
            'reference'=>$request->reference,
            'currency'=>$request->currency,
        ];

        $trnx= new Transaction();
        $trnx->reference= $request->reference;
        $trnx->product_id= $p;
        $trnx->amount= $request->amount;
        $trnx->email= $request->email;
        $trnx->status= 'initiated';
        $trnx->save();


        try{
            return Paystack::getAuthorizationUrl($data)->redirectNow();
        }catch(\Exception $e) {
            return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);
        }
    }


    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $reference = $paymentDetails['data']['reference'];

        $trnx = Transaction::whereReference($reference)->first();

        if ($paymentDetails['data']['status'] = 'success' ) {


            try {

                $trnx->status= 'Completed';
                $trnx->save();

                $paid = new Purchase();
                $paid->email = $trnx->email;
                $paid->product_id = $trnx->product_id;
                $paid->transaction_id = $trnx->id;
                $paid->price = $trnx->amount;
                $paid->reference = $trnx->reference;
                $paid->delivered = 'No';
                $paid->save();

            } catch (\Exception $e) {
                return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);

            }

        }else{
            return back()->with([
                'error'=>'failed transaction please try again.'
            ], 500);
        }


        Alert::success('Success', 'YOur payment has been made you will recieve a call in the next 20 min.');
        return back();
        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
