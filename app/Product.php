<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function comments()
	{
		return $this->morphMany('App\Review','commentable');
	}
}
