<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DificultadJuego extends Model
{
    use HasFactory;
    protected $table = "dificultad_juego";
    /* Relaciones */
    public function juego(){
        return $this->belongsTo(Juego::class, 'id_juego', 'id');
    }
}
