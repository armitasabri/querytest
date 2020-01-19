<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class takhfif extends Model
{

    public $table = "takhfif";

    public function users(){
        return $this->belongsTo('App\Models\users');
    }

    public function faktor(){
        return $this->hasMany('App\Models\faktor');
    }
}
