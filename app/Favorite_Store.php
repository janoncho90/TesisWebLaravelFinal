<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite_Store extends Model
{
    protected $table='favorites_stores';

    protected $fillable=['user_id','store_id'];

     public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function store()
    {
       return $this->belongsTo('App\Store');
    }
}
