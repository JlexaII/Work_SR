<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
      'InputEmail' => 'required|email',
      'InputPassword' => 'required|min:8'
    ];
    }
    public function messages()
    {
    return [
      'InputEmail.required' => 'E-pochtani kiriting',
      'InputPassword.required' => 'Parol kiriting 8ta simvoldan yuqori'
    ];
    }
}
