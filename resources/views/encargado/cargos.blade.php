@extends('app')

@section('content')

<div id="titulo10">
    <h2>Perfiles Profesionales</h2>
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
        node02.appendChild(document.createTextNode("TITULO"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("DESCRIPCION"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        let elementos=node00

        let array=data.data.cargos

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla10').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].titulo))
            node03=document.createElement("td")
            node03.appendChild(document.createTextNode(array[i].descripcion))
            node06=document.createElement("td")
            subnode01=document.createTextNode("VER PERFIL")
            subnode02=document.createElement("a")
            subnode02.appendChild(subnode01)
            referencia='{{$urls["cargo"]}}'+'/'+array[i].id
            subnode02.setAttribute('href',referencia)
            node06.appendChild(subnode02)
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node03)
            node00.appendChild(node06)
            elementos=node00
        }
        document.getElementById('tabla10').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
