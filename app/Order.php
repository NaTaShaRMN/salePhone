<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table ="orders";
    public function orderdetail()
    {
        return $this->hasMany('App\Orderdetail', 'order', 'id');
    }
    public function user()
    {
        return $this->belongsTo('App\User', 'user', 'id');
    }
}
