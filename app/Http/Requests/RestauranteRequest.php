<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestauranteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cnpj' => 'required|max:11',
            'telefone' => 'required|max:14'
        ];
    }
    public function messages()
    {
        return[
            'cnpj.*' =>'tipo é obrigatorio de tamanho maximo de 11 caracters',
            'telefone.*' =>'nome é obrigatorio tamanho maximo de 14 caracters'
        ];
    }
}
