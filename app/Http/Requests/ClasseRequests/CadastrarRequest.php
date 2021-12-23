<?php

namespace App\Http\Requests\turmaRequests;

use Illuminate\Foundation\Http\FormRequest;

class cadastrarTurmaRequest extends FormRequest
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
            'vc_classe' => 'required',
            'dt_dataCadastro'=>'reqired'
            //
        ];
    }

    public function messages()
    {
        return [
            'vc_classe.required' => 'O campo classe precisa ser preenchido'
            //
        ];
    }
}
