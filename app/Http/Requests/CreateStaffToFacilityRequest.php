<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStaffToFacilityRequest extends FormRequest
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
            'staffcategory'    =>'required',
            'no_of_employees'   =>'required|regex:/^[0-9]+$/',
            'county'       =>'required',
            'facility_id'       =>'required'
        ];
    }
}
