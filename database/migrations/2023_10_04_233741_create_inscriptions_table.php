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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom
            $table->string('pere'); // Nom et prénom du tuteur
            $table->string('mere'); // Nom et prénom de la tutrice
            $table->string('sexe'); // Sexe
            $table->string('image'); // Sexe
            $table->string('profession'); // profession
            $table->string('profession_pere'); // Profession
            $table->string('profession_mere'); // Profession
            $table->date('dateNaissance'); // Date de naissance
            $table->date('dateAmenagement'); // Date d'aménagement
            $table->string('nationalite');
            $table->string('niveau_etude');
            $table->string('adresse');
            $table->string('telephone');
            $table->string('email');
            $table->string('situation_m');
            $table->string('nbre_enfant');
    // Provenance
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
