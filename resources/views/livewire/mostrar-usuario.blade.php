<div>
    <p class="font-x-large">Profesión: <span class="letter-bold">{{ $usuario->profesion->profesion }}</span></p>
    <p class="font-x-large">Empresa en la que trabaja: <span class="letter-bold">{{ $usuario->empresa }}</span></p>
</div>

@guest
<div class="inv">
    <p>¿Desea enlistar los usuarios de su empresa?</p>
    <p> <a href="{{ route('register') }}">Cree una cuenta aquí</a> </p>
</div>

@endguest

