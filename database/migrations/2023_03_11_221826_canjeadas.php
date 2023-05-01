<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Canjeadas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canjeadas',function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_recompensa');
            $table->string('nombreCanjeada');
            $table->string('imagenCanjeada');
            $table->string('descripcionCanjeada');
            /* Claves foraneas */
            $table->foreign('id_usuario')
                ->references('id')->on('users')
                ->onDelete('restrict');
            $table->foreign('id_recompensa')
                ->references('id')->on('recompensas')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canjeadas');
    }
}
