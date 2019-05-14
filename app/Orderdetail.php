<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    //
    protected $table = "order_dertails";
    public function order()
    {
        return $this->belongsTo('App\Order', 'order', 'id');
    }
    public function product()
    {
        return $this->hasOne('App\Product', 'product', 'id');
    }
}
