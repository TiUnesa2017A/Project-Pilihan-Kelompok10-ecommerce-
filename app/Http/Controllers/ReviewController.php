<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;

class ReviewController extends Controller
{
    public function newComment(Request $request, Product $product)
    {
    	$comment = new Review;
    	$comment->comment = $request->comment;
    	$comment->rating = $request->rating;
    	$comment->user_id = auth()->user()->id;

    	$product->comments()->save($comment);
        
    	return back()->withInfo('Review Anda telah berhasil ditambahkan');
    }
}
