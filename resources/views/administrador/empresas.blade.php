@extends('app')

@section('content')
<div class="perfil-usuario-titulo">
    <h2> Empresas</h2>
</div>
<table id="tabla14">
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
        node02.appendChild(document.createTextNode("NAME"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("NIF"))
        node04=document.createElement("th")
        node04.appendChild(document.createTextNode("TAMAÑO"))
        node05=document.createElement("th")
        node05.appendChild(document.createTextNode("EMAIL"))
        node06=document.createElement("th")
        node06.appendChild(document.createTextNode("OPCIONES"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)
        node00.appendChild(node06)
        let elementos=node00

        let array=data.data.empresas

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla14').appendChild(elementos)
            node00=document.createElement("tr")
            node00.id="referenciar"+i;
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].nombre))
            node03=document.createElement("td")
            node03.appendChild(document.createTextNode(array[i].NIF))
            node04=document.createElement("td")
            node04.appendChild(document.createTextNode(array[i].tamanyo))
            node05=document.createElement("td")
            node05.appendChild(document.createTextNode(array[i].email))
            node06=document.createElement("td")
            subnode01=document.createTextNode("VER EMPRESA")
            subnode02=document.createElement("a")
            subnode02.appendChild(subnode01)
            referencia='{{$urls["empresa"]}}'+'/'+array[i].id
            subnode02.setAttribute('href',referencia)
            node06.appendChild(subnode02)
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node03)
            node00.appendChild(node04)
            node00.appendChild(node05)
            node00.appendChild(node06)
            elementos=node00
        }
        document.getElementById('tabla14').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
