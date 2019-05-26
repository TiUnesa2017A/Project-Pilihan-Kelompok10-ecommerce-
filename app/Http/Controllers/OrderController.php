<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function allOrders()
    {
    	$allOrders = Order::all();
    	return view('admin.order.allOrder', compact('allOrders'));
    }

    public function statusOrder(Request $request, $id)
    {
    	$status = Order::find($id);
    	$status->status = $request->status;
    	$status->save();

    	return back();
    }

    public function pendingOrder(Request $request, $id)
    {
    	$pendingOrder = Order::where('status','0')->get();
    	return view('admin.order.pendingOrder', compact('pendingOrder'));
    }

    public function deliver(Request $request, $id)
    {
    	$deliver = Order::where('status','1')->get();
    	return view('admin.order.deliverOrder', compact('deliver'));
    }
}
