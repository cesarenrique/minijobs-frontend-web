@extends('app')

@section('content')
<h2 class="text-center">Empresa</h2>
<table id="tabla">
</table>
<h2 class="text-center">Cargo</h2>
<table id="tabla2">
</table>
<h2 class="text-center">Anuncio</h2>
<table id="tabla3">
</table>
<h2 class="text-center">Mis Alumnos</h2>
<table id="tabla4">
</table>
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
        document.getElementById('tabla').appendChild(elementos)

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

        document.getElementById('tabla').appendChild(elementos)

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

        document.getElementById('tabla3').appendChild(elementos)

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

        document.getElementById('tabla3').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
    fetch('{{$urls["api2"]}}').then(response =>{
        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{



        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("USERNAME"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("NAME"))
        node04=document.createElement("th")
        node04.appendChild(document.createTextNode("NIF"))
        node05=document.createElement("th")
        node05.appendChild(document.createTextNode("EMAIL"))
        node06=document.createElement("th")
        node06.appendChild(document.createTextNode("VER"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)
        node00.appendChild(node06)
        let elementos=node00

        let array=data.data.users

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla4').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].username))
            node03=document.createElement("td")
            node03.appendChild(document.createTextNode(array[i].name))
            node04=document.createElement("td")
            node04.appendChild(document.createTextNode(array[i].NIF))
            node05=document.createElement("td")
            node05.appendChild(document.createTextNode(array[i].email))
            node06=document.createElement("td")
            subnode01=document.createTextNode("VER")
            subnode02=document.createElement("a")
            subnode02.appendChild(subnode01)
            referencia='{{$urls["user"]}}'+'/'+array[i].id
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
        document.getElementById('tabla4').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
