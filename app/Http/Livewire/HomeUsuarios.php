<?php

namespace App\Http\Livewire;

use App\Models\Usuario;
use Livewire\Component;

class HomeUsuarios extends Component
{

    public function render()
    {
        $usuarios = Usuario::all();
        return view('livewire.home-usuarios', [
            'usuarios' => $usuarios,
        ]);
    }
}

