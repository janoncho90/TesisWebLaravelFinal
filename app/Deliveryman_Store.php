<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliveryman_Store extends Model
{
    protected $table='deliverymans_stores';

    protected $fillable=['available','user_id','store_id'];

     public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function store()
    {
       return $this->belongsTo('App\Store');
    }
}
