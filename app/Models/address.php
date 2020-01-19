<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    public $table = "address";

    public function users(){
        return $this->belongsTo('App\Models\users');
    }

    public function faktor(){
        return $this->hasMany('App\Models\faktor');
    }

}
