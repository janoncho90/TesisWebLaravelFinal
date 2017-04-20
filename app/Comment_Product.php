<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_Product extends Model
{
    protected $table='comments_products';

    protected $fillable=['date','commentary','user_id','product_id'];

    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function product()
    {
       return $this->belongsTo('App\Product');
    }
}
