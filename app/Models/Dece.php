<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dece extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'pere',
        'mere',
        'sexe',
        'lieu',
        'date_deces',
        'maison',
        'cause',
        'profession',
        'dateNaissance',
        'image',
    ];
}
