<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeopleFormRequest extends FormRequest
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
            'title'=>'required|min:1|max:100',
            'location'=>'required|min:3|max:200',
            'name'=>'required|max:100',
            'items-requested'=>'required',
            'cost'=>'required|numeric',
            'significance'=>'required|min:3',
            'phone'=>'required|numeric',
            'image'=>'required|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
    public function messages()
    {
        return [
            'items_requested.required' => 'The item requested is required.',
        ];
    }
}
