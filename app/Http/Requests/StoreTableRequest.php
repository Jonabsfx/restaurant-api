<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTableRequest extends FormRequest
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
            'number' => 'required|numeric|unique:tables,number'
        ];
    }

    public function messages()
    {
        return [
            'number.required' => 'Número da mesa é obrigatório',
            'number.unique' => 'Mesa já existente'
        ];
        
    }
}