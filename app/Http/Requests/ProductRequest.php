<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['bail','required','max:50']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Campo obrigatório',
            'name.max' => 'Capacidade máxima 50 caracteres'
        ];
    }
}
