<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationRequest extends FormRequest
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
            'pre' => 'bail|required',
            'notes' => 'bail|required',
            'duration' => 'bail|required'
        ];
    }


    public function messages() {

        return [
            'pre.required' => 'قم بأدخال شروط القبول',
            'notes' => 'قم بأدخال الأوراق المطلوبة',
            'duration' => 'قم بأدخال مدة الدراسة'
        ];

    }
}
