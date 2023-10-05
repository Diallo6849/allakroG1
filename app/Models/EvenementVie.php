<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class EvenementVie extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'description',
        'Date',
        'lieu',
        'statut',
        'acteur_id',
    ];
    public function acteur():belongsTo
    {
        return $this->belongsTo(Acteur::class);
    }
}
