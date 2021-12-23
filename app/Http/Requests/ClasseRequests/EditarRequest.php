<?php

namespace App\Http\Requests\classeRequests;

use Illuminate\Foundation\Http\FormRequest;

class editarClasseRequest extends FormRequest
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
            'classe' => 'required',
            
            //
        ];
    }

    public function messages()
    {
        return [
            'classe.required' => 'O campo classe precisa ser preenchido',
            
            //
        ];
    }
}
