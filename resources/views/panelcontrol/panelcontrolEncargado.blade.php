@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a id="crearEmpresaA" href='#' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Crear</h2>
            </a>
        </div>
        <div id="listarEmpresas" class="bg-indigo-200 text-center p-4 " style="height: 20rem; ">
            <a id="listarEmpresasA" href='#' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Listar Empresas</h2>
            </a>
        </div>
        <div id="listarCargos" class="bg-indigo-200 text-center p-4 " style="height: 20rem; ">
            <a href='#' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Listar Cargos</h2>
            </a>
        </div>
    </div>
</div>

<script>
let nombreUsuario6= localStorage.getItem('minijobs-usuario')
let idUsuario6= localStorage.getItem('minijobs-id-usuario')
 fetch('{{$urls["api"]}}'+idUsuario6).then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{
        if(data.data.encargado.id!=undefined){
            document.getElementById('crearEmpresaA').setAttribute('href','{{$urls["crear"]}}'+"/"+data.data.encargado.id+'/crear')
            document.getElementById('listarEmpresasA').setAttribute('href','{{$urls["crear"]}}'+"/"+data.data.encargado.id+'/empresa')
        }
    }).catch(error => {
        console.error('Error', error);
    })
</script>
@endsection
