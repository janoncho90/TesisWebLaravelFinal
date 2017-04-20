<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';

    protected $fillable=['name','description','price','calification_average','favorites_quantity','store_id'];

    public function store()
    {
    	return $this->belongsTo('App\Store');
    }

     public function califications_users()
    {
        return $this->hasMany('App\Calification_Product');
    }

    public function comments_users()
   {
    return $this->hasMany('App\Comment_Product');
   }

    public function favorites_users()
    {
        return $this->hasMany('App\Favorite_Product');
    }

    public function orders()
    {
    	return $this->hasMany('App\Order_Product');
    }

}
