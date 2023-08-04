<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $usuario->nombre }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="font-semibold text-xl text-centered padding-5">Datos de {{ $usuario->nombre}}</h2>
                    <div class="mc">
                        <livewire:mostrar-usuario :usuario="$usuario" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
