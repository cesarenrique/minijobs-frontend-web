@extends('app')

@section('content')
<table id="tabla">

    <script>

    fetch('{{$url}}').then(response =>{
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
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)

        let elementos=node00

        let array=data.data.administradores

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla').appendChild(elementos)
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
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node03)
            node00.appendChild(node04)
            node00.appendChild(node05)
            elementos=node00
        }
        document.getElementById('tabla').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
    </script>
</table>

@endsection
