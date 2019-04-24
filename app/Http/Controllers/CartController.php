<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class CartController extends Controller
{
    public function addToCart($id)
    {
    	$product = Product::find($id);
    	Cart::add($id, $product->name,1,$product->price,['image' => $product->image]);

    	return back()->withInfo('Added to Cart.');
    }

    public function cartIndex(){
        $products = Product::paginate(1);
    	$cartItems = Cart::content();
    	return view ('cart.index', compact('cartItems'));
    }

    public function updateCart(Request $request, $id){
        Cart::update($id,['qty' => $request->qty, "options" => ['image' => $request->image]]);

        return redirect()->back()->withInfo('massage', 'Updated.');
    }

    public function deleteCart($id){
        Cart::remove($id);

        return redirect()->back()->withInfo('massage', 'Deleted.');
    }
}
