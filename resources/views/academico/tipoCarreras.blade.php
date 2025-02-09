@extends('app')

@section('content')
<table id="tabla">
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
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("VER"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        let elementos=node00

        let array=data.data.tipoCarreras

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].nombre))
            node06=document.createElement("td")
            subnode01=document.createTextNode("VER")
            subnode02=document.createElement("a")
            subnode02.appendChild(subnode01)
            referencia='{{$urls["rama"]}}'+'/'+array[i].id
            subnode02.setAttribute('href',referencia)
            node06.appendChild(subnode02)
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node06)

            elementos=node00
        }
        document.getElementById('tabla').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
