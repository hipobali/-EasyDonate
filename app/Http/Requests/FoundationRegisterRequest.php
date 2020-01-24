<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FoundationRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'foundation_profile'=>'required|mimes:jpg,jpeg,png',
            'foundation_name'=>'required|min:1|max:40',
            'founder'=>'required|min:1|max:40',
            'year_picker'=>'required',
            'month_picker'=>'required',
            'day_picker'=>'required',
            'email'=>'required|email|unique:users',
            'address'=>'required|min:3|max:100',
            'phone'=>'required|numeric',
            'president_name'=>'required|min:3|max:15',
            'foundation_certificate'=>'required|mimes:jpg,jpeg,png',
            'member_count'=>'required|min:1|numeric',
            'password'=>'required|min:8',
            'confirm_password'=>'required|min:8|same:password',
        ];
    }
    public function messages()
    {
        return [
            'foundation_profile.required'=>'The foundation profile field is required',
            'foundation_profile.mimes'=>'Foundation profile must be the jpg,jpeg or png',
            'foundation_name.required'=>'The foundation name field is required',
            'foundation_name.min'=>'Foundation name must be at least 5 characters',
            'foundation_name.max'=>'Foundation name may not be greater than 15 characters',
            'founder.required'=>'The founder name field is required',
            'founder.min'=>'Founder name must be at least 5 characters',
            'founder.max'=>'Founder name may not be greater than 15 characters',
            'year_picker.required'=>'The year field is required',
            'month_picker.required'=>'The month field is required',
            'day_picker.required'=>'The day field is required',
            'email.required'=>'Email address field is required',
            'email.unique'=>'Email address is already exists in database',
            'address.required'=>'The address field is required',
            'address.min'=>'The address field must be at least 3 characters',
            'address.max'=>'The address field may not be greater than 15 characters',
            'phone.required'=>'Phone number filed is required',
            'phone.numeric'=>'Phone number must be numeric number',
            'president_name.required'=>'President Name field is required',
            'president_name.min'=>'President Name filed must be at least 3 characters',
            'president_name.max'=>'President Name filed may not be greater than 15 characters',
            'foundation_certificate.required'=>'Foundation Certificate field is required',
            'foundation_certificate.mimes'=>'Foundation Certificate must be jpg,jpeg,or png',
            'member_count.required'=>'The member count field is required',
            'member_count.min'=>'Member count must be at least 1',
            'member_count.numeric'=>'Member count must be numeric number',
            'password.required'=>'The password field is required',
            'password.min'=>'Password must be at least 8 characters',
            'confirm_password.required'=>'The confirm password field is required',
            'confirm_password.min'=>'Confirm password must be at least 8 characters',
            'confirm_password.same'=>'Confirm password must be same with the password',
        ];
    }
}
