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
        Schema::table('projet_promoteur_ones', function (Blueprint $table) {
            $table->date('datedebutprojet')->nullable();
            $table->text('resttemps')->nullable();
            $table->text('experienceprecise')->nullable();
            $table->foreignId('descriptionconnaissance_id')->constrained('description_connaissance_activites');
            $table->text('formationentrepreunariat')->nullable();
            $table->text('connaissanceaquise')->nullable();
            $table->text('formationgestion')->nullable();
            $table->text('connaissanceaquisegestion')->nullable();
            $table->foreignId('niveaupratiqueentrepreunariat_id')->constrained('niveau_pratique_entrepreneuriats');
            $table->foreignId('niveaupratiqueentreprise_id')->constrained('niveau_pratique_entreprises');
            $table->text('besoinsactuelsformation')->nullable();
            $table->text('besoinsactuelsaccompagnement')->nullable();
            $table->text('besoinenfinancement')->nullable();
            $table->text('montantfinancement')->nullable();
            $table->text('investconcour')->nullable();
            $table->text('autrebesoinsaccompagnement')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projet_promoteur_ones', function (Blueprint $table) {
            //
        });
    }
};
