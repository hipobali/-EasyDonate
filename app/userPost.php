<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userPost extends Model
{
    public function people(){
        return $this->belongsTo('App\People');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function foundationPost(){
        return $this->hasMany('App\foundationPost','id');
    }
}
