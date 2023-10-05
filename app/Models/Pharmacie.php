<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\CentreSante;
use App\Models\PeriodeGarde;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Acteur;
class Pharmacie extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'adresse',
        'telephone',
        'email',
        'horaire_ouverture',
        'horaire_fermeture',
        'responsable',
        'image',
        'statut',
        'centresante_id',
    ];

    public function centresante():belongsTo
    {
        return $this->belongsTo(CentreSante::class);
    }

    public function periodegarde():hasMany
    {
        return $this->hasMany(PeriodeGarde::class);
    }

}
