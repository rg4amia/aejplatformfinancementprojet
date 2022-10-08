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
            $table->text('decrireprojet')->nullable();
            $table->text('besoinecono_projet')->nullable();
            $table->text('modelaffaire')->nullable();
            $table->text('strategiemarketing')->nullable();
            $table->text('combien_utilisateur')->nullable();
            $table->text('compoequipe_gestion')->nullable();
            $table->text('role_in_projet')->nullable();
            $table->text('plein_tps_in_projet')->nullable();
            $table->text('besoin_econo_projet')->nullable();
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
