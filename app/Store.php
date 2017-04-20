<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
   protected $table='stores';

    protected $fillable=['name','calification_average','street','number','open_hour','close_hour','lunch_hour','lunch_after_hour','start_day','end_day','favorites_quantity','user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function comments_users()
   {
    return $this->hasMany('App\Comment_Store');
   }

   public function favorites_users()
   {
    return $this->hasMany('App\Favorite_Store');
   }

   public function califications_users()
   {
    return $this->hasMany('App\Calification_Store');
   }

    public function works_users()
   {
    return $this->hasMany('App\Deliveryman_Store');
   }

   public function notices()
   {
    return $this->hasMany('App\Notice');
   }
}
