<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class shipping extends Model
{

    public $table="shipping";

    public function faktor(){
        return $this->belongsTo('App\Models\faktor');
    }
}
