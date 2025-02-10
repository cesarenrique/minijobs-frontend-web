@extends('app')

@section('content')
<table id="tabla">
</table>


<div class="grid grid-cols-2 sm:grid-cols-3">
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a id="buscar-anuncios-skill" href="#" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;"><span></span>&nbsp;Buscar Anuncio con este skill</h2>
        </a>
    </div>
    <div  class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a id="buscar-usuarios-skill" href="#" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;"><span></span>&nbsp;Buscar Usuario con este skill</h2>
        </a>
    </div>
</div>
<script>
    let usuarioLogueado=0;
    let nombreUsuario3= localStorage.getItem('minijobs-usuario')
    let rolUsuario3= localStorage.getItem('minijobs-rol-usuario')
    let idUsuario3= localStorage.getItem('minijobs-id-usuario')

    fetch('{{$urls["api"]}}').then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{
        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("TITULO"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("DESCRIPCIOM"))

        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)

        let elementos=node00

        let elem=data.data.skill

        //console.log(array)

        document.getElementById('tabla').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.skill))
        node03=document.createElement("td")
        node03.appendChild(document.createTextNode(elem.descripcion))

        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)

        elementos=node00
        document.getElementById('tabla').appendChild(elementos)



    }).catch(error => {
        console.error('Error', error);
    })

    let buscarUsuariosSkill=document.getElementById('buscar-usuarios-skill');
    let buscarAnunciosSkill=document.getElementById('buscar-anuncios-skill');
    buscarUsuariosSkill.setAttribute('href','{{$urls["usuario"]}}')
    buscarAnunciosSkill.setAttribute('href','{{$urls["anuncio"]}}')
</script>


@endsection
