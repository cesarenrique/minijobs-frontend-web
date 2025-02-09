@extends('app')

@section('content')
<div class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px;">
    <div class="bg-blue-400 m-auto" style="width: 500px; padding-top: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">


        <h2 style="margin: 5%; width: 90%;">Login</h2>
        <form class=""   id="registro" method="POST">
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fusername">Email or Username</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text" id="fusername" name="username" placeholder="email or username"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fpassword">Password</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="password" id="fpassword" name="password" placeholder="password"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <button id="boton-registro" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;">
                    Registrar
                </button>
            </div>
        </form>

    </div>

<script>
    let registro=document.getElementById('boton-registro')
    registro.onclick=function registrar(e){
        e.preventDefault()
        let username=document.getElementById('fusername').value
        let password=document.getElementById('fpassword').value
        let formData = new FormData()
        formData.append('username',username)
        formData.append('password',password)


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
            localStorage.setItem('minijobs-id-usuario',data.data.user.id)
            localStorage.setItem('minijobs-usuario',data.data.user.username)
            localStorage.setItem('minijobs-rol-usuario',data.data.user.ultimo_rol)
            if(data.data.user.ultimo_rol==5){
                location.replace('{{route("home.administrador")}}')
            }else if(data.data.user.ultimo_rol==4){
                location.replace('{{route("home.encargado")}}')
            }else if(data.data.user.ultimo_rol==3){
                location.replace('{{route("home.reclutador")}}')
            }else if(data.data.user.ultimo_rol==2){
                location.replace('{{route("home.profesor")}}')
            }else if(data.data.user.ultimo_rol==1){
                location.replace('{{route("home.alumno")}}')
            }else if(data.data.user.ultimo_rol==0){
                location.replace('{{route("home.sinrol")}}')
            }
        }).catch(error => {
            console.error('Error', error);
        })
    }

</script>
@endsection
