<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habitants-allakro', function (Blueprint $table) {
            // $table->id();
            // $table->string('nom');
            // $table->string('sexe');
            // $table->string('age');
            // $table->string('p-naissance');
            // $table->string('nationalite');
            // $table->string('s-matrimoniale');
            // $table->string('email');
            // $table->string('lire-ecrire');
            // $table->string('niveau-etude');
            // $table->string('profession');
            // $table->string('metier');
            // $table->string('b-enfants-charge');
            // $table->string('enfants-ecole-allakro');
            // $table->string('personne-charge-t-age');
            // $table->string('enfants-outils-communication');
            // $table->string('famille-internet');
            // $table->string('eleves-etudiants-maison');
            // $table->string('connexion-type');
            // $table->string('moyens-informations');
            // $table->string('communaute-village');
            // $table->string('reunion');
            // $table->string('reunion-par-mois');
            // $table->string('statu-pro');
            // $table->string('secteur');
            // $table->string('b-avez-vouz-number');
            // $table->string('moyen-comm');
            // $table->string('reseau-mobile');
            // $table->string('b-utlise-internet');
            // $table->string('connexion-type');
            // $table->string('connexion-qualite');
            // $table->string('b-utlise-internet');
            // $table->string('outil-internet');
            // $table->string('b-messagerie');
            // $table->string('type-messagerie');
            // $table->string('b-reseau-sociau');
            // $table->string('reseau-sociaux');
            // $table->string('reseau-sociau-prefere');
            // $table->string('autres-services');
            // $table->string('temps-internet');
            // $table->string('forfiat-internet');
            // $table->string('depenses');
            // $table->string('tarif-forfiat-internet');
            // $table->string('haut-debut-internet');
            // $table->string('forfiat-internet');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habitants-allakro');
    }
};
