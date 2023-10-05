<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Amenagements extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'tuteur',
        'tutrice',
        'sexe',
        'profession',
        'dateNaissance',
        'dateAmenagement',
        'provenance',
        'destination',
        'image'
    ];



    // protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */


    // protected $fillable = [
	// 	'nom' => 'required',
	// 	'tuteur' => 'required',
	// 	'tutrice' => 'required',
	// 	'sexe' => 'required',
	// 	'profession' => 'required',
	// 	'dateNaissance' => 'required',
	// 	'dateAmenagement' => 'required',
	// 	'provenance' => 'required',
	// 	'destination' => 'required',
    // ];

}
