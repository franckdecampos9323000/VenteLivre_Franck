<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnnonceRequest extends FormRequest
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
            'title'=> ['required', 'string', 'max:255'],
            'description'=> ['nullable'/* , 'max:5000' */],
            //'category_id' => ['required', 'integer', 'exists:categories,id'],
            'image'=> ['image', 'mimes:jpg,jpeg,png,svg'/* , 'max:10240' */],
        ];
    }

    /* protected function prepareForValidation()
    {
        if ($this->image == null) {
            $this->request->remove('image');
        }
    } */
}
