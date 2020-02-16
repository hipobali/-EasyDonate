<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Foundation extends Authenticatable
{

    use Notifiable;

    protected $guard = 'foundation';

    //
    public  function  user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [

        'foundation_profile','foundation_name','year_picker','month_picker','day_picker','address','phone','president_name','foundation_certificate','member_count','founder', 'email', 'password',

    ];

    protected $hidden = [

        'password', 'remember_token',

    ];

    public function foundationPost(){

        return $this->hasMany('App\foundationPost','id');

    }

}
