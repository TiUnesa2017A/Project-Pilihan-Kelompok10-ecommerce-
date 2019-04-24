<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class ProdukController extends Controller
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
        return view('produk');
    }

    public function showProduct($id)
    {   
        $cartItems = Cart::content();
        $product = Product::find($id);
        return view('showproduct', compact('product','cartItems')); 
    }

}
