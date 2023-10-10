<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegistrationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'phone' => ['required', 'regex:/^07\d{8}$/'], 
            'password' => [
                'required',
                Rules\Password::defaults(),
                'regex:/^(?=.*[A-Z])/',
                'regex:/^(?=.*[a-z])/',
                'regex:/^(?=.*\d)/', 
                'regex:/^(?=.*[@$!%*#?&])/',
            ],
            'password_confirmation' => ['required', 'confirmed', Rules\Password::defaults()],
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'The phone number format is invalid. It should start with "07" followed by 8 digits.',
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
        ];
    }
}

