<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    public $table = "transaction";

    public function faktor(){
        return $this->belongsTo('App\Models\faktor');
    }
}
