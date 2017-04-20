<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table='orders';

    protected $fillable=['date','reception_hour','delivery_hour','commentary','total','ordened_id','deliveryman_id','store_id','state_id'];

    public function ordered_user()
    {
    	return $this->belongsTo('App\User','id','ordered_id');
    }

     public function deliveryman_user()
    {
    	return $this->belongsTo('App\User','id','deliveryman_id');
    }

     public function store()
    {
    	return $this->belongsTo('App\Store');
    }

    public function state()
    {
    	return $this->belongsTo('App\State');
    }

    public function products()
    {
    	return $this->hasMany('App\Order_Product');
    }
}
