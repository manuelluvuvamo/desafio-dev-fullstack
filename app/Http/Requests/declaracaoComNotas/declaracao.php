<?php

namespace App\Http\Requests\declaracaoComNotas;

use Illuminate\Foundation\Http\FormRequest;

class declaracao extends FormRequest
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
            'idAluno' => 'required'
           
            //
        ];
    }





    public function messages()
    {
        return [
            'idAluno.required' => 'Informa o processo do aluno'
           
            //
        ];
    }
}
