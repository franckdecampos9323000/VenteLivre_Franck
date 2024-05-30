<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnonceRequest extends FormRequest
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
            //'trainings' => ['nullable', 'array'],
            //'trainings.*.image' => ['required', 'image', 'mimes:jpg,png,svg'/* , 'max:50240' */],
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,svg'/* , 'max:50240' */],
            'title' => ['required', 'string'/* , 'max:255' */, 'unique:annonces,title'],
            'description' => ['nullable'/* , 'max:5000' */],
            //'trainings.*.category_id' => ['required', 'integer', 'exists:categories,id'],
        ];
    }
}
