<?php

namespace App\Models;

use App\Models\Actualites;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Metier;
use App\Models\CentreInteret;
use App\Models\Demenagement;
use App\Models\Competence;
use App\Models\OffreEmploi;
use App\Models\InformationAffaire;
use App\Models\InformationCommunautaire;
use App\Models\Opportunite;
use App\Models\Artisanale;
use App\Models\PromotionArtisanale;
use App\Models\Evenement_vie;
use App\Models\Maladie;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Centre_sante;
class Acteur extends Model
{
    use HasFactory;
    protected $fillable = [

        'nom',
        'prenom',
        'sexe',
        'date_naissance',
        'nationalite',
        'niveau_etude',
        'adresse',
        'telephone',
        'email',
        'nbre_enfant',
    ];


    public function metier(): hasMany
    {
        return $this->hasMany(Metier::class);
    }
    public function centreInterets():belongsToMany
    {
        return $this->belongsToMany(CentreInteret::class, 'acteur_centre_interet');
    }
    // Relation avec le modèle Demenagement
    public function demenagement():hasMany
    {
        return $this->hasMany(Demenagement::class);
    }
    public function competence(): belongsToMany
    {
        return $this->belongsToMany(Competence::class, 'acteur_competence', 'id_acteur', 'id_competence');
    }
    public function amenagement():hasMany
    {
        return $this->hasMany(Amenagement::class);
    }

    public function OffreEmploi()
    {
        return $this->hasMany(OffreEmploi::class);
    }

    public function InformationAffaire() : HasMany
    {
        return $this->hasMany(InformationAffaire::class);
    }

    public function InformationCommunautaire(): HasMany
    {
        return $this->hasMany(InformationCommunautaire::class );
    }

    public function opportunite():HasMany
    {
        return $this->hasMany(Opportunite::class);
    }

    public function artisanale():HasMany{
        return $this->hasMany(Artisanale::class);
    }

    public function promotionartisanale(): HasMany
    {
        return $this->hasMany(PromotionArtisanale::class);
    }

    public function EvenementVie() : HasMany
    {
        return $this->hasMany(Evenement_vie::class);
    }

    public function actualites(): HasMany
    {
        return $this->hasMany(Actualites::class);
    }

    public function maladies(): belongsToMany
    {
        return $this->belongsToMany(Maladie::class, 'acteur_maladies');
    }

    public function CentreSante(): belongsToMany
    {
        return $this->belongsToMany(CentreSante::class, 'acteurs_centresantes');
    }

    public function projetmairie(): BelongsTo
    {
        return $this->belongsTo(ProjetMairie::class, 'id_projet_mairie');
    }


}
