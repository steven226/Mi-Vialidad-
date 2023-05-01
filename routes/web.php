<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SesionController;
use App\Http\Controllers\RecompensasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('inicio');
})->middleware('auth');

/* Rutas para establecer la dificultad en los juegos */
Route::get('/adivinanza',[SesionController::class, 'dificultad'])->middleware('auth');
Route::get('/quiz',[SesionController::class, 'dificultad2'])->middleware('auth');
Route::get('/memo',[SesionController::class, 'dificultad3'])->middleware('auth');
Route::get('/columnas',[SesionController::class, 'dificultad4'])->middleware('auth');

/* Rutas para controlar la sesion */
Route::view('/login', 'auth.login')->name('login');
Route::post('/login',[SesionController::class,'store']);

/* Rutas para la funcion de cambiar el nombre de usuario */
Route::get('/cambiarNombre',[SesionController::class, 'cambiarNombre'])->middleware('auth');
Route::post('/cambiarNombre/{id}',[SesionController::class,'edit'])->name('cambiarNombre');

/* Rutas para el sistema de recompensas */
Route::get('/recompensas',[SesionController::class, 'recompensasBD'])->middleware('auth');
Route::post('/canjear/{id}',[SesionController::class, 'canjear'])->name('canjear');

Route::get('/canjeadas',[SesionController::class, 'canjeadas'])->middleware('auth');


/* Ruta para la funcion de sumar puntos al final del juego */
Route::post('sumaPuntos/{id}',[SesionController::class,'sumaPuntos'])->name('sumaPuntos');


/* Ruta para cerrar sesión */
Route::post('/logout',[SesionController::class,'destroy'])->name('logout');

/* Ruta para recibir y guardar el registro de usuarios */
Route::view('/register', 'auth.register')->name('register');
Route::post('/register',[RegisteredUserController::class,'store']);


Route::get('/look_out_pedestrian', [LookOutPedestrianController::class,'index'])
        ->name('look_out_pedestrian')
        ->middleware('auth');

Route::resource( 'juego',App\Http\Controllers\Juego\ControllerJuego::class )
        ->middleware('auth');
Route::resource( 'ayuda_juego',App\Http\Controllers\Juego\ControllerAyudaJuego::class )
        ->middleware('auth');
Route::resource( 'dificultad_juego',App\Http\Controllers\Juego\ControllerDificultadJuego::class )
        ->middleware('auth');
Route::resource( 'record_juego',App\Http\Controllers\Juego\ControllerRecordJuego::class )
        ->middleware('auth');
