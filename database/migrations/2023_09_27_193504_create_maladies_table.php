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
        Schema::create('maladies', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('description');
            $table->date('date_contagion');
            $table->string('type');
            $table->string('mode_transmission');
            $table->string('traitement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pharmacies');
    }
};