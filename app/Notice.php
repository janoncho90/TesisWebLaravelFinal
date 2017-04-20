<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table='notices';

    protected $fillable=['date','requirements','vacants'];

   public function store()
   {
   	return $this->belongsTo('App\Store');
   }

    public function candidates_users()
   {
    return $this->hasMany('App\Candidate');
   }
}
