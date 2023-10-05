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
        Schema::create('deces', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('pere');
            $table->string('mere');
            $table->string('sexe');
            $table->string('image');
            $table->string('cause');
            $table->string('maison');
            $table->string('profession');
            $table->string('lieu');
            $table->date('dateNaissance');
            $table->date('date_deces');
            $table->timestamps();
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deces');
    }
};
