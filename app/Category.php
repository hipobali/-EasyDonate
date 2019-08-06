<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
 public function foundation(){
     return $this->hasMany('App\Foundation','id');
 }

}
