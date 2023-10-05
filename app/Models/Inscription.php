<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'pere',
        'mere',
        'sexe',
        'image',
        'profession',
        'profession_pere',
        'profession_mere',
        'dateNaissance',
        'dateAmenagement',
        'nationalite',

        'niveau_etude',
        'adresse',
        'telephone',
        'email',
        'situation_m',
        'nbre_enfant',


    ];
}
