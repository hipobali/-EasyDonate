<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Category;
use App\Foundation;
use App\foundationPost;
use App\Http\Requests\AdminPostRequest;
use App\People;
use App\Report;
use App\User;
use App\userPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminController extends Controller
{
    public function index(){
        return view('adminhome');
    }

    public function postAdminRegister(AdminPostRequest $request)
    {
        $user=new User();
        $user->type='admin';
        $user->name=$request['name'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();

        $admin=new Admin();
        $admin->user_id=$user->id;
        $admin->secret=$request['secret'];
        if ($request['secret']=='easydonate@5'){
            $admin->save();
            return redirect()->back()->with(['success'=>'Your account have been created successfully']);
        }else{
            User::find($user->id)->delete();
            return redirect()->back()->with(['error'=>'Your secret code is invalid']);
        }
    }

    //foundation//

    public function getFoundationData(){
        $user=User::all();
        $foundation=Foundation::all();
        return view('admin_foundationData')->with(['foundation'=>$foundation])->with(['user'=>$user]);
    }

    public function getFoundationProfile($img_foundation_profile){
        $file=Storage::disk('foundation_profile')->get($img_foundation_profile);
        return response($file,200);
    }

    public function getFoundationCertificate($img_certificate_name){
        $file=Storage::disk('foundation_certificate')->get($img_certificate_name);
        return response($file,200);
    }

    public function foundationDataDelete(Request $request){
        $id=$request['id'];
        $foundations=Foundation::where('id',$id)->first();
        $foundations->delete();
        $user=User::whereId($id)->first();
        $user->delete();
        return redirect()->back();
    }

    public function getFoundationPostData(){
        $foundation_post=foundationPost::all();
        return view('admin_foundationPost_data')->with(['foundation_post'=>$foundation_post]);
    }

    public function getFoundationReportData(){
        $report_post=Report::all();
        return view('admin_foundationReport_data')->with(['report_post'=>$report_post]);
    }


    //User//

    public function getUserData(){
        $user=User::all();
        $people=People::all();

        return view('admin_userData')->with(['people'=>$people])->with(['user'=>$user]);
    }

    public function userInfoDelete(Request $request){
        $id=$request['id'];
        $people=People::whereId($id)->first();
        $people->delete();

        $user=User::whereId($id)->first();
        $user->delete();
        return redirect()->back();
    }

    public function getUserProfile($img_user_profile)
    {
        $file = Storage::disk('user_profile')->get($img_user_profile);
        return response($file, 200);
    }

    public function getPeoplePostData(){
        $user_post=userPost::all();
        return view('admin_peoplePost_data')->with(['user_post'=>$user_post]);
    }

    public function userPostDataDelete(Request $request){
        $id=$request['id'];
        $user_post=userPost::whereId($id)->first();
        $user_post->delete();
        return redirect()->back();
    }

    public function getPeoplePostImage($img_user_post){
        $file = Storage::disk('user_post')->get($img_user_post);
        return response($file, 200);
    }

    //Category

    public function getCategory(){
        $category=Category::all();
        return view('category')->with(['category'=>$category]);
    }

    public function postCategory(Request $request){
        $category=new Category();
        $category->category_name=$request['category_name'];
        $category->save();
        return redirect()->back();
    }

    public function getDeleteCategory(Request $request){
        $id=$request['id'];
        $category=Category::whereId($id)->get();
        $category->delete();
        return redirect()->back();
    }

    public function postUpdateCategory(Request $request){
        $id=$request['id'];
        $category=Category::whereId($id)->first();
        $category->category_name=$request['category_name'];
        $category->update();
        return redirect()->back();
    }
}
