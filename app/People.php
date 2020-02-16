<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class People extends Authenticatable
{

    use Notifiable;

    protected $guard = 'people';

    protected $fillable = [

        'name', 'email', 'password','user_profile','address','phone','user_gander'

    ];

    protected $hidden = [

        'password', 'remember_token',

    ];

    //
    public  function  user(){
        
        return $this->belongsTo('App\User');
    }

    public function userPost(){

        return $this->hasMany('App\userPost','id');

    }
}
