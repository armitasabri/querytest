<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    public $table = "role";

    public function permission(){
        return $this->belongsTo('App\Models\permission');
    }

    public function users(){
        return $this->hasMany('App\Models\users');
    }
}
