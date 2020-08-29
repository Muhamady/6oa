<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisionRequest extends FormRequest
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
            'message' => 'bail|required',
            'vision' => 'bail|required',
            'goal' => 'bail|required'
        ];
    }


    public function messages() {

        return [
            'message.required' => 'قم بأدخال الرسالة',
            'vision.required' => 'قم بأدخال الرؤية',
            'goal.required' => 'قم بأدخال الهدف'
        ];

    }
}
