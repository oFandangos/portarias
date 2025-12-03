<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortariaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'tipo' => 'required',
            'assunto' => 'required',
            'file' => 'required',
        ];
    }
    public function messages(){
        return [
            'tipo.required' => 'O tipo é obrigatório',
            'assunto.required' => 'O assunto é obrigatório',
            'file.required' => 'O arquivo é obrigatório'
        ];
    }
}
