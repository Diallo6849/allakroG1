<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompetenceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nom' => 'required',
            'service' => 'required',
            'contact' => 'required|numeric',
            'email' => 'required|email',
            'description' => 'required',
            'lieu' => 'required',
            'prix' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,png,pdf',
        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'le nom est obligatoire',
            'service.required'=>'le service est obligatoire',
            'contact.required'=>'le contact est obligatoire',
            'contact.numeric'=>'le contact doit etre un nombre',
            'email.required'=>'l\'email est obligatoire',
            'email.numeric'=>'l\'email doit etre un nombre',
            'description.required'=>'la description est obligatoire',

            'lieu.required'=>'le lieu de service est obligatoire',
            'prix.required'=>'le prix est obligatoire',

            
            'image.required'=>'le fichier justificarif est obligatoire',
            'image.mimes'=>'le fichier doit etre de type jpg,jpeg,png,pdf',

        ];
    }
}
