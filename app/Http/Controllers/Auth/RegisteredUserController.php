<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function store(Request $request)
    {
        $usuario = $request->validate([
            'name' =>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' =>['required', 'confirmed']
        ]);

        $usuario = User::create([
            'name' => $request->input('name'),
            'email'=>$request->input('email'),
            'password'=> bcrypt($request->input('password')),
        ]);

        auth()->login($usuario);
        $id_user = Auth::user()->id;
        DB::insert('insert into record (id_usuario, id_juego) values (?, ?)', [$id_user, '1']);
        DB::insert('insert into record (id_usuario, id_juego) values (?, ?)', [$id_user, '2']);
        return redirect()->to('/');  
    }
}
