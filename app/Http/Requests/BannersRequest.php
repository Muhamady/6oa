<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannersRequest extends FormRequest
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
            'image' => 'required|image|mimes:jpg,jpeg,png',
            'title' => 'required|text',
            'description' => 'required|text',
            'button_one_text' => 'nullable',
            'button_one_link' => 'nullable',
            'button_two_text' => 'nullable',
            'button_two_link' => 'nullable', 
        ];
    }


    public function messages() {

        return [
            'image.required' => 'قم بأدخال الصورة',
            'image.image' => 'يجب ان يكون الملف المرفوع صورة',
            'image.mimes' => 'يجب ان تكون صيغة الملف المرفوع png,jpg,jpeg'
        ];

    }
}
