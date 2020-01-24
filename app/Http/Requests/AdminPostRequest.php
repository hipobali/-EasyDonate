<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPostRequest extends FormRequest
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
            'name'=>'required|min:1|max:40',
            'email'=>'required|email|unique:users',
            'secret'=>'required',
            'password'=>'required|min:8',
            'password_confirm'=>'required|min:8|same:password'
            ];
    }
    public function messages()
    {
        return [
            'name.required'=>'The admin name field is required',
            'email.required'=>'Email address field is required',
            'email.unique'=>'Email address is already exists in database',
            'secret'=>'Secret Code is required',
            'password.required'=>'The password field is required',
            'password.min'=>'Password must be at least 8 characters',
            'password_confirm.required'=>'The confirm password field is required',
            'password_confirm.min'=>'Confirm password must be at least 8 characters',
            'password_confirm.same'=>'Confirm password must be same with the password'
        ];
    }
}
