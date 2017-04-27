<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliveryman extends Model
{
    protected $table='deliverymans';

    protected $fillable=['imei','latitude','longitude','available','user_id','store_id'];

     public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function store()
    {
    	return $this->belongsTo('App\Store')
    }
}
