<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\Ordermail as MailOrdermail;
use App\Models\Ordermail;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;
use Unicodeveloper\Paystack\Facades\Paystack;

class PaymentController extends Controller
{
    public function redirectToGateway(Request $request, $p)
    {

        // dd($request->all());
        // dd(Paystack::getAuthorizationUrl());

        $product = Product::find($p);

        $data = [

            'email'=>$request->email,
            'amount'=>($request->amount*$request->quantity) * 100,
            'callback_url'=>$request->callbackurl,
            'reference'=>$request->reference,
            'currency'=>$request->currency,
        ];

        if ($request->mail == 'mail') {

            $ordermail= new Ordermail();
            $ordermail->product_id= $p;
            $ordermail->amount = $data['amount']/100;
            $ordermail->location =$request->location;
            $ordermail->quantity = $request->quantity;
            $ordermail->phone = $request->phone;
            $ordermail->email = $request->email;
            $ordermail->status = 'Initiated';
            $ordermail->save();

            $order =[
                'product_name'=> $product->name,
                'phone'=>$request->phone,
                'email'=>$request->email,
                'location'=>$request->location,
                'quantity'=>$request->quantity,
                'amount'=>$ordermail->amount,
                'reference'=>$request->reference,
                'status'=>'Initiated',
            ];

            Mail::to($request->email)->send(new MailOrdermail($order));
            Alert::success('Success', 'Your order has been recieved you will be contacted in the next 20 min.');
            return back();
        }

        $trnx= new Transaction();
        $trnx->reference= $request->reference;
        $trnx->product_id= $p;
        $trnx->amount= $data['amount']/100;
        $trnx->email= $request->email;
        $trnx->location= $request->location;
        $trnx->quantity= $request->quantity;
        $trnx->status= 'Initiated';
        $trnx->phone= $request->phone;
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

        $product = Product::find($trnx->product_id);

        if ($paymentDetails['data']['status'] = 'success' ) {


            try {

                $trnx->status= 'Completed';
                $trnx->save();

                $paid = new Purchase();
                $paid->email = $trnx->email;
                $paid->quantity = $trnx->quantity;
                $paid->product_id = $trnx->product_id;
                $paid->transaction_id = $trnx->id;
                $paid->price = $trnx->amount;
                $paid->reference = $trnx->reference;
                $paid->delivered = 'No'; // conditions are no, yes and returned
                $paid->save();

            } catch (\Exception $e) {
                return Redirect::back()->withMessage(['msg'=>'The paystack token has expired. Please refresh the page and try again.', 'type'=>'error']);

            }

        }else{
            return back()->with([
                'error'=>'failed transaction please try again.'
            ], 500);
        }

        $order =[
            'product_name'=> $product->name,
            'phone'=>$trnx->phone,
            'email'=>$trnx->email,
            'location'=>$trnx->location,
            'quantity'=>$trnx->quantity,
            'amount'=>$trnx->amount,
            'reference'=>$trnx->reference,
            'status'=>'Completed',
        ];

        Mail::to($trnx->email)->send(new MailOrdermail($order));
        Alert::success('Success', 'YOur payment has been made you will recieve a call in the next 20 min.');
        return back();
        // dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
}
