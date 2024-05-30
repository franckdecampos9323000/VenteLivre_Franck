<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
        $userId = $this->user->id; // Obtenez l'ID de l'utilisateur actuel à partir de la requête
        return [
            'photo_profil' => ['nullable', 'image', 'mimes:jpg,png,svg'],
            'username' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($userId),
            ],
            'roles' => ['required'],
        ];
    }
}
