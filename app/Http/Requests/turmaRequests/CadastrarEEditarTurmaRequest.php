<?php

namespace App\Http\Requests\turmaRequests;

use Illuminate\Foundation\Http\FormRequest;

class CadastrarEEditarTurmaRequest extends FormRequest
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
            'vc_nomedaTurma' => 'required',
            'vc_classeTurma' => 'required',
            'it_qtdeAlunos' => 'required',
            'vc_turnoTurma' => 'required'
            //
        ];
    }





    public function messages()
    {
        return [
            'vc_nomedaTurma.required' => 'O campo nome da turma precisa ser preenchido',
            'vc_classeTurma.required' => 'O campo nome da turma precisa ser preenchido',
            'it_qtdeAlunos.required' => 'Precisa ser informado o total de alunos'
            //
        ];
    }
}
