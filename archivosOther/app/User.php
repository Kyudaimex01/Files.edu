<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
/**
    public function level(){
        return $this->hasOne('App\Level','lvl_id');
    }
*/
    public function notice(){
        return $this->hasMany('App\Notice','id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
