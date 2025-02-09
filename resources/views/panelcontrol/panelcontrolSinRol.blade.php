@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
            <a id="crearEmpresaA" href='#' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Pago</h2>
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
        //if(data.data.reclutador.id!=undefined){
            //document.getElementById('listarEmpresasA').setAttribute('href',''+"/"+data.data.sinrol.id)
        //}
    }).catch(error => {
        console.error('Error', error);
    })
</script>
@endsection
