@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("anuncios")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Anuncios</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("skills")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Skills</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("empresas")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Empresas</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("sectores")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Sectores</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("especializadas")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Especialidad Empresas</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("tipoCarreras")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Tipo Carrera</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("tipoRamaCarreras")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Tipo Especialidad Carrera</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("carreras")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Carreras</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("centros")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Centros Educativos</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("cargos")}}'' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Cargos</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("encargados")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Encargados</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("reclutadores")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Reclutadores</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("profesores")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Profesores</h2>
            </a>
        </div>
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a href='{{route("alumnos")}}' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Alumnos</h2>
            </a>
        </div>


    </div>

</div>
@endsection
