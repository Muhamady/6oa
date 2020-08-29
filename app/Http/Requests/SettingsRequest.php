<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
            'phone' => 'nullable|numeric|max:15',
            'whatsapp_one' => 'nullable|numeric|max:15',
            'whatsapp_two' => 'nullable|numeric|max:15',
            'whatsapp_three' => 'nullable|numeric|max:15',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'instagram' => 'nullable|string',
            'youtube' => 'nullable|string'
        ];
    }


    public function messages() {
        return [
            'phone.numeric' => 'يجب ان يكون رقم الهاتف ارقام فقط',
            'whatsapp_one.numeric' => 'يجب ان يكون رقم 1 واتس اب ارقام فقط',
            'whatsapp_two.numeric' => 'يجب ان يكون رقم 2 واتس اب ارقام فقط',
            'whatsapp_three.numeric' => 'يجب ان يكون رقم 3 واتس اب ارقام فقط'
        ];
    }
}
