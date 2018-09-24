<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //get the level of the user
    public function user(){
        return $this->belongsTo('App\User', 'id');
    }
}
