<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

        <div class="p-6 text-gray-900">
            @forelse($usuarios as $usuario)
                <div class="vw-us">
                    <div class="vw-us-dates">
                        <p>{{ $usuario->nombre}}<p>
                        <p>{{ $usuario->empresa}}<p>
                    </div>
                    <div class="vw-us-btns">
                        <a href="{{ route('usuarios.mostrar', $usuario->id) }}">
                            <x-secondary-button class="ml-4">
                                {{ __('ver') }}
                            </x-secondary-button>
                        </a>
                        <a href="{{ route('usuarios.editar', $usuario->id) }}">
                            <x-primary-button class="ml-4">
                                {{ __('Editar') }}
                            </x-primary-button>
                        </a>
                        <x-danger-button class="ml-4" wire:click="$emit('alerta', {{ $usuario->id }})" >
                            {{ __('Eliminar') }}
                        </x-danger-button>

                    </div>
                </div>
            @empty
                <p>Aun no hay usuarios <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('usuarios.registro') }}">
                    {{ __('empieza creando uno') }}
                </a></p>
            @endforelse
        </div>
    </div>
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('alerta', usuarioId=>{
            Swal.fire({
            title: '¿Eliminar usuario?',
            text: "Ten en cuenta que un usuario eliminado no se puede volver a recuperar",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminar',
            cancelButtonText: 'Cancelar'
            }).then((result) => {
            if (result.isConfirmed) {
                //Se elimina el usuario
                Livewire.emit('eliminarUsuario', usuarioId)
                //Se muestra la alerta
                Swal.fire(
                '¡Eliminado!',
                'El usuario ha sido eliminado',
                'success'
                )}
            })
        });
    </script>
@endpush
