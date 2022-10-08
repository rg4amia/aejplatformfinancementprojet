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
        Schema::create('resultat_vente_recents', function (Blueprint $table) {
            $table->id();
            $table->integer('nbre_produit')->default(0);
            $table->integer('montant_ventes')->default(0);
            $table->integer('montant_depenses')->default(0);
            $table->integer('benefices')->default(0);
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
        Schema::dropIfExists('resultat_vente_recents');
    }
};
