<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MostrarUsuario extends Component
{
    public $usuario;
    public function render()
    {
        return view('livewire.mostrar-usuario');
    }
}
