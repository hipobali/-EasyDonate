<?php

namespace App\Http\Controllers;

use App\Category;
use App\confirmPost;
use App\donateForm;
use App\Foundation;
use App\foundationPost;
use App\Http\Requests\FoundationRegisterRequest;
use App\People;
use App\Report;
use App\User;
use App\userPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FoundationController extends Controller
{
    public function getFoundationRegister()
    {
        return view('foundation_register');
    }
    public function getFoundationLogin(){
        return view('foundation_login');
    }
    public function getFoundationRequestView(){
        $donateForm=donateForm::orderBy('id','desc')->get();
            $user_post=userPost::orderBy('id','desc')->get();
            $foundation=Foundation::all();
            $foundationPost=foundationPost::all();
            $category=Category::all();
        return view('foundation_request_page')->with(['foundation'=>$foundation])->with(['category'=>$category])->with(['user_post'=>$user_post])->with(['donateForm'=>$donateForm])->with(['foundationPost'=>$foundationPost]);
    }

    public function postFoundationRegister(FoundationRegisterRequest $request)
    {
        $img_foundation_name=md5(microtime()).'.'.$request->file('foundation_profile')->getClientOriginalExtension();
        $img_foundation_file=$request->file('foundation_profile');
        $img_certificate_name=md5(microtime()).'.'.$request->file('foundation_certificate')->getClientOriginalExtension();
        $img_certificate_file=$request->file('foundation_certificate');

        $user=new User();
        $user->type='foundation';
        $user->name=$request['founder'];
        $user->email=$request['email'];
        $user->password=$request['password'];
        $user->save();

        $foundation = new Foundation();
        $foundation->user_id = $user->id;
        $foundation->foundation_profile=$img_foundation_name;
        $foundation->foundation_name = $request['foundation_name'];
        $foundation->year_picker=$request['year_picker'];
        $foundation->month_picker=$request['month_picker'];
        $foundation->day_picker=$request['day_picker'];
        $foundation->address = $request['address'];
        $foundation->phone = $request['phone'];
        $foundation->president_name=$request['president_name'];
        $foundation->foundation_certificate=$img_certificate_name;
        $foundation->member_count=$request['member_count'];
        $foundation->save();
        Storage::disk('foundation_profile')->put($img_foundation_name,file::get($img_foundation_file));
        Storage::disk('foundation_certificate')->put($img_certificate_name,file::get($img_certificate_file));
        return redirect()->back()->with(['success'=>'Your account have been created successfully']);
    }
    public function postFoundationRequest(Request $request){
        $id=$request['id'];
        $foundation=Foundation::where('user_id',$id)->first();
        if($request->hasFile('f_post_image')){
            $img_post_name=time().'.'.$request->file('f_post_image')->getClientOriginalExtension();
            $img_post_file=$request->file('f_post_image');
            $foundation_post=new foundationPost();
            $foundation_post->foundation_id=$foundation['id'];
            $foundation_post->user_post_id=$request['user_post_id'];
            $foundation_post->f_post_detail=$request['f_post_detail'];
            $foundation_post->f_post_image=$img_post_name;
            $foundation_post->f_post_category=$request['f_post_category'];
            $foundation_post->save();
            Storage::disk('foundation_post_image')->put($img_post_name,file::get($img_post_file));
            return redirect()->back();
        }
        $foundation_post=new foundationPost();
        $foundation_post->foundation_id=$foundation['id'];
        $foundation_post->user_post_id=$request['user_post_id'];
        $foundation_post->f_post_detail=$request['f_post_detail'];
        $foundation_post->f_post_category=$request['f_post_category'];
        $foundation_post->save();
        return redirect()->back();
    }
    public function foundationImagePost($img_post_name)
    {
        $file = Storage::disk('foundation_post_image')->get($img_post_name);
        return response($file, 200);
    }
    public function getFoundationProfile($img_foundation_profile){
        $file=Storage::disk('foundation_profile')->get($img_foundation_profile);
        return response($file,200);
    }
    public function postFoundationReport(Request $request){
        $report_form=new Report();
        $report_form->user_post_id=$request['id'];
        $report_form->report_foundation_name=$request['name'];
        $report_form->report_foundation_option=$request['option'];
        $report_form->save();
        return redirect()->back()   ;
    }
    public function foundationPostDataDelete(Request $request){
        $id=$request['id'];
        $foundation_post=foundationPost::whereId($id)->first();
        $foundation_post->delete();
        return redirect()->back();
    }

}
