<?php

namespace App\Http\Controllers;

use App\Category;
use App\donateForm;
use App\Foundation;
use App\foundationPost;
use App\Http\Requests\DonateFormRequest;
use App\userPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class donorController extends Controller
{
   public function getDonorHome(){
       $foundation_post=foundationPost::orderBy('id','desc')->paginate(6);
       $foundation=Foundation::all();
       $category=Category::all();
       return view('donor_home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['foundation'=>$foundation]);;
   }
    public function getDonationForm(){
       $foundation=Foundation::all();
       $category=Category::all();
       return view('donation_form')->with(['category'=>$category])->with(['foundation'=>$foundation]);
    }
    public function postDonateForm(DonateFormRequest $request){
        $donationFormsModel=new donateForm();
        $donationFormsModel->donor_name=$request['donationInputName'];
        $donationFormsModel->donor_ph_no=$request['donationInputPhoneNumber'];
        $donationFormsModel->donor_location=$request['selectedCountry']." ".$request['selectedState'];
        $donationFormsModel->donor_address=$request['address'];
        $donationFormsModel->donate_category=$request['donate_category'];
        $donationFormsModel->donate_foundation=$request['donate_foundation'];
        $donationFormsModel->donor_donationOption=$request['inlineRadioOptions'];
        $donationFormsModel->donor_date=$request['date'];
        $donationFormsModel->donor_amount=$request['selectedCurrency']." ".$request['amount'];
        $donationFormsModel->save();

        return redirect()->back()->with(['success'=>'You donated successfully! Thank You!']);
    }
    public  function getDeleteDonorRequest(Request $request){
        $id=$request['id'];
        $donorForm=donateForm::whereId($id)->first()->get();
        $donorForm->delete();
        return redirect()->back();
    }
    public function getSearchCategory(Request $request){
        $q=$request['q'];
        $foundation=Foundation::all();
        $category=Category::all();
        if($q=='All'){
            $foundation_post=foundationPost::all()->first()->orderBy('id','desc')->paginate(6);
            return view('donor_home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation]);
        }
        $foundation_post=foundationPost::orderBy('id','desc')->where('f_post_category',"LIKE","%$q%")->paginate(6);
        return view('donor_home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation]);
    }
    public function getSearchFoundation(Request $request){
        $q=$request['q'];
        $foundation=Foundation::all();
        $category=Category::all();
        if($q=='0'){
            $foundation_post=foundationPost::all()->first()->orderBy('id','desc')->paginate(6);
            return view('donor_home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation]);
        }
        $foundation_post=foundationPost::orderBy('id','desc')->where('foundation_id',"LIKE","%$q%")->paginate(6);
        return view('donor_home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['category'=>$category])->with(['foundation'=>$foundation]);
    }
    public function getContactUs(){
        return view('contact_us');
    }

    public function getTermsAndConditions(){
       return view('terms_and_conditions');
    }

    public function getAboutUs(){
       return view('about_us');
    }

    public function getDonateCancle(){
       if(Auth::user()){
           $user_post=userPost::all();
           $foundation_post=foundationPost::all()->first()->orderBy('id','desc')->paginate(6);
           $foundation=Foundation::all();
           $category=Category::all();
           return view('home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['foundation'=>$foundation])->with(['user_post'=>$user_post]);

       }else{
           $foundation_post=foundationPost::all()->first()->orderBy('id','desc')->paginate(6);
           $foundation=Foundation::all();
           $category=Category::all();
           return view('donor_home')->with(['category'=>$category])->with(['foundation_post'=>$foundation_post])->with(['foundation'=>$foundation]);;

       }


   }
}
