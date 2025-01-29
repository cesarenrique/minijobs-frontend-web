@extends('app')

@section('content')

<h2 class="text-center"> Condiciones</h2>
<div style="width:100%;">
    <button class="bg-blue-900" style="width:10%; margin:auto;" id="rol">Acepto condiciones</button>
</div>
<script>
    let formData = new FormData()
    formData.append('user_id',{{$user_id}})
    let rolAlumno=document.getElementById("rol");
    rolAlumno.onclick=function crearRol(e){
        e.preventDefault();
        fetch('{{$urls["api"]}}',´{
            method: "POST",
            body: formData
        }).then(response =>{
            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{

            location.replace('{{route("administrador.principal")}}')
        }).catch(error => {
            console.error('Error', error);
        })
    }
</script>
@endsection
