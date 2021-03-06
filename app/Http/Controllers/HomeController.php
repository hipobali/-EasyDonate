<?php

namespace App\Http\Controllers;

use App\Category;
use App\Foundation;
use App\foundationPost;
use App\Report;
use App\userPost;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   $user_post=userPost::all();
        $foundation_post=foundationPost::orderBy('id','desc')->paginate(6);
        $foundation=Foundation::all();
        $category=Category::all();
            return view('home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['foundation'=>$foundation])->with(['user_post'=>$user_post]);
        }
          public function getSearchCategory(Request $request){
        $q=$request['q'];
              $user_post=userPost::all();
        $foundation=Foundation::all();
        $category=Category::all();
        if($q=='All'){
            $foundation_post=foundationPost::all()->first()->orderBy('id','desc')->paginate(6);
            return view('home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation]);
        }
        $foundation_post=foundationPost::orderBy('id','desc')->where('f_post_category',"LIKE","%$q%")->paginate(6);
          return view('home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation])->with(['user_post'=>$user_post]);
      }
    public function getSearchFoundation(Request $request){
        $q=$request['q'];
        $user_post=userPost::all();
        $foundation=Foundation::all();
        $category=Category::all();
        if($q=='0'){
            $foundation_post=foundationPost::all()->first()->orderBy('id','desc')->paginate(6);
            return view('home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation])->with(['user_post'=>$user_post]);
        }
        $foundation_post=foundationPost::orderBy('id','desc')->where('foundation_id',"LIKE","%$q%")->paginate(6);
        return view('home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation])->with(['user_post'=>$user_post]);
    }
}
