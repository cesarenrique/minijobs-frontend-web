@extends('app')

@section('content')
<table id="tabla">
</table>
<h2 class="text-center">Roles</h2>
<div class="text-center" id="usuario-roles">

</div>
<table id="tabla4">
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
    <div id="cambiarRol" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href='{{$urls["cambioRol"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Cambiar Rol</h2>
        </a>
    </div>
    <div id="login-perfil-link" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none;">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Loguearse</h2>
        </a>
    </div>
    <div id="registro-perfil-link" class="bg-indigo-200 text-center p-4 " style="height: 20rem; display: none; ">
        <a href="{{route('registro')}}" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Registrarse</h2>
        </a>
    </div>
</div>
<script>
    let usuarioLogueado=0;
    let nombreUsuario3= localStorage.getItem('minijobs-usuario')
    let rolUsuario3= localStorage.getItem('minijobs-rol-usuario')
    let idUsuario3= localStorage.getItem('minijobs-id-usuario')
    let loginPerfilLink11=document.getElementById('login-perfil-link');
    let registroPerfilLink11=document.getElementById('registro-perfil-link');
    if(nombreUsuario3!=null){
        usuarioLogueado=rolUsuario;

    }else{
        loginPerfilLink11.style.display="block";
        registroPerfilLink11.style.display="block";
    }
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
        let cambiarRol=document.getElementById("cambiarRol");
        let estadoAmistad=document.getElementById("estadoAmistad");
        let estadoSeguir=document.getElementById("estadoSeguir");
        let loginPerfilLink=document.getElementById("login-perfil-link");
        let registroPerfilLink=document.getElementById("registro-perfil-link");
        if(usuarioLogueado!==0){
            if(idUsuario3!=data.data.user.id){
                estadoAmistad.style.display="block";
                estadoSeguir.style.display="block";
            }else{
                editarPerfil.style.display="block";
                editarPagos.style.display="block";
                editarRoles.style.display="block";
                cambiarRol.style.display="block";

            }

            if(rolUsuario3==5){
                editarRoles.style.display="block";
            }
        }
        let usuarioRoles=document.getElementById("usuario-roles");

        if(data.data.administrador==1){
            div05=document.createElement("div")
            div05.appendChild(document.createTextNode("administrador"))
            usuarioRoles.appendChild(div05)
        }
        if(data.data.encargado==1){
            div05=document.createElement("div")
            div05.appendChild(document.createTextNode("encargado"))
            usuarioRoles.appendChild(div05)
        }
        if(data.data.reclutador==1){
            div05=document.createElement("div")
            div05.appendChild(document.createTextNode("reclutador"))
            usuarioRoles.appendChild(div05)
        }
        if(data.data.alumno==1){
            div05=document.createElement("div")
            div05.appendChild(document.createTextNode("alumno"))
            usuarioRoles.appendChild(div05)
        }
        if(data.data.profesor==1){
            div05=document.createElement("div")
            div05.appendChild(document.createTextNode("profesor"))
            usuarioRoles.appendChild(div05)
        }
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
        elementos=node00

        let array=data.data.skills

        //console.log(array)

        for(let i=0;i<array.length;i++){
            document.getElementById('tabla4').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.appendChild(document.createTextNode(array[i].skill))
            node03=document.createElement("td")
            node03.appendChild(document.createTextNode(array[i].descripcion))
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node03)

            elementos=node00
        }
        document.getElementById('tabla4').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
