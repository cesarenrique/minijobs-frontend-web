@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("usuarios")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Usuarios</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.administradores")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Administrador</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.sinroles")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Sin Rol</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{$urls["crear"]}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Crear</h2>
            </a>
        </div>
    </div>
</div>
@endsection
