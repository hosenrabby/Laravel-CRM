<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class stuffRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'stuffType'=>'required|string|regex:/^[\pL\s\-]+$/u',
            'stuffName'=>'required|string',
            'stuffCode'=>'required|numeric',
            'stuffContactNo'=>'required|numeric'
        ];
    }
    public function messages(){
        return [
            'stuffType.required'=>'Please Enter Your Stuff Type',
            'stuffName.required'=>'Please Enter Your Stuff Name',
            'stuffCode.required'=>'Please Enter Your Stuff Code',
            'stuffContactNo.required'=>'Please Enter Your Stuff Contact Number'
        ];
    }
}
