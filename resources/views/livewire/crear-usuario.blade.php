<form class="width-80" action="" wire:submit.prevent="crearUsuario">
    <div>
        <x-input-label for="nombre" :value="__('Nombre')" />
        <x-text-input class="block mt-1 w-full m-y-2"
            id="nombre"
            type="text"
            wire:model="nombre"
            :value="old('nombre')"
            placeholder="Nombre del usuario"
            required
            autofocus />
        @error('nombre')
            <p class="msg-error">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-input-label for="profesion" :value="__('Profesion')" />
        <select class="block mt-1 w-full m-y-2"
            id="profesion"
            wire:model="profesion"
            required
        >
            <option>-- Seleccione --</option>
            @foreach ($profesiones as $profesion)
                <option value="{{ $profesion->id }}"> {{$profesion->profesion}} </option>
            @endforeach
        </select>

        @error('profesion')
            <p class="msg-error">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input class="block mt-1 w-full m-y-2"
            id="empresa"
            type="text"
            wire:model="empresa"
            :value="old('empresa')"
            placeholder="Netflix, Google, Amazon, etc"
            required
            autofocus />
        @error('empresa')
            <p class="msg-error">{{$message}}</p>
        @enderror
    </div>
    <div>
        <x-primary-button>
            {{ __('Crear usuario') }}
        </x-primary-button>
    </div>
</form>
