<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Display extends Model
{
    //
    protected $table = "displays";
    public function roles()
    {
        return $this->belongsToMany('App\Product');
    }
}
