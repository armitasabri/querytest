<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class myusers extends Model
{
    public $timestamps=false; //be in ravesh migan overwrite ke ba public moteghayere Model base ro seda zade va onja true inja ma falsesh kardim, ba in kar create_at va update_at hazf mishe
    // public $table='users';
    public function Gender(){
        return $this->belongsTo('App\Models\gender','gender','id'); //gender to jadvale users vasl shode be jadvale gender ba column id
    }

    public function faktor(){
        return $this->hasMany('App\Models\faktor');
    }

    public function basket(){
        return $this->hasMany('App\Models\basket');
    }

    public function address(){
        return $this->hasMany('App\Models\address');
    }

    public function role(){
        return $this->belongsTo('App\Models\role');
    }

    public function takhfif(){
        return $this->hasMany('App\Models\takhfif');
    }
}
