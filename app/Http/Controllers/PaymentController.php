<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Mail\SendPayment;
use Cart;
use App\Order;
use Auth;

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

    public function bankOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'phone' => 'required|numeric',
            'zip' => 'required|numeric',
        ]);

        $order = New Order;
        $order->user_id = Auth::user();

        foreach (Cart::content() as $cart) {
            $order=Auth::user()->orders()->create([
                'qty' =>$cart->qty,
                'tax' =>$cart->tax*$cart->qty,
                'subtotal' =>$cart->subtotal,
                'total' =>$cart->tax*$cart->qty+$cart->subtotal,
                'title'=> $cart->name,
                'image' =>$cart->options->has('image')?$cart->options->image:'',
                'name' =>$request->name,
                'address'=> $request->address,
                'city' =>$request->city,
                'phone' =>$request->phone,
                'zip'=> $request->zip,
                'status' => 0,
            ]);
        }
        $order->save();
        Cart::destroy();
        return redirect()->route('thanks');
    }

    public function thanks()
    {
        $cartItems = Cart::content();
        return view('payment.thanks', compact('cartItems'));
    }


}
