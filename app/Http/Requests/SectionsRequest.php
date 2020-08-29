<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionsRequest extends FormRequest
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
            'name' => 'bail|required|string',
            'vision' => 'bail|required|string',
            'message' => 'bail|required|string',
            'goals' => 'bail|required|string',
            'instructors' => 'bail|required|string',
            'description' => 'bail|required|string',
            'educational_system' => 'bail|required|string',
            'certificate' => 'bail|required|string',
            'image' => 'bail|required|image|mimes:jpg,jpeg,png',
        ];
    }

    public function messages() {

        return [
            'name.required' => 'قم بأدخال اسم القسم',
            'vision.required' => 'قم بأدخال رؤية القسم',
            'message.required' => 'قم بأدخال رسالة القسم',
            'goals.required' => 'قم بأدخال اهداف القسم',
            'instructors.required' => 'قم بأدخال اعضاء هيئة تدريس القسم',
            'description.required' => 'قم بأدخال توصيف عمل الخريج',
            'educational_system.required' => 'قم بأدخال النظام الدراسي',
            'certificate.required' => 'قم بأدخال شهادة القسم',
            'image.required' => 'قم بأدخال صورة القسم',
            'image.mimes' => 'صورة القسم يجب ان تكون بالأمتداد jpg , png , jpeg'
        ];

    }
}
