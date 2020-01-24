<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonateFormRequest extends FormRequest
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
            'donationInputName'=> 'required',
            'donationInputPhoneNumber'=> 'required',
            'address'=>'required',
            'donate_category'=>'required',
            'donate_foundation'=>'required',
            'date'=>'required',
            'amount'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'donationInputName' => 'The donor name is required!',
            'donationInputPhoneNumber' => 'The phone number is required!',
            'address' => 'The address is required!',
            'donate_category'=>'please choose the category',
            'donate_foundation'=>'please choose the foundation',
            'date' => ' The date is required',
            'amount' => ' The amount is required',
        ];
    }
}
