<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormRecuerdos extends FormRequest
{
    
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'txtTitulo' => 'required|max:25',
            'txtRecuerdo' => 'required|min:4'
        ];
    }
}
