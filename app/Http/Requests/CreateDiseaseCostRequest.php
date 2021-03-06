<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiseaseCostRequest extends FormRequest
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
            //
            'diseases'    =>'required',
            'diseasetype' =>'required',
            'consultationfee'   =>'required|regex:/^[0-9]+$/',
            'services'       =>'required',
            'distributions'   =>'required|regex:/^[0-9]+$/'
        ];
    }
}
