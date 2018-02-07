<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use App\OrderDetail;
use App\Payment;
use App\Product;

class CheckoutController extends Controller
{
    public function index(){
        return view('frontEnd.checkout.checkoutContent');
    }
    public function customerRegistration(Request $request){
        $customer = new Customer();
        $customer->firstName = $request->firstName;
        $customer->email = $request->email;
        $customer->password = bcrypt($request->password);
        $customer->Message = $request->Message;
        $customer->save();
        $customerId = $customer->id;
        Session::put('customerId', $customerId);
        return redirect('/checkout/shipping');
        
    }
    public function customerLogin(Request $req){
        $email = $req->input('email');
        $password = $req->input('password');
        $user =Customer::where('email', '=', $email )
                            ->where('password', '=', $password)
                            ->first();
        if(!$user){
            return 'you are logged in';
        }
        session()->put('logged_user', $user);

        return view('frontEnd.Menus.MenusContent');
    }
    
    
    public function showShippingForm(){
        $customerId = Session::get('customerId');
        $customerById = Customer::where('id',$customerId)->first();
        return view('frontEnd.checkout.shippingContent',['customerById'=>$customerById]);
    }
    public function saveOrderInfo(Request $request){
        $paymentType = $request->paymentType;
        if($paymentType == 'cashOnDelivery'){
            
            $payment = new Payment();
            $payment->paymentType = $paymentType;
            $payment->save();
            
            $orderDetail = new OrderDetail();
            $orderDetail->productName = $request->get('productName', );
            $orderDetail->productPrice = $request->get('productPrice',$product);
            $orderDetail->productQuantity = $request->get('productQuantity',$product);
            $orderDetail->save();
            return redirect('/checkout/shipping');

        }
        else if($paymentType == 'bkash'){
            return 'Under construction bkash payment type. please use cash on delivary';
        }
        else if($paymentType == 'paypal'){
            return 'Under construction paypal payment type. please use cash on delivary';
        }
    }
}
