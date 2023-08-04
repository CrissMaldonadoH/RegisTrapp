<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{

    public function index()
    {
        return view('usuarios.index');
    }


    public function registro()
    {
        return view('usuarios.registro');
    }


    public function mostrar(Usuario $usuario)
    {
        return view('usuarios.mostrar', [
            'usuario' => $usuario
        ]);
    }


    public function editar(Usuario $usuario)
    {

        $this->authorize('update', $usuario);

        return view('usuarios.editar', [
            'usuario' => $usuario
        ]);
    }

    public function api(Usuario $usuario)
    {

        return Usuario::all();
    }

}
