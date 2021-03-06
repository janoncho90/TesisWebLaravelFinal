<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $table='phones';

    protected $fillable=['number','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
