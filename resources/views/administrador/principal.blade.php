@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.administradores")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Administrador</h2>
            </a>
        </div>
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.encargados")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Encargados</h2>
            </a>
        </div>
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.reclutadores")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Reclutadores</h2>
            </a>
        </div>
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.profesores")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Profesores</h2>
            </a>
        </div>
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.alumnos")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Alumnos</h2>
            </a>
        </div>
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a href='{{route("administrador.sinroles")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Sin Rol</h2>
            </a>
        </div>
    </div>

</div>
@endsection
