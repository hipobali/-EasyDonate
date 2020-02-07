<?php

namespace App\Http\Controllers;

use App\Category;
use App\Foundation;
use App\Http\Requests\PeopleRegisterRequest;
use App\People;
use App\User;
use App\userPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class peopleController extends Controller
{
    public function getPeopleRegister()
    {
        return view('people_register');
    }

    public function getPeopleLogin(){
        return view('people_login');
    }

    public function getPeoplePostView()
    {
        $category=Category::all();
        return view('user_post')->with(['category'=>$category]);
    }

    public function postpeopleRegister(PeopleRegisterRequest $request)
    {
//        $img_user_profile_name=md5(microtime()).'.'.$request->file('user_profile')->getClientOriginalExtension();
//        $img_user_profile_file=$request->file('user_profile');

        $input = $request->all();
        $name = uniqid('user_profile-') . '.' . $input['user_profile']->extension();
        $input['user_profile'] = isset($input['user_profile']) ? \Storage::disk('uploads')->putFileAs('user_profile', $input['user_profile'], $name) : '';

        $user=new User();
        $user->type='people';
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();

        $people = new People();
        $people->user_id=$user->id;
        $people->user_profile=$input['user_profile'];
        $people->address = $request['address'];
        $people->phone = $request['phone'];
        $people->user_gender=$request['user_gender'];
        $people->save();
//        Storage::disk('user_profile')->put($img_user_profile_name,file::get($img_user_profile_file));
        return redirect()->back()->with(['success'=>'Your account have been created successfully.']);

    }

    public function postPeopleRequest(Request $request){
       $id=$request['id'];
       $people=People::where('user_id',$id)->first();

        $img_user_post_name=md5(microtime()).'.'.$request->file('image')->getClientOriginalExtension();
        $img_user_post_file=$request->file('image');
        $user_post=new userPost();
        $user_post->people_id=$people['id'];
        $user_post->user_id=$id;
        $user_post->title=$request['title'];
        $user_post->location=$request['location'];
        $user_post->name=$request['name'];
        $user_post->items_requested=$request['items-requested'];
        $user_post->cost=$request['cost'];
        $user_post->significance=$request['significance'];
        $user_post->phone=$request['phone'];
        $user_post->image=$img_user_post_name;
        $user_post->remark=$request['remark'];
        $user_post->save();
        Storage::disk('user_post')->put($img_user_post_name,file::get($img_user_post_file));
        return redirect()->back()->with(['success'=>'Your post have been successfully submitted to foundations.']);
    }
    //end user post form

    public function getUserPostImage($img_user_post){
        $file = Storage::disk('user_post')->get($img_user_post);
        return response($file, 200);
    }

    public function getConfirmUserPostImage($img_user_post)
    {
        $file = Storage::disk('user_post')->get($img_user_post);
        return response($file, 200);
    }

    public function getUserProfile($img_user_profile)
    {
        $file = Storage::disk('user_profile')->get($img_user_profile);
        return response($file, 200);
    }

}
