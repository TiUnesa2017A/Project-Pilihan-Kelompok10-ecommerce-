<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Mail\SendPayment;
use Cart;

class PaymentController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function paymentMethod()
    {
        $cartItems = Cart::content();
        return view('payment.payment_method', compact('cartItems'));
    }

    public function creditPayment()
    {
        $cartItems = Cart::content();
        return view('payment.credit_pay', compact('cartItems'));
    }

    public function bankTransfer()
    {
        $cartItems = Cart::content();
        return view('payment.transfer_pay', compact('cartItems'));
    }

    // \Mail::to($user)->send(new SendPayment);

}
