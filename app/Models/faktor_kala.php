<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class faktor_kala extends Model
{
    public $table = "faktor_kala";

    public function faktor()
    {
        return $this->belongsTo('App\Models\faktor');
    }

    public function kala()
    {
        return $this->belongsTo('App\Models\kala');
    }
}
