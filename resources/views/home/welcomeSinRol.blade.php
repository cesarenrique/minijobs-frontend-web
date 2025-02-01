@extends('app')

@section('content')
<div class="grid grid-cols-2 sm:grid-cols-3">
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a href='{{route("busquedas")}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Busquedas</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a href='{{route("panelcontrol.sinrol")}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Panel Administracion</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a id="welcome-perfil-link" href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Perfil</h2>
        </a>
    </div>
</div>
<script>
     let idUsuario2= localStorage.getItem('minijobs-id-usuario')
     let nombreUsuario2= localStorage.getItem('minijobs-usuario')
     let welcomePerfilLink=document.getElementById("welcome-perfil-link");
     welcomePerfilLink.setAttribute("href","{{$urls['perfil']}}"+"/"+idUsuario2)
</script>
@endsection
