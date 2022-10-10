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
        Schema::create('experience_professionelles', function (Blueprint $table) {
            $table->id();
            $table->integer('nombre')->nullable();
            $table->bigInteger('unite')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('fonction')->nullable();
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
        Schema::dropIfExists('experience_professionelles');
    }
};
