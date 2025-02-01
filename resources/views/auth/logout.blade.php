@extends('app')

@section('content')

<div class="" style="margin: 5%; width: 90%;">
    <button id="boton-registro2" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" type="text" id="fusername" name="username" placeholder="Username">
        Cerrar Sesión
    </button>
</div>
<script>

    let username=localStorage.getItem('minijobs-usuario')
    let formData = new FormData()
    formData.append('username',username)
    let registro=document.getElementById('boton-registro2')
    registro.onclick=function registrar(e){
        e.preventDefault()

        let idUsuario8=localStorage.getItem('minijobs-usuario')
        fetch('{{$urls["api"]}}',{
            method: "POST",
            body: formData

        }).then(response =>{
            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
            console.log(data);
            if(data.data.user.id===undefined){
                console.log("error undefinid usuario")
            }
            localStorage.removeItem('minijobs-id-usuario')
            localStorage.removeItem('minijobs-usuario')
            localStorage.removeItem('minijobs-rol-usuario')

            location.replace('{{route("home")}}')

        }).catch(error => {
            console.error('Error', error);
        })
    }

</script>
@endsection
