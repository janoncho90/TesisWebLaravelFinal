<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table='addresses';

    protected $fillable=['street','number','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
