@extends('app')

@section('content')
<table id="tabla" >
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
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)

        let elementos=node00

        let elem=data.data.empresa

        console.log(elem)

        document.getElementById('tabla').appendChild(elementos)
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

        document.getElementById('tabla').appendChild(elementos)

    }).catch(error => {
        console.error('Error', error);
    })
</script>

<table id="tabla3" >
</table>
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
        let elementos=node00

        let array=data.data.anuncios

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla3').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].titulo))
            node03=document.createElement("td")
            node03.appendChild(document.createTextNode(array[i].descripcion))
            node04=document.createElement("td")
            node04.appendChild(document.createTextNode(array[i].estado))
            node05=document.createElement("td")
            node05.appendChild(document.createTextNode(array[i].inicio))
            node06=document.createElement("td")
            subnode01=document.createTextNode("VER")
            subnode02=document.createElement("a")
            subnode02.appendChild(subnode01)
            referencia='{{$urls["anuncio"]}}'+'/'+array[i].id
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
        document.getElementById('tabla3').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
