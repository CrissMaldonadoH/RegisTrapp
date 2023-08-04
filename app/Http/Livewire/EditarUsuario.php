<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Profesion;
use App\Models\Usuario;

class EditarUsuario extends Component
{
    public $usuario_id;
    public $nombre;
    public $profesion;
    public $empresa;

    protected $rules = [
        'nombre' => 'required | string',
        'profesion' => 'required',
        'empresa' => 'required | string',
    ];

    public function mount(Usuario $usuario)
    {
        $this->usuario_id = $usuario->id;
        $this->nombre = $usuario->nombre;
        $this->profesion = $usuario->profesion_id;
        $this->empresa = $usuario->empresa;

    }

    public function actualizarUsuario()
    {
        //Validando campos
        $datos = $this->validate();

        //Encontrando la vacante a editar
        $usuario = Usuario::find($this->usuario_id);

        //Se asignan los valores a actualizar
        $usuario->nombre = $datos['nombre'];
        $usuario->profesion_id = $datos['profesion'];
        $usuario->empresa = $datos['empresa'];

        //guardamos los cambios
        $usuario->save();

        //Redireccionamos al usuario
        session()->flash('mensaje','El usuario se actualizó correctamente');

        return redirect()->route('usuarios.index');
    }

    public function render()
    {
        $profesiones = Profesion::all();
        return view('livewire.editar-usuario', [
            'profesiones' => $profesiones
        ]);
    }
}
