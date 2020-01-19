<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class permission extends Model
{
    public $table = "permission";

    public function role(){
        return $this->hasMany('App\Models\role');
    }
}
