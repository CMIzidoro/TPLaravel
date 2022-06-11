<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PratoRequest extends FormRequest
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
            'tipo' => 'required|max:60',
            'nome' => 'required|max:100'
        ];
    }
    public function messages()
    {
        return[
            'tipo.*' =>'tipo é obrigatorio de tamanho maximo de 60 caracters',
            'nome.*' =>'nome é obrigatorio tamanho maximo de 100 caracters'
        ];
    }
}
