<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UtilisateurRequest extends FormRequest
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
            'sexe' => 'required',
            'dateNaissance' => 'required|date|before:today|after:01/01/1960',
            'dateAmenagement' => 'required|date|before:today|after:01/01/1960',
            'profession' => 'required',
            'nationalite' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,pdf',



        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'le nom est obligatoire',
            'sexe.required'=>'le sexe est obligatoire',
            'dateNaissance.required'=>'la date de naissance est obligatoire',
            'dateNaissance.before'=>'la date de naissance ne doit pas depasser la date d\'aujourd\'hui',
            'dateNaissance.after'=>'la date de naissance ne doit pas etre avant 1960',
            'dateAmenagement.required'=>'la date d\'amenagement est obligatoire',
            'dateAmenagement.before'=>'la date d\'amenagement ne doit pas depasser la date d\'aujourd\'hui',
            'dateAmenagement.after'=>'la date d\'amenagement ne doit pas etre avant 1960',

            'profession.required'=>'la profession est obligatoire',
            'nationalite.required'=>'la nationalite est obligatoire',
            'image.required'=>'le fichier justificarif est obligatoire',
            'image.mimes'=>'le fichier doit etre de type jpg,jpeg,png,pdf',

        ];
    }
}

