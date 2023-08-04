<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Usuario;
use App\Models\User;

class MostrarUsuarios extends Component
{
    protected $listeners = ['eliminarUsuario'];

    public function eliminarUsuario(Usuario $usuario)
    {

        $usuario -> delete();
    }
    public function render()
    {
        $usuarios = Usuario::all();


        return view('livewire.mostrar-usuarios', [
            'usuarios' => $usuarios,
        ]);
    }
}
