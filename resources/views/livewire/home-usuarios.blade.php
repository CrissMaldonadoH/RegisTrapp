<div class="home">
    <div class="home-container">
        @forelse ($usuarios as $usuario)
            <div class="item">
                <div>
                    <h2>{{$usuario->nombre}}</h2>
                    <p>{{$usuario->empresa}}</p>
                </div>
                <div>
                    <a href="{{ route('usuarios.mostrar', $usuario->id)}}">
                        <x-primary-button class="ml-4">
                            {{ __('Ver usuario') }}
                        </x-primary-button>
                    </a>
                </div>
            </div>
        @empty
            <p>Aun no hay usuarios registrados</p>
        @endforelse

    </div>
</div>

