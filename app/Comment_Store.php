<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment_Store extends Model
{
    protected $table='comments_stores';

    protected $fillable=['date','commentary','user_id','store_id'];

    public function user()
    {
       return $this->belongsTo('App\User');
    }

    public function store()
    {
       return $this->belongsTo('App\Store');
    }

}
