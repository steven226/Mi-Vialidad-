<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Validation\ValidationException;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SesionController extends Controller
{
    /*Funcion para guardar la sesión*/
    public function store(Request $request){
        $credenciales = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string']
        ]);
        /* Valida las credenciales de la sesión */
        if(!Auth::attempt($credenciales, $request->boolean('recuerda'))){
            throw ValidationException::withMessages([
                'email' => 'Correo Incorrecto',
                'password' => 'Contraseña Incorrecta'
            ]);
        }
        
        $request->session()->regenerate();

        return redirect()->intended();

    }

    /* Funcion para destruir la sesion */
    public function destroy(Request $request){
        Auth::guard('web')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function cambiarNombre(){
        $dificultad_juego = DB::table('dificultad_juego')->get();
        return view('cambiarNombre',['dificultad_juego' =>$dificultad_juego]);
    }

    /* Función para editar el nombre de usuario logeado recibiendo su ID */
    public function edit(Request $request, $id){
            
        $userName = $request->input('name'); 
        $dificultad = $request->input('dificultad_id');
        DB::update('update users set name = ?, dificultadUser = ? where id = ?', [$userName,$dificultad, $id]);
        session()->flash('succses', 'Usuario Actualizado');
        return redirect('/');


    }

    /* Funcion para sumar los puntos al finalizar los juegos */
    public function sumaPuntos(Request $request,$id){
        /* Se recibe la dificultad seleccionada */
        $dificultad_user = DB::select('select * from users where id = ?',[$id]);
        foreach($dificultad_user as $dificultad){
            $dificultad_juego = DB::select('select * from dificultad_juego where nombre_dificultad = ?',[$dificultad->dificultadUser]);
        }

        foreach($dificultad_juego as $seleccionada){
            $puntosDificultad = $seleccionada->puntaje_otorgado;
        }

       
        /* Se obtiene el record del usuario y se compara con el record que acaba de obtener */
        $record = $request -> input('record');
        $nombreJuego = $request-> input('nombre_juego');
        $juegos = DB::select('select * from juego where nombre_juego = ?',[$nombreJuego]);
        foreach($juegos as $juego){
            $recordEnBD = DB::select('select * from record where id_usuario = ? AND id_juego = ?',[$id,$juego->id]);
            foreach($recordEnBD as $puntosRecord){
                if($record > $puntosRecord->puntaje_total){
                    DB::insert('UPDATE record SET puntaje_total = ? WHERE id_usuario = ? AND id_juego = ?', [$record,$id,$juego->id]);
                }  
            }
        }
       
        /* Se suman los puntos que ya tenia el usuario más los puntos de la dificultad */
        $puntaje=Auth::user()->puntaje_total + $puntosDificultad;

        /* Se actualiza en la base de datos */
        DB::update('update users set puntaje_total = ? where id = ?', [$puntaje, $id]);
        session()->flash('succses', 'Puntaje Actualizado');

        /* Se redirige al inicio */
        return redirect('/');
    }

    /* Funciones para que la pagina de cada juego reciba las dificultades guardadas
        en la Base de datos */

    public function dificultad(){
        $user = Auth::user()->id;
        $dificultad_user = DB::select('select * from users where id = ?',[$user]);
        foreach($dificultad_user as $dificultad){
            $dificultad_juego = DB::select('select * from dificultad_juego where nombre_dificultad = ?',[$dificultad->dificultadUser]);
        }
        return view('adivinanza',['dificultad_juego'=>$dificultad_juego]);
    }

    public function dificultad2(){
        $user = Auth::user()->id;
        $dificultad_user = DB::select('select * from users where id = ?',[$user]);
        foreach($dificultad_user as $dificultad){
            $dificultad_juego = DB::select('select * from dificultad_juego where nombre_dificultad = ?',[$dificultad->dificultadUser]);
        }
        return view('quiz',['dificultad_juego' =>$dificultad_juego]);
    }
    
    public function dificultad3(){
        $user = Auth::user()->id;
        $dificultad_user = DB::select('select * from users where id = ?',[$user]);
        foreach($dificultad_user as $dificultad){
            $dificultad_juego = DB::select('select * from dificultad_juego where nombre_dificultad = ?',[$dificultad->dificultadUser]);
        }
        return view('memo',['dificultad_juego' =>$dificultad_juego]);
    }

    public function dificultad4(){
        $user = Auth::user()->id;
        $dificultad_user = DB::select('select * from users where id = ?',[$user]);
        foreach($dificultad_user as $dificultad){
            $dificultad_juego = DB::select('select * from dificultad_juego where nombre_dificultad = ?',[$dificultad->dificultadUser]);
        }
        return view('columnas',['dificultad_juego' =>$dificultad_juego]);
    }

    public function recompensasBD(){
        $recompensas = DB::table('recompensas')->get();
        return view('recompensas',['recompensas' =>$recompensas]);
    }

    /* Funcion para canjear puntos por recompensas*/
    public function canjear(Request $request,$idRecompensa){
        $puntaje=Auth::user()->puntaje_total;
        $id= Auth::user()->id;
        $puntosRecompensa = 0;
        $puntosRecompensa = $request -> input('Puntos');
        /* Se verifica que los puntos del usuario sea mayor o igual a la cantidad a gastar */
        if($puntaje > $puntosRecompensa){
            $puntaje = $puntaje-$puntosRecompensa;
            /* Se actualiza en la base de datos */
            DB::update('update users set puntaje_total = ? where id = ?', [$puntaje, $id]);

            /*Se obtienen los datos de la recompensa seleccionada*/
            $Recompensacanjeada = DB::select('select * from recompensas where id = ?',[$idRecompensa]);

            /*Se pasan los datos de la recompensa seleccionada a la tabla de canjeadas*/
            foreach($Recompensacanjeada as $recompensa){
                DB::insert('insert into canjeadas (id_usuario, id_recompensa, nombreCanjeada, imagenCanjeada, descripcionCanjeada) values(?,?,?,?,?)',[$id,$idRecompensa, $recompensa->nombreRecompensa, $recompensa->imagenRecompensa, $recompensa->descripcionRecompensa]);
            }
        }
        return redirect('/');
    }

    /* Funcion para pasar los valores de la tabla canjeadas a la vista */
    public function canjeadas(){
        $id_usuario = Auth::user()->id;
        $canjeadas = DB::select('select * from canjeadas where id_usuario = ?',[$id_usuario]);
        return view('canjeadas',['canjeadas' =>$canjeadas]);
    }
}
