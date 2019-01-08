<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'title', 'description', 'posted_by','img_route','created_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];


    public function user(){
        return $this->belongsTo('App\User','id');
    }

    public static function listall(){
        $notices = Notice::select('select * from notices where img_route=cochabamba',[1]);
        return $notices;
    }
}