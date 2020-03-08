<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'nom' => 'required',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required'
        ];
    }

    public function messages()
    {
      return [
        'nom.required' => 'Veuillez entrez le nom',
        'email.required' => 'Veuillez entrez le courriel',
        'email.email' => 'Le courriel est invalide',
        'sujet.required' => 'Veuillez entrez le sujet',
        'message.required' => 'Veuillez entrez un message'
      ];
    }
}
