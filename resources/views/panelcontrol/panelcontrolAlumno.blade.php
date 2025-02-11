@extends('app')

@section('content')
<div class="w-100">
    <div class="grid grid-cols-2 sm:grid-cols-3">
        <div  id="postulados" class="colorcito-opciones text-center p-4 " style="height: 20rem;">
            <a id="postuladosA" href='#' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Mis postulaciones</h2>
            </a>
        </div>
        <div id="listarAnuncio" class="colorcito-opciones text-center p-4 " style="height: 20rem; ">
            <a id="listarAnuncioA" href='#' style="height: 20rem;">
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Listar Anuncios</h2>
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
        if(data.data.alumno.id!=undefined){
            document.getElementById('postuladosA').setAttribute('href','{{$urls["crear"]}}'+"/"+data.data.alumno.id+'/postulados')
            document.getElementById('listarAnuncioA').setAttribute('href','{{$urls["crear"]}}'+"/"+data.data.alumno.id+'/anuncios')
        }
    }).catch(error => {
        console.error('Error', error);
    })
</script>
@endsection
