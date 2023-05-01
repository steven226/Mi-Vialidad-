<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDificultadJuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dificultad_juego', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_juego');
            $table->string('nombre_dificultad');
            $table->integer('necesaria_desbloquear');
            $table->integer('puntaje_otorgado');
            $table->boolean('estado')->nullable();
            $table->timestamp('last_used_at')->nullable();
            $table->timestamps();
            /* Claves foraneas */
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
        Schema::dropIfExists('dificultad_juego');
    }
}
