<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmacieRequest extends FormRequest
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
            'adresse' => 'required|max:150',
            'email' => 'required|max:150|email',
            'telephone' => 'required|numeric',
            'horaire_ouverture' => 'required|max:150',
            'horaire_fermeture' => 'required|max:150',
            'responsable' => 'required|max:150',
            'statut' => 'required|max:150',
            'image' => 'required|mimes:jpg,jpeg,png,pdf',



        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'le nom est obligatoire',
            'nom.max'=>'la longueur du nom ne doit pas depasse 150',
            'adresse.required'=>'l\'adresse de la pharmacie est obligatoire',
            'adresse.max'=>'la longueur ne doit pas depasse 150',
            'email.required'=>'l\'email est obligatoire',
            'email.max'=>'la longueur ne doit pas depasse 150',
            'email.email'=>'l\'email est obligatoire exmple: diallo@gmail.com',
            'horaire_ouverture.required'=>'l\'heure d\'ouverture est obligatoire',
            'horaire_ouverture.numeric'=>'l\'heure doit etre un nombre',
            'horaire_fermeture.required'=>'l\'heure de fermeture est obligatoire',
            'horaire_fermeture.numeric'=>'l\'heure doit etre un nombre',
            'responsable.required'=>'le nom du responsable est obligatoire',
            'responsable.max'=>'la longueur ne doit pas depasse 150',
            'telephone.required'=>'le numero du responsable est obligatoire',
            'telephone.numeric'=>'le numero de telephone doit etre un nombre',
            'statut.required'=>'le statut est obligatoire',
            'statut.max'=>'la longueur ne doit pas depasse 150',

            'image.required'=>'le fichier justificarif est obligatoire',
            'image.mimes'=>'le fichier doit etre de type jpg,jpeg,png,pdf',

        ];
    }
}

