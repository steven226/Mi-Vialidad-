<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaJugador extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('record', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_juego');
            $table->integer('puntaje_total');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            /* Claves foraneas */
            $table->foreign('id_usuario')
                ->references('id')->on('users')
                ->onDelete('restrict');
            $table->foreign('id_juego')
                ->references('id')->on('juego')
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
        Schema::dropIfExists('record');
    }
}
