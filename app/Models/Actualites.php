<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Actualites extends Model
{
    use HasFactory;
    protected $fillable = [
        'titre',
        'description',
        'date_publication',
        'image',
        'categorie',
        'statut',
        'users_id',
        'contenu',

    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
