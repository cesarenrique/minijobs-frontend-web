@extends('app')

@section('content')
<table id="tabla">

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
</table>
<div class="grid grid-cols-2 sm:grid-cols-3">
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a href='{{$urls["cargos"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Cargos</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 20rem;">
        <a href='{{$urls["anuncios"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Anuncios</h2>
        </a>
    </div>
</div>
@endsection
