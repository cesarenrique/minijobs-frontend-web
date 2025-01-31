@extends('app')

@section('content')
<table id="tabla">
</table>
<div class="grid grid-cols-2 sm:grid-cols-3">
    <div id="estadoAmistad" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href="#" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;"><span></span>&nbsp;Amistad</h2>
        </a>
    </div>
    <div id="estadoSeguir" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href="#" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;"><span></span>&nbsp;Seguir</h2>
        </a>
    </div>
    <div id="editarPerfil" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Editar</h2>
        </a>
    </div>
    <div id="editarPagos" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Pagos</h2>
        </a>
    </div>
    <div id="editarRoles" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href='{{$urls["roles"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Añadir Roles</h2>
        </a>
    </div>
    <div id="crearEmpresa" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href='{{$urls["roles"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Crear Empresa</h2>
        </a>
    </div>
    <div id="listarEmpresas" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href='{{$urls["roles"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Listar Empresas</h2>
        </a>
    </div>
    <div id="login-perfil-link" class="bg-indigo-200 text-center p-4 " style="height: 20rem; ">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Loguearse</h2>
        </a>
    </div>
    <div id="registro-perfil-link" class="bg-indigo-200 text-center p-4 " style="height: 20rem; ">
        <a href="{{route('registro')}}" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Registrarse</h2>
        </a>
    </div>
</div>
<script>
    let usuarioLogueado=0;

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

        let crearEmpresa=document.getElementById("crearEmpresa");
        let listarEmpresas=document.getElementById("listarEmpresas");
        let editarPerfil=document.getElementById("editarPerfil");
        let editarPagos=document.getElementById("editarPagos");
        let editarRoles=document.getElementById("editarRoles");
        let estadoAmistad=document.getElementById("estadoAmistad");
        let estadoSeguir=document.getElementById("estadoSeguir");
        let loginPerfilLink=document.getElementById("login-perfil-link");
        let registroPerfilLink=document.getElementById("registro-perfil-link");
        if(usuarioLogueado!==0){
            loginPerfilLink.style.display="none";
            registroPerfilLink.style.display="none";
            estadoAmistad.style.display="block";
            estadoSeguir.style.display="block";
            if(usuarioLogueado==data.data.user.id){
                editarPerfil.style.display="block";
                editarPagos.style.display="block";
                editarRoles.style.display="block";
            }
            if(data.data.encargado==1){
                crearEmpresa.style.display="block";
                listarEmpresas.style.display="block";
            }
        }
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
