<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Recompensas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recompensas', function(Blueprint $table){
            $table->id();
            $table->string('nombreRecompensa');
            $table->integer('costoRecompensa')->default('0');
            $table->string('imagenRecompensa');
            $table->string('descripcionRecompensa');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recompensas');
    }
}
