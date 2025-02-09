@extends('app')

@section('content')
<h2 class="text-center">Empresa del Anuncio</h2>
<table id="tabla4">
</table>
<h2 class="text-center">Cargo para el Anuncio</h2>
<table id="tabla2">
</table>

<div id="formulario-registro-container" class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px; display: none;">
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
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="festado">Estado</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="number" id="festado" name="estado" placeholder="1"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="finicio">Fecha Inicio Publicacion</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="date" data-data-format="YYYY-MM-DD" id="finicio" name="inicio" placeholder="Titulo"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <button id="boton-registro" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" type="text" id="fusername" name="username" >
                    Registrar
                </button>
            </div>
        </form>

    </div>
</div>
<script>
     fetch('{{$urls["api3"]}}').then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{



        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("NAME"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("NIF"))
        node04=document.createElement("th")
        node04.appendChild(document.createTextNode("TAMAÑO"))
        node05=document.createElement("th")
        node05.appendChild(document.createTextNode("EMAIL"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)

        let elementos=node00

        let elem=data.data.empresa

        console.log(elem)

        document.getElementById('tabla4').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.nombre))
        node03=document.createElement("td")
        node03.appendChild(document.createTextNode(elem.NIF))
        node04=document.createElement("td")
        node04.appendChild(document.createTextNode(elem.tamanyo))
        node05=document.createElement("td")
        node05.appendChild(document.createTextNode(elem.email))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)
        elementos=node00

        document.getElementById('tabla4').appendChild(elementos)

    }).catch(error => {
        console.error('Error', error);
    })
    fetch('{{$urls["api4"]}}').then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{


        elem=data.data.cargo

        console.log(elem)


        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("TITULO"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("DESCRIPCION"))
        node04=document.createElement("th")
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)


        elementos=node00

        document.getElementById('tabla2').appendChild(elementos)

        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.titulo))
        node03=document.createElement("td")
        node03.appendChild(document.createTextNode(elem.descripcion))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)

        elementos=node00

        document.getElementById('tabla2').appendChild(elementos)


    }).catch(error => {
        console.error('Error', error);
    })

    let idCargoEmpresa=0;
    fetch('{{$urls["api"]}}').then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{

        console.log(data)
        idCargoEmpresa=data.data.cargoEmpresa.id
        document.getElementById('formulario-registro-container').style.display="block"

    }).catch(error => {
        console.error('Error', error);
    })

    let cargo_id=0;
    let registro=document.getElementById('boton-registro')
    registro.onclick=function registrar(e){
        e.preventDefault()
        let titulo=document.getElementById('ftitulo').value
        let descripcion=document.getElementById('fdescripcion').value
        let estado=document.getElementById('festado').value
        let inicio=document.getElementById('finicio').value
        let formData = new FormData()
        formData.append('titulo',titulo)
        formData.append('descripcion',descripcion)
        formData.append('estado',estado)
        formData.append('inicio',inicio)
        formData.append('cargo_empresa_id',idCargoEmpresa)
        formData.append('reclutador_id',"{{$reclutador_id}}")


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
            location.replace('{{route("anuncios")}}');
        }).catch(error => {
            console.error('Error', error);
        })
    }

</script>
@endsection
