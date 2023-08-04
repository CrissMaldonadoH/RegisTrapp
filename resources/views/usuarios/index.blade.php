<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('mensaje'))
                <div class="msg-correct bg-correct">
                    {{ session('mensaje') }}
                </div>
            @endif
            <livewire:mostrar-usuarios/>
        </div>
    </div>
</x-app-layout>
