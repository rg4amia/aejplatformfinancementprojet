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
        Schema::table('resultat_vente_recents', function (Blueprint $table) {
            $table->foreignId('projetpromoteurthree_id')->constrained('projet_promoteur_threes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('resultat_vente_recents', function (Blueprint $table) {
            //
        });
    }
};
