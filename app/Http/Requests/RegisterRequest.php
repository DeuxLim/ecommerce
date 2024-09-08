<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Password;

class RegisterRequest extends FormRequest
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

    public function prepareForValidation()
    {
        // Ensure 'is_seller' defaults to false if not present
        $this->merge([
            'is_seller' => $this->has('is_seller') ? true : false,
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => ['required', 'max:255', 'string'],
            'last_name' =>  ['required', 'max:255', 'string'],
            'username' =>   ['required', 'max:255', 'unique:users,username'],
            'email' =>      ['required', 'email', 'unique:users,email'],
            'password' =>   ['required', 'confirmed'], //Password::min(8)->mixedCase()->numbers()->symbols()] use this later
            'is_seller' =>      ['nullable', 'boolean']
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'Please enter your first name.',
            'first_name.max' => 'First name cannot exceed 255 characters.',
            'first_name.string' => 'First name must be a valid string.',

            'last_name.required' => 'Please enter your last name.',
            'last_name.max' => 'Last name cannot exceed 255 characters.',
            'last_name.string' => 'Last name must be a valid string.',

            'username.required' => 'Username is required.',
            'username.max' => 'Username cannot exceed 255 characters.',
            'username.email' => 'Username must be a valid email address.',
            'username.unique' => 'Username is already taken.',

            'email.required' => 'Email is required.',
            'email.unique' => 'Email is already registered.',

            'password.required' => 'Password is required.',
            'password.confirmed' => 'Passwords do not match.',
        ];
    }

}
