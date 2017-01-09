<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	public $timestamps = false;
    public function Orders()
    {
    	return $this->hasMany('App\Order','cust_id');
    }
}
