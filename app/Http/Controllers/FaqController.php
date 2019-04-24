<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;

class FaqController extends Controller
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
    public function index()
    {
        $cartItems = Cart::content();
        return view('faq', compact('cartItems'));
    }
}
