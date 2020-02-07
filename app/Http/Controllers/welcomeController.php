<?php

namespace App\Http\Controllers;

use App\foundationPost;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function getWelcome()
    {
        $foundationPost=foundationPost::orderBy('id','desc')->paginate(3);
        return view('welcome',compact('foundationPost'));
    }

}
