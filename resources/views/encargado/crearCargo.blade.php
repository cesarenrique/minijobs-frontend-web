@extends('app')

@section('content')
<div class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px;">
    <div class="bg-blue-400 m-auto" style="width: 500px; padding-top: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">


        <h2 style="margin: 5%; width: 90%;">Registro</h2>
        <form class=""   id="registro" method="POST">
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="ftitulo">Titulo</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text" id="ftitulo" name="titulo" placeholder="Titulo"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fdescripcion">Descripción</label>
                <br>
                <textarea class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="texto" id="fdescripcion" name="descripcion" placeholder="email">
                </textarea>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <button id="boton-registro" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" type="text" id="fusername" name="username" >
                    Registrar
                </button>
            </div>
        </form>

    </div>
    <div class="" style="margin: 5%; width: 90%;">
        <button id="boton-registro2" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" type="text" id="fusername" name="username" placeholder="Username">
            Vincular Empresa
        </button>
    </div>
<script>
    let cargo_id=0;
    let registro=document.getElementById('boton-registro')
    registro.onclick=function registrar(e){
        e.preventDefault()
        let titulo=document.getElementById('ftitulo').value
        let descripcion=document.getElementById('fdescripcion').value
        let formData = new FormData()
        formData.append('titulo',titulo)
        formData.append('descripcion',descripcion)

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
            cargo_id=data.data.cargo.id
            if(data.data.cargo.id===undefined){
                console.log("error undefinid empresa")
            }
            alert("Cargo Creado")
        }).catch(error => {
            console.error('Error', error);
        })
    }

    let registro2=document.getElementById('boton-registro2')
    registro2.onclick=function registrar2(e){
        e.preventDefault()
        console.log(cargo_id)
        if(cargo_id!=0){
            let formData = new FormData()
            formData.append('cargo_id',cargo_id)
            formData.append('empresa_id',{{$empresa_id}})

            fetch('{{$urls["api2"]}}',{
                method: "POST",
                body: formData

            }).then(response =>{

                if(!response.ok){
                    throw new Error('API no responde');
                }
                return response.json();
            }).then(data =>{
                console.log(data);
                if(data.data.cargoEmpresa.id===undefined){
                    console.log("error undefinid empresa")
                }
                location.replace("{{route('administrador.empresas')}}")
            }).catch(error => {
                console.error('Error', error);
            })
        }
    }
</script>
@endsection
