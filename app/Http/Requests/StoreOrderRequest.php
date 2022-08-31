<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [            
            'product' => 'required',
            'zipcode' => 'required',
            'street' => 'required',
            'number' => 'required',
            'complement' => 'required',
            'city' => 'required',
            'uf' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'zipcode.required' => 'O campo Cep é obrigatório',
            'street.required' => 'O campo Logradouro é obrigatório',
            'complement.required' => 'O campo Complemento é obrigatório',
            'city.required' => 'O campo Cidade é obrigatório',            
        ];
    }
}
