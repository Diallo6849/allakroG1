<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CliniqueRequest extends FormRequest
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
            'nom' => 'required|max:150',
            'lieu' => 'required|max:150',
            'service' => 'required|max:150',
            'contact' => 'required|numeric',
            'image' => 'required|mimes:jpg,jpeg,png,pdf',



        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'le nom est obligatoire',
            'nom.max'=>'la longueur du nom ne doit pas depasse 150',
            'lieu.required'=>'la localisation du l\'hopital est obligatoire',
            'lieu.max'=>'la longueur la localisation ne doit pas depasse 150',
            'service.required'=>'le service disponible est obligatoire',
            'service.max'=>'la longueur du service ne doit pas depasse 150',
            'contact.required'=>'le contact est obligatoire',
            'contact.numeric'=>'le contact doit etre un nombre',
            'contact.max'=>'la longueur du contact ne doit pas depasse 150',
            'image.required'=>'le fichier justificarif est obligatoire',
            'image.mimes'=>'le fichier doit etre de type jpg,jpeg,png,pdf',

        ];
    }
}
