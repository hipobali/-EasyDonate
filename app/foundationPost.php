<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class foundationPost extends Model
{

    public  function  foundation(){
        return $this->belongsTo('App\Foundation');
    }
    public function categories(){
        return $this->belongsTo('App\Category');
    }
    public function userPost(){
        return $this->belongsTo('App\userPost');
    }
}
