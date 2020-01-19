<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faktor extends Model
{
    public $table = "faktor";

    public function users(){
        return $this->belongsTo('App\Models\users');
    }

    public function faktor_kala(){
        return $this->hasMany('App\Models\faktor_kala');
    }

    public function address(){
        return $this->belongsTo('App\Models\address');
    }

    public function takhfif(){
        return $this->belongsTo('App\Models\takhfif');
    }

    public function transaction(){
        return $this->hasMany('App\Models\transaction');
    }

    public function shipping(){
        return $this->hasOne('App\Models\shipping');
    }


}
