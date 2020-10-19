<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Auth;

class CandidateRequest extends FormRequest {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        $rules = [
            'name'=> 'required|regex:/^[\pL\s\-()]+$/u',
            'email'=> 'required|email|unique:candidates|regex:/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/',
            'mobile'=> 'required|unique:candidates|regex:/^[6789]\d{9}$/',
            'dob'=> 'required|date|before:today',
            'gender'=> 'required',
            'country'=> 'required',
            'state'=> 'required',
            'district'=> 'required',
            'address_location'=> 'required',
            'present_status'=> 'required'
            
        ];
        return $rules;
    }

    public function messages() {
        $messages = [
            'name.required' => 'Enter your name.',
            'name.regex' => 'Name is not valid.',
            'email.required' => 'Enter your email Id.',
            'mobile.required' => 'Enter your mobile number.',
            'dob.required' => 'Select Your date of birth.',
            'gender.required' => 'Select your gender.',
            'state.required' => 'Select your state.',
            'district.required' => 'Select your district.',
            'address_location.required'=> 'Select your address location',
            'present_status.required'=> 'Select your present status'

        ];
        return $messages;
    }

}
