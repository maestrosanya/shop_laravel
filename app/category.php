<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    public function brands(){
        return $this->belongsTo('App\brand');
    }

    public function products(){
        return $this->hasMany('App\category');
    }
}
