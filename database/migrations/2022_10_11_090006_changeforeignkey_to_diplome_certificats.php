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
        Schema::table('diplome_certificats', function (Blueprint $table) {
            $table->dropForeign('diplome_certificats_projetpromoteurthree_id_foreign');
            $table->renameColumn('projetpromoteurthree_id', 'projetpromoteurone_id')->constrained('projet_promoteur_ones')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('diplome_certificats', function (Blueprint $table) {
            //
        });
    }
};
