@extends('app')

@section('content')
<div id="titulo10">
    <h2>Perfil Usuario</h2>
</div>
<table id="tabla10">
</table>
<div class="grid grid-cols-2 sm:grid-cols-3">
    <div id="listarEmpresas" class="colorcito-opciones text-center p-4 " style="height: 20rem;">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Loguearse</h2>
        </a>
    </div>
    <div id="listarEmpresas" class="colorcito-opciones text-center p-4 " style="height: 20rem;">
        <a href="{{route('registro')}}" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Registrarse</h2>
        </a>
    </div>
</div>
<script>

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

        //console.log(array)

        document.getElementById('tabla10').appendChild(elementos)

        node00=document.createElement("tr")
        node01=document.createElement("td")
        node01.appendChild(document.createTextNode(0))
        node02=document.createElement("td")
        node02.appendChild(document.createTextNode("anonimo"))
        node03=document.createElement("td")
        node03.appendChild(document.createTextNode("anonimo"))
        node04=document.createElement("td")
        node04.appendChild(document.createTextNode("anonimo"))
        node05=document.createElement("td")
        node05.appendChild(document.createTextNode("anonimo"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        node00.appendChild(node04)
        node00.appendChild(node05)
        elementos=node00
        document.getElementById('tabla10').appendChild(elementos)

</script>


@endsection
