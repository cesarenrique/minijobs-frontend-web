@extends('app')

@section('content')
<div class="grid grid-cols-2 sm:grid-cols-3">
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a href='{{route("busquedas")}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Busquedas</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a href='{{route("panelcontrol.anonimo")}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Panel Administracion</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a href='{{route("usuario.anonimo")}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Perfil</h2>
        </a>
    </div>
</div>
<script>
    let nombreUsuarioLink10=document.getElementById("nombre-Usuario-link");


    if(nombreUsuarioLink10!=null){
        let rolUsuario10= localStorage.getItem('minijobs-rol-usuario')
        if(rolUsuario10==null){
            if(rolUsuario10==5){
                location.replace('{{route("home.administrador")}}')
            }else if(rolUsuario10==4){
                location.replace('{{route("home.encargado")}}')
            }else if(rolUsuario10==3){
                location.replace('{{route("home.reclutador")}}')
            }else if(rolUsuario10==2){
                location.replace('{{route("home.profesor")}}')
            }else if(rolUsuario10==1){
                location.replace('{{route("home.alumno")}}')
            }else if(rolUsuario10==0){
                location.replace('{{route("home.sinrol")}}')
            }
        }
    }
</script>
@endsection
