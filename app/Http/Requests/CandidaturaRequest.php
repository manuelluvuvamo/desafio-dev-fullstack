<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidaturaRequest extends FormRequest
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
            //Validações do Formulário de Candidatura
            'vc_primeiroNome' => 'required',
            'vc_apelido' => 'required',
            'dt_dataNascimento' => 'required',
            'vc_genero' => 'required',
            'vc_dificiencia' => 'required',
            'vc_estadoCivil' => 'required',
            'it_telefone' => 'required|numeric',
            'vc_residencia' => 'required',
            'vc_naturalidade' => 'required',
            'vc_provincia' => 'required',
            'vc_bi' => 'required|min:14',
            'dt_emissao' => 'required',
        ];
    }
}
