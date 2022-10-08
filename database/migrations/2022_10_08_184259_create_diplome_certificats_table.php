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
        Schema::create('diplome_certificats', function (Blueprint $table) {
            $table->id();
            $table->string('titrediplome_certificat')->nullable();
            $table->string('nom_etablissement')->nullable();
            $table->date('periode')->nullable();
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
        Schema::dropIfExists('diplome_certificats');
    }
};
