<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InscriptionRequest extends FormRequest
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
            'niveau_etude' => 'required',
            'adresse' => 'required',
            'telephone' => 'required|numeric',
            'email' => 'required|email',
            'situation_m' => 'required',
            'nbre_enfant' => 'required|numeric',
            'dateNaissance' => 'required|date|before:today|after:01/01/1960',
            'dateAmenagement' => 'required|date|before:today|after:01/01/1960',
            'profession' => 'required',
            'profession_pere' => 'required',
            'profession_mere' => 'required',
            'nationalite' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,pdf',



        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'le nom est obligatoire',
            'pere.required'=>'le nom du pere est obligatoire',
            'mere.required'=>'le nom de la mere est obligatoire',
            'sexe.required'=>'le sexe est obligatoire',
            'niveau_etude.required'=>'le niveau d\'etude est obligatoire',
            'adresse.required'=>'l\'adresse est obligatoire',
            'telephone.required'=>'le telephone est obligatoire',
            'telephone.numeric'=>'le nemero de telephone doit etre un nombre',
            'email.required'=>'le email est obligatoire',
            'situation_m.required'=>'la situation matrimoniale est obligatoire',
            'nbre_enfant.required'=>'le nombre d\'nfants est obligatoire',
            'nbre_enfant.numeric'=>'le nombre d\'nfants doit etre un nombre',
            'dateNaissance.required'=>'la date de naissance est obligatoire',
            'dateNaissance.before'=>'la date de naissance ne doit pas depasser la date d\'aujourd\'hui',
            'dateNaissance.after'=>'la date de naissance ne doit pas etre avant 1960',
            'dateAmenagement.required'=>'la date d\'amenagement est obligatoire',
            'dateAmenagement.before'=>'la date d\'amenagement ne doit pas depasser la date d\'aujourd\'hui',
            'dateAmenagement.after'=>'la date d\'amenagement ne doit pas etre avant 1960',

            'profession.required'=>'la profession est obligatoire',
            'profession_pere.required'=>'la profession du pere est obligatoire',
            'profession_mere.required'=>'la profession de la mere est obligatoire',
            'nationalite.required'=>'la nationalite est obligatoire',
            'image.required'=>'le fichier justificarif est obligatoire',
            'image.mimes'=>'le fichier doit etre de type jpg,jpeg,png,pdf',

        ];
    }
}
