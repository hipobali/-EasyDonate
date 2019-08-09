<?php

namespace App\Http\Controllers;

use App\foundationPost;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function getWelcome(){
        $foundationPost=foundationPost::all()->first()->orderBy('id','desc')->paginate(3);
        return view('welcome')->with(['foundationPost'=>$foundationPost]);
    }

}
