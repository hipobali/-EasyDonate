<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleRegisterRequest extends FormRequest
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
            'user_profile'=>'required|mimes:jpeg,png,jpg,gif,svg',
            'name'=> 'required|min:1|max:40',
            'email'=> 'required|email|unique:users',
            'address'=> 'required|min:3|max:100',
            'phone'=>'required|numeric',
            'password'=> 'required|min:8|max:20',
            'confirm_password'=> 'required|min:8|max:20|same:password',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'The name is required.',
            'email.required' => 'The email is required',
            'address.required' => 'The address is required.',
            'phone.required' => 'The phone is required',
            'password.required' => 'The password is required.',
            'confirm_password.required' => 'The conform password is required',
            'phone.numeric'=>'Phone number must be numeric.',
            'password.min' => ' The password must be at least 8 characters.',
            'password.max' => ' The password may not be greater than 20 characters.',
            'confirm_password.min' => ' The confirm password must be at least 8 characters.',
            'confirm_password.max' => ' The confirm password may not be greater than 20 characters.',
        ];
    }
}
