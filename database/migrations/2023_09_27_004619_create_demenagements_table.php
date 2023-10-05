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
        Schema::create('demenagements', function (Blueprint $table) {
            $table->id();
            $table->string('nom'); // Nom
            $table->string('tuteur'); // Nom et prénom du tuteur
            $table->string('tutrice'); // Nom et prénom de la tutrice
            $table->string('sexe'); // Sexe
            $table->string('profession'); // Profession
            $table->date('dateNaissance'); // Date de naissance
            $table->date('dateDemenagement'); // Date d'aménagement
            $table->string('provenance'); // Provenance
            $table->string('destination'); // Nouvelle habitation
            $table->string('image'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demenagements');
    }
};
