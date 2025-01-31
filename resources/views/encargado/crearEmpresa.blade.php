@extends('app')

@section('content')
<div class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px;">
    <div class="bg-blue-400 m-auto" style="width: 500px; padding-top: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">


        <h2 style="margin: 5%; width: 90%;">Registro</h2>
        <form class=""   id="registro" method="POST">
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fname">Nombre</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text" id="fname" name="name" placeholder="Nombre"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="femail">Email</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="email" id="femail" name="email" placeholder="email"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fNIF">NIF</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text" id="fNIF" name="NIF" placeholder="NIF"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="ftamanyo">Tamaño</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text" id="ftamanyo" name="tamanyo" placeholder="tamaño"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <button id="boton-registro" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" type="text" id="fusername" name="username" placeholder="Username">
                    Registrar
                </button>
            </div>
        </form>

    </div>

<script>

    let registro=document.getElementById('boton-registro')
    registro.onclick=function registrar(e){
        e.preventDefault()
        let name=document.getElementById('fname').value
        let email=document.getElementById('femail').value
        let nif=document.getElementById('fNIF').value
        let tamanyo=document.getElementById('ftamanyo').value
        let formData = new FormData()
        formData.append('logo',"sonrisas")
        formData.append('nombre',name)
        formData.append('email',email)
        formData.append('NIF',nif)
        formData.append('tamanyo',tamanyo)
        formData.append('encargado_id',{{$encargado_id}})

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
            if(data.data.empresa.id===undefined){
                console.log("error undefinid empresa")
            }
            location.replace("{{route('administrador.empresas')}}")
        }).catch(error => {
            console.error('Error', error);
        })
    }

</script>
@endsection
