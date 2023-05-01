<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/* Importación de modelos */

class RecordJuego extends Model
{
    use HasFactory;
    protected $table = "record";
    /* Relaciones */
    
    public function juego(){

        return $this->belongsTo(Juego::class, 'id_juego', 'id');
    }


}