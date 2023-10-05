<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competence extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'service',
        'lieu',
        'contact',
        'email',
        'description',
        'prix',
        'image',
    ];

}
