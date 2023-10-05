<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinique extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'lieu',
        'service',
        'contact',
        'image'
    ];
    public function utilisateurs(){
        return $this->belongsToMany(Utilisateur::class, 'utilisateur_id', 'clinique_id');
    }
}
