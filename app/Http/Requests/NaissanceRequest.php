<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NaissanceRequest extends FormRequest
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
            'pere' => 'required',
            'mere' => 'required',
            'sexe' => 'required',
            'dateNaissance' => 'required|date|before:today|after:01/01/1960',
            'lieu' => 'required',
            'hopital' => 'required',
            'maison' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,pdf',
        ];

        // 'dateNaissance' => 'required|date|date_format:d-m-Y',

    }
    public function messages()
    {
        return [
            'nom.required'=>'le nom est obligatoire',
            'pere.required'=>'le nom du pere est obligatoire',
            'mere.required'=>'le nom de la mere est obligatoire',
            'sexe.required'=>'le sexe est obligatoire',
            'dateNaissance.required'=>'la date de naissance est obligatoire',
            'dateNaissance.before'=>'la date de naissance ne doit pas depasser la date d\'aujourd\'hui',
            'dateNaissance.after'=>'la date de naissance ne doit pas etre avant 1960',

            'lieu.required'=>'le lieu de naissance est obligatoire',
            'maison.required'=>'le lieu de votre habitation est obligatoire',
            'hopital.required'=>'le nom de l\'hopital est obligatoire',
            'image.required'=>'le fichier justificarif est obligatoire',
            'image.mimes'=>'le fichier doit etre de type jpg,jpeg,png,pdf',

        ];
    }
}

