<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    // public $timestamps = false;
    public function show_category()
    {
        return $this->hasMany('App\Models\Category');
    }
}
