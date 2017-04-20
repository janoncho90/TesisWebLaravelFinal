<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite_Product extends Model
{
    protected $table='favorites_products';

    protected $fillable=['user_id','product_id'];

     public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function product()
    {
       return $this->belongsTo('App\Product');
    }
}
