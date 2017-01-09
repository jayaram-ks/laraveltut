<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function Customer()
	{
         return $this->belongsTo('App\Customer','cust_id');
    }
}
