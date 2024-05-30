<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'photo_profil' => ['required', 'image', 'mimes:jpg,png,svg'/* , 'max:50240' */],
            'username' => ['required', 'string'/* , 'max:255' */, 'unique:users,username'],
            'email' => ['required', 'email'/* , 'max:255' */, 'unique:users,email'],
            'roles' => ['required'],
            'password' => ['required', 'string', 'min:8', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'],
        ];
    }
}
