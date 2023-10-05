<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MaladiesRequest extends FormRequest
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
            'description' => 'required',
            'date_contagion' => 'required|date|before:today|after:01/01/1960',
            'type' => 'required',
            'mode_transmission' => 'required',
            'traitement' => 'required',



        ];
    }
    public function messages()
    {
        return [
            'nom.required'=>'le nom est obligatoire',
            'nom.max'=>'la longueur du nom ne doit pas depasse 150',
            'description.required'=>'la description est obligatoire',
            'date_contagion.required'=>'la date contagion est obligatoire',
            'type.required'=>'le type est obligatoire',
            'mode_transmission.required'=>'le mode transmission est obligatoire',
            'traitement.required'=>'le traitement est obligatoire',
            'date_contagion.required'=>'la date est obligatoire',
            'date_contagion.before'=>'la date ne doit pas depasser la date d\'aujourd\'hui',
            'date_contagion.after'=>'la date ne doit pas etre avant 1960',


        ];
    }
}
