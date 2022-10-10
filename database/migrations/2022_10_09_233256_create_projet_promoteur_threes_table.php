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
        Schema::create('projet_promoteur_threes', function (Blueprint $table) {
            Schema::enableForeignKeyConstraints();
            $table->id();
            $table->integer('region_id')->nullable();
            $table->integer('commune_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->integer('typeprojet_id')->nullable();
            $table->integer('secteuractivite_id')->nullable();
            $table->integer('divisionregionaleaej_id')->nullable();
            $table->integer('formejuridique_id')->nullable();
            $table->string('intituleprojet')->nullable();
            $table->string('raisonsociale')->nullable();
            $table->string('sigle')->nullable();
            $table->longText('descriptionactivite')->nullable();
            $table->integer('coutprojet')->nullable();
            $table->integer('nombreemploi')->nullable();
            $table->integer('estnouvelleactivite')->nullable();
            $table->string('planaffaire')->nullable();
            $table->timestamps();
            Schema::disableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projet_promoteur_threes');
    }
};
