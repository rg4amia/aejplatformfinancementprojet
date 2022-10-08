<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experience_professionels', function (Blueprint $table) {
            $table->id();
            $table->integer('annee')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('poste_fonction')->nullable();
            $table->foreignId('promoteur_id')->constrained('promoteurs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experience_professionels');
    }
};
