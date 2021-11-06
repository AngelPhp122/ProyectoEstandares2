<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //verifica si hay un usuario conectado y si lo hay retorna el ID del nivel
        if(auth()->check()){
            $tipoUsuario = auth()->user()->tipo_usuario_id;
            return view('welcome', ["tipoUsuario" => $tipoUsuario]);
        }
        else{
            return view('welcome');
        }

    }
}
