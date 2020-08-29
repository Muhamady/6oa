<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'image' => 'array',
            'image.*' => 'required|image|mimes:png,jpg,jpeg'
        ];
    }

    public function messages() {

        return [
            'image.required' => 'قم بأدخال الصورة',
            'image.mimes' => 'يجب ان تكون الصورة المرفوعه بالأمتداد jpg , jpeg , png'
        ];

    }
}
