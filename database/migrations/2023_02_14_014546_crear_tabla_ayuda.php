<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAyuda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ayuda_juego', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_juego');
            $table->integer('puntaje_restado');
            $table->integer('veces_usada');
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
        Schema::dropIfExists('ayuda_juego');
    }
}
