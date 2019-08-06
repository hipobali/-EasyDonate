<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $table = 'people';

    //
    public  function  user(){
        return $this->belongsTo('App\User');
    }
    public function userPost(){
        return $this->hasMany('App\userPost','id');

    }
}
