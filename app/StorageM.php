<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StorageM extends Model
{
    //
    protected $table = "storages";
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    
}
