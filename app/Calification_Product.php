<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calification_Product extends Model
{
    protected $table='califications_products';

    protected $fillable=['value','user_id','product_id'];

     public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function product()
    {
       return $this->belongsTo('App\Product');
    }
}
