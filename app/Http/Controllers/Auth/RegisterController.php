<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Foundation;
use App\People;
use App\Http\Requests\PeopleRegisterRequest;
use App\Http\Requests\AdminPostRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Http\Requests\FoundationRegisterRequest;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:admin');
        $this->middleware('guest:foundation');
        $this->middleware('guest:people');
    }

    public function showAdminRegisterForm()
    {
        return view('auth.register.admin_register', ['url' => 'admin']);
    }

    public function showFoundationRegisterForm()
    {
        return view('auth.register.foundation_register', ['url' => 'foundation']);
    }

    public function showPeopleRegisterForm()
    {
        return view('auth.register.people_register', ['url' => 'people']);
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function createAdmin(AdminPostRequest $request)
    {
        if($request['secret']=='easydonate@5'){

            $admin = Admin::create([
                'name' => $request['name'],
                'email' => $request['email'],
                'secret' =>'easydonate@5',
                'password' => Hash::make($request['password']),
            ]);

            return view('login/admin');

        }else{

            return redirect()->back()->with(['error'=>'Account Cannot created ']);

        }
    }

    protected function createFoundation(FoundationRegisterRequest $request)
    {
        $input = $request->all();
        $pname = uniqid('foundation_profile-') . '.' . $input['foundation_profile']->extension();
        $input['foundation_profile'] = isset($input['foundation_profile']) ? \Storage::disk('uploads')->putFileAs('foundation_profile', $input['foundation_profile'], $pname) : '';
        //Certificate
        $cname = uniqid('foundation_certificate-') . '.' . $input['foundation_certificate']->extension();
        $input['foundation_certificate'] = isset($input['foundation_certificate']) ? \Storage::disk('uploads')->putFileAs('foundation_certificate', $input['foundation_certificate'], $cname) : '';

//        $foundation = Foundation::create([
//            'name' => $request['founder'],
//            'email' => $request['email'],
//            'password' => Hash::make($request['password']),
//          'foundation_profile'=>$input['foundation_profile'],
//          'foundation_name' => $request['foundation_name'],
//          'year_picker'=>$request['year_picker'],
//          'month_picker'=>$request['month_picker'],
//          'day_picker'=>$request['day_picker'],
//          'address' => $request['address'],
//          'phone' => $request['phone'],
//          'president_name'=>$request['president_name'],
//          'foundation_certificate'=>$input['foundation_certificate'],
//          'member_count'=>$request['member_count'],
//        ]);
        $foundation=new Foundation();
        $foundation->name=$request['founder'];
        $foundation-> email=$request['email'];
        $foundation->password = Hash::make($request['password']);
        $foundation->foundation_profile =$input['foundation_profile'];
        $foundation->foundation_name =$request['foundation_name'];
        $foundation->year_picker =$request['year_picker'];
        $foundation->month_picker =$request['month_picker'];
        $foundation-> day_picker=$request['day_picker'];
        $foundation-> address=$request['address'];
        $foundation-> phone=$request['phone'];
        $foundation->president_name =$request['president_name'];
        $foundation->foundation_certificate =$input['foundation_certificate'];
        $foundation-> member_count=$request['member_count'];
        $foundation->save();
        return view('auth.login.foundation');
    }
    protected function createPeople(PeopleRegisterRequest $request)
    {
        $input = $request->all();
        $name = uniqid('user_profile-') . '.' . $input['user_profile']->extension();
        $input['user_profile'] = isset($input['user_profile']) ? \Storage::disk('uploads')->putFileAs('user_profile', $input['user_profile'], $name) : '';

        $people = People::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'user_profile'=>$input['user_profile'],
            'address' => $request['address'],
            'phone' => $request['phone'],
            'user_gender'=> $request['user_gender'],
        ]);
        return view('login/people');
    }
}
