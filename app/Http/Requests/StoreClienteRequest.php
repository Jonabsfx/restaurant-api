<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'nome' => 'required|max:255',
            'cpf' => 'required|max:11'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Nome do cliente é obrigatório',
            'cpf.required' => 'CPF é obrigatório'
        ];
        
    }
}