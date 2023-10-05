<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Maladie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'description',
        'date_contagion',
        'type',
        'mode_transmission',
        'traitement',
    ];

    public function acteurs():belongsToMany
    {
        return $this->belongsToMany(Acteur::class, 'acteur_maladie');
    }
    public function epidemies():belongsTo
    {
        return $this->belongsTo(Epidemie::class);
    }
}
