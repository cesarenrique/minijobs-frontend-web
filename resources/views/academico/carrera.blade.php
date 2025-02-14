@extends('app')

@section('content')
<div class="perfil-usuario-titulo">
    <h2>Plan Año Academico</h2>
</div>
<table id="tabla22" class="tabla30">
</table>
<div class="perfil-usuario-titulo">
    <h2>Rama Familia Profesional</h2>
</div>
<table id="tabla24" class="tabla30">
</table>
<div class="perfil-usuario-titulo">
    <h2>Grupo de la carrera</h2>
</div>
<table id="tabla25" class="tabla30">
</table>
<div class="perfil-usuario-titulo">
    <h2>Carrera Profesional</h2>
</div>
<table id="tabla26" class="tabla30">
</table>
<div class="perfil-usuario-titulo">
    <h2>Asignaturas</h2>
</div>
<table id="tabla10">
</table>
<script>

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
        node02.appendChild(document.createTextNode("NOMBRE"))

        node00.appendChild(node01)
        node00.appendChild(node02)

        let elementos=node00

        let elem=data.data.anyoPlanAcademico

        //console.log(array)


        document.getElementById('tabla22').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.nombre))

        node00.appendChild(node01)
        node00.appendChild(node02)


        elementos=node00

        document.getElementById('tabla22').appendChild(elementos)


        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("NOMBRE"))

        node00.appendChild(node01)
        node00.appendChild(node02)

        elementos=node00

        elem=data.data.tipoCarrera

        //console.log(array)


        document.getElementById('tabla24').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.nombre))

        node00.appendChild(node01)
        node00.appendChild(node02)


        elementos=node00

        document.getElementById('tabla24').appendChild(elementos)

        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("NOMBRE"))

        node00.appendChild(node01)
        node00.appendChild(node02)

        elementos=node00

        elem=data.data.tipoRamaCarrera

        //console.log(array)


        document.getElementById('tabla25').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.nombre))

        node00.appendChild(node01)
        node00.appendChild(node02)


        elementos=node00

        document.getElementById('tabla25').appendChild(elementos)


        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("NOMBRE"))

        node00.appendChild(node01)
        node00.appendChild(node02)

        elementos=node00

        elem=data.data.carrera

        //console.log(array)


        document.getElementById('tabla26').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.nombre))

        node00.appendChild(node01)
        node00.appendChild(node02)


        elementos=node00

        document.getElementById('tabla26').appendChild(elementos)


        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("NOMBRE"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("VER"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        elementos=node00

        let array=data.data.asignaturas

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla10').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].nombre))
            node06=document.createElement("td")
            subnode01=document.createTextNode("VER ASIGNATURA")
            subnode02=document.createElement("a")
            subnode02.appendChild(subnode01)
            referencia='{{$urls["asignatura"]}}'+'/'+array[i].id
            subnode02.setAttribute('href',referencia)
            node06.appendChild(subnode02)
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node06)

            elementos=node00
        }
        document.getElementById('tabla10').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
