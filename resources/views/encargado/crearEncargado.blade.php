@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a id="crear-link-a" href='#' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Empresa</h2>
            </a>
        </div>
    </div>
</div>
<script>
    document.getElementById("crear-link-a").setAttribute("href",'{{route("home")}}'+'/encargado/'+{{$encargado_id}}+'/crearEmpresa')


</script>
@endsection
