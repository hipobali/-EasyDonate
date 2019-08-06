<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Foundation extends Model
{
    protected $table = 'foundation';

    //
    public  function  user(){
        return $this->belongsTo('App\User');
    }
    public function foundationPost(){
        return $this->hasMany('App\foundationPost','id');
    }

}
