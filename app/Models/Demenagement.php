<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;
class Demenagement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'tuteur',
        'tutrice',
        'sexe',
        'profession',
        'dateNaissance',
        'dateDemenagement',
        'provenance',
        'destination',
        'image',
    ];

    // Relation avec le modèle Acteur

}
