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
        Schema::create('projet_promoteur_ones', function (Blueprint $table) {
            $table->id();
            $table->boolean('debutprojet')->default(false);
            $table->foreignId('niveaumaturation_id')->constrained('niveau_maturation_params');
            $table->fullText('decrireprojet')->nullable();
            $table->fullText('besoinecono_projet')->nullable();
            $table->fullText('modelaffaire')->nullable();
            $table->fullText('strategiemarketing')->nullable();
            $table->fullText('combien_utilisateur')->nullable();
            $table->fullText('compoequipe_gestion')->nullable();
            $table->fullText('role_in_projet')->nullable();
            $table->fullText('plein_tps_in_projet')->nullable();
            $table->fullText('besoin_econo_projet')->nullable();
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
        Schema::dropIfExists('projet_promoteur_ones');
    }
};
