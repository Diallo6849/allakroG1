<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Acteur;
class OffreEmploi extends Model
{
    use HasFactory;

    protected $fillable = [
        'offre_emploi_id',
        'titre',
        'description',
        'lieu',
        'type_contrat',
        'salaire',
        'date_debut',
        'date_fin',
        'users_id',
    ];



    public function users()
    {
        return $this->belongsTo(Acteur::class, 'users_id');
    }
}
