<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'sexe',
        'image',
        'profession',
        'dateNaissance',
        'dateAmenagement',
        'nationalite',

       
    ];

    public function cliniques(){
        return $this->belongsToMany(Clinique::class, 'clinique_id', 'utilisateur_id')->withPivot('nom');
    }
}
