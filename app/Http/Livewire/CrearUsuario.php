<?php

namespace App\Http\Livewire;

use App\Models\Profesion;
use App\Models\Usuario;
use Livewire\Component;

class CrearUsuario extends Component
{

    public $nombre;
    public $profesion;
    public $empresa;

    protected $rules = [
        'nombre' => 'required | string',
        'profesion' => 'required',
        'empresa' => 'required | string',
    ];

    public function crearUsuario()
    {
        $datos = $this->validate();

        //Creación del usuario nuevo
        Usuario::create([
            'nombre' => $datos['nombre'],
            'profesion_id' => $datos['profesion'],
            'empresa' => $datos['empresa'],
            'user_id' =>auth()->user()->id,
        ]);

        //Mensaje de publicado
        session()->flash('mensaje','Se ha publicado correctamente el usuario');

        return redirect()->route('usuarios.index');
    }

    public function render()
    {
        //Consultando profesiones en la BD
        $profesiones = Profesion::all();

        //Vista del formulario de registro
        return view('livewire.crear-usuario', [
            'profesiones' => $profesiones
        ]);
    }
}
