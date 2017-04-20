<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }

    public function stores()
    {
        return $this->hasMany('App\Store');
    }

    public function addresses()
    {
        return $this->hasMany('App\Address');
    }

     public function phones()
    {
        return $this->hasMany('App\Phone');
    }

    public function califications_stores()
    {
        return $this->hasMany('App\Calification_Store');
    }

    public function califications_products()
    {
        return $this->hasMany('App\Calification_Product');
    }

    public function comments_stores()
    {
        return $this->hasMany('App\Comment_Store');
    }

    public function comments_products()
    {
        return $this->hasMany('App\Comment_Product');
    }

    public function candidates_notices()
    {
        return $this->hasMany('App\Candidate');
    }

    public function deliverymans_stores()
    {
        return $this->hasMany('App\Deliveryman_Store');
    }

    public function favorites_stores()
    {
        return $this->hasMany('App\Favorite_Store');
    }

     public function favorites_products()
    {
        return $this->hasMany('App\Favorite_Product');
    }


    //relaciones de pedidos

    //repartidor

    public function deliverymans_orders()
    {
        return $this->hasMany('App\Order');
    }

    //pedidor

     public function ordened_orders()
    {
        return $this->hasMany('App\Order');
    }

}
