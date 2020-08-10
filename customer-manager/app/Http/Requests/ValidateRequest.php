<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'name' => ['required'],
            'age' => ['required'],
            'email' => ['required','unique:customers'],
        ];
    }
    public function messages()
    {
        $messages = [
            'name.required' => 'Yeu cau nhap ten',
            'age.required' => 'Yeu cau nhap tuoi',
            'email.required' => 'Yeu cau nhap email',
//            'email.unique:customers' => 'Email da bi trung',
        ];
        return $messages;
    }
}
