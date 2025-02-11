@extends('app')

@section('content')
<div class="perfil-usuario-titulo">
    <h2>Empresa</h2>
</div>
<table id="tabla14">
</table>
<div class="perfil-usuario-titulo">
    <h2>Cargo</h2>
</div>
<table id="tabla10">
</table>
<div class="perfil-usuario-titulo">
    <h2>Anuncio</h2>
</div>
<table id="tabla15">
</table>
<div class="perfil-usuario-titulo">
    <h2>Skills</h2>
</div>
<table id="tabla11">
</table>
<div class="perfil-usuario-titulo">
    <h2>Opciones</h2>
</div>
<div id="boton-registro-container" class="" style="margin: 5%; width: 90%; display: none;">
    <button id="boton-registro" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" type="text" id="fusername" name="username" placeholder="Username">
        Postular
    </button>
</div>
<script>

    fetch('{{$urls["api"]}}').then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{



        let node00=document.createElement("tr")
        let node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        let node02=document.createElement("th")
        node02.appendChild(document.createTextNode("NAME"))
        let node03=document.createElement("th")
        node03.appendChild(document.createTextNode("NIF"))
        let node04=document.createElement("th")
        node04.appendChild(document.createTextNode("TAMAÑO"))
        let node05=document.createElement("th")
        node05.appendChild(document.createTextNode("EMAIL"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)

        let elementos=node00
        document.getElementById('tabla14').appendChild(elementos)

        let elem=data.data.empresa

        console.log(elem)


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

        document.getElementById('tabla14').appendChild(elementos)

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

        document.getElementById('tabla10').appendChild(elementos)

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

        document.getElementById('tabla10').appendChild(elementos)

        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("TITULO"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("DESCRIPCION"))
        node04=document.createElement("th")
        node04.appendChild(document.createTextNode("ESTADO"))
        node05=document.createElement("th")
        node05.appendChild(document.createTextNode("INICIO"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)

        elementos=node00

        document.getElementById('tabla15').appendChild(elementos)

        elem=data.data.anuncio

        console.log(elem)


        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.titulo))
        node03=document.createElement("td")
        node03.appendChild(document.createTextNode(elem.descripcion))
        node04=document.createElement("td")
        node04.appendChild(document.createTextNode(elem.estado))
        node05=document.createElement("td")
        node05.appendChild(document.createTextNode(elem.inicio))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)
        elementos=node00

        document.getElementById('tabla15').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("TITULO"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("DESCRIPCION"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        elementos=node00

        let array=data.data.skills

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla11').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].skill))
            node03=document.createElement("td")
            node03.appendChild(document.createTextNode(array[i].descripcion))
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node03)

            elementos=node00
        }
        document.getElementById('tabla11').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })


    fetch('{{$urls["api5"]}}').then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{

        console.log(data)
        if(data.data.candidato==null){
            document.getElementById('boton-registro-container').style.display="block"
        }

    }).catch(error => {
        console.error('Error', error);
    })

    let registro=document.getElementById('boton-registro')
    registro.onclick=function registrar2(e){
        e.preventDefault()

        let formData = new FormData()
        formData.append('alumno_id',"{{$alumno_id}}")
        formData.append('anuncio_id',"{{$anuncio_id}}")

        fetch('{{$urls["api3"]}}',{
            method: "POST",
            body: formData

        }).then(response =>{

            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
            console.log(data);
            if(data.data.candidato.id===undefined){
                console.log("error undefinid empresa")
            }
            location.replace('{{$urls["postular"]}}'+"/"+{{$alumno_id}}+'/postulados')
        }).catch(error => {
            console.error('Error', error);
        })

    }
</script>


@endsection
