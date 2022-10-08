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
        Schema::create('promoteurs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nom')->nullable();
            $table->string('prenoms')->nullable();
            $table->date('date_naissance')->nullable();
            $table->string('matricule_aej')->nullable();
            $table->string('telephone')->nullable();
            $table->foreignId('sexe_id')->constrained('sexe_params');
            $table->foreignId('situationmatrimoniale_id')->constrained('situation_matrimoniale_params');
            $table->foreignId('niveauetude_id')->constrained('niveau_etude_params');
            $table->foreignId('commune_id')->constrained('commune_params');
            $table->foreignId('region_id')->constrained('region_params');
            $table->string('dernier_diplome')->nullable();
            $table->integer('nombreenfant')->nullable();
            $table->integer('nombrepers_charge')->nullable();
            $table->string('adressepostale')->nullable();
            $table->string('adressegeoprecise')->nullable();
            $table->string('telfixe')->nullable();
            $table->string('email')->nullable();
            $table->string('cellulaire')->nullable();
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
        Schema::dropIfExists('promoteurs');
    }
};
