<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMessageRequest extends FormRequest
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
            //'title'=> ['required', 'string', 'max:255'],
           // 'content'=> ['required', 'max:10000'],
            /* 'senddate' => ['required', 'date', 'after_or_equal:today', 'date_format:d-m-Y'], */
            /* 'senddate' => ['required', 'date', 'date_format:d-m-Y'],
            'users' => ['nullable', 'array'],
            'users.*' => ['integer', 'exists:users,id'], */
        ];
    }
}
