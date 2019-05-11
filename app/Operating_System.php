<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Operating_System extends Model
{
    //
    protected $table = "operating_systems";
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
