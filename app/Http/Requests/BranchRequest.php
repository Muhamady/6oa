<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
            'name' => 'bail|required',
            'address' => 'bail|required',
            'phone' => 'bail|required',
            'google_map' => 'bail|required'
        ];
    }


    public function messages() {

        return [
            'name.required' => 'قم بأدخال اسم الفرع',
            'address.required' => 'قم بأدخال عنوان الفرع',
            'phone.required' => 'قم بأدخال رقم الموبايل',
            'google_map.required' => 'قم بأدخال رابط الخريطة الخاصة بالفرع'
        ];

    }
}
