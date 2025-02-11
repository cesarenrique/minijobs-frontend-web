@extends('app')

@section('content')
<table id="tabla">
</table>
<h2 class="text-center">Evaluaciones</h2>
<table id="tabla4">
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

        let elem=data.data.user

        //console.log(array)

        document.getElementById('tabla').appendChild(elementos)
        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(elem.id))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode(elem.username))
        node03=document.createElement("td")
        node03.appendChild(document.createTextNode(elem.name))
        node04=document.createElement("td")
        node04.appendChild(document.createTextNode(elem.NIF))
        node05=document.createElement("td")
        node05.appendChild(document.createTextNode(elem.email))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)
        elementos=node00
        document.getElementById('tabla').appendChild(elementos)

        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.appendChild(document.createTextNode("CARRERA"))
        node03=document.createElement("th")
        node03.appendChild(document.createTextNode("NOMBRE"))
        node04=document.createElement("th")
        node04.appendChild(document.createTextNode("TIPO"))
        node05=document.createElement("th")
        node05.appendChild(document.createTextNode("NOTA"))
        node06=document.createElement("th")
        node06.appendChild(document.createTextNode("VER"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)
        node00.appendChild(node06)
        elementos=node00

        let array=data.data.evaluaciones
        let array2=data.data.asignaturaCarreras
        let array3=data.data.asignaturas
        let array4=data.data.carreras
        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla4').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array4[i].nombre))
            node03=document.createElement("td")
            node03.appendChild(document.createTextNode(array3[i].nombre))
            node04=document.createElement("td")
            node04.appendChild(document.createTextNode(array2[i].tipo))
            node05=document.createElement("td")
            node05.appendChild(document.createTextNode(array[i].nota))
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node03)
            node00.appendChild(node04)
            node00.appendChild(node05)


            elementos=node00
        }
        document.getElementById('tabla4').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
