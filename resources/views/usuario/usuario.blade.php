@extends('app')

@section('content')
<div id="titulo10">
    <h2>Perfil Usuario</h2>
</div>
<table id="tabla10">
</table>


<div  id="usuario-roles">
    <div class="perfil-usuario-titulo">
        <h2>Roles</h2>
    </div>
</div>


<div id="tabla11-container" style="width: 100%; display:none;">
    <div class="perfil-usuario-titulo">
        <h2>Skills</h2>
    </div>
    <table id="tabla11">
    </table>

</div>
<div class="perfil-usuario-titulo">
    <h2>Opciones</h2>
</div>
<div class="grid grid-cols-2 sm:grid-cols-3">
    <div id="estadoAmistad" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none;">
        <a href="#" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;"><span></span>&nbsp;Amistad</h2>
        </a>
    </div>
    <div id="estadoSeguir" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none;">
        <a href="#" style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;"><span></span>&nbsp;Seguir</h2>
        </a>
    </div>
    <div id="editarPerfil" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none;">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Editar</h2>
        </a>
    </div>
    <div id="editarPagos" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none;">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Pagos</h2>
        </a>
    </div>
    <div id="editarRoles" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none;">
        <a href='{{$urls["roles"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Añadir Roles</h2>
        </a>
    </div>
    <div id="cambiarRol" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none;">
        <a href='{{$urls["cambioRol"]}}' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Cambiar Rol</h2>
        </a>
    </div>
    <div id="login-perfil-link" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none;">
        <a href='#' style="height: 20rem;">
        <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Loguearse</h2>
        </a>
    </div>
    <div id="registro-perfil-link" class="colorcito-opciones text-center p-4 " style="height: 20rem; display: none; ">
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
    let tabla11Container=document.getElementById('tabla11-container');
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

        document.getElementById('tabla10').appendChild(elementos)
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
        document.getElementById('tabla10').appendChild(elementos)

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
        let entro=0;
        if(data.data.administrador==1){
            div05=document.createElement("div")
            div05.classList.add('perfil-usuario-rol10');
            div06=document.createElement("h2")
            div06.appendChild(document.createTextNode("Administrador"))
            div05.appendChild(div06)
            usuarioRoles.appendChild(div05)
            entro=1
        }
        if(data.data.encargado==1){
            div05=document.createElement("div")
            div05.classList.add('perfil-usuario-rol10');
            div06=document.createElement("h2")
            div06.appendChild(document.createTextNode("Encargado"))
            div05.appendChild(div06)
            usuarioRoles.appendChild(div05)
            entro=1
        }
        if(data.data.reclutador==1){
            div05=document.createElement("div")
            div05.classList.add('perfil-usuario-rol10');
            div06=document.createElement("h2")
            div06.appendChild(document.createTextNode("Reclutador"))
            div05.appendChild(div06)
            usuarioRoles.appendChild(div05)
            entro=1
        }
        if(data.data.alumno==1){
            div05=document.createElement("div")
            div05.classList.add('perfil-usuario-rol10');
            div06=document.createElement("h2")
            div06.appendChild(document.createTextNode("Alumno"))
            div05.appendChild(div06)
            usuarioRoles.appendChild(div05)
            entro=1
        }
        if(data.data.profesor==1){
            div05=document.createElement("div")
            div05.classList.add('perfil-usuario-rol10');
            div06=document.createElement("h2")
            div06.appendChild(document.createTextNode("Profesor"))
            div05.appendChild(div06)
            usuarioRoles.appendChild(div05)
            entro=1
        }
        if(data.data.mentor==1){
            div05=document.createElement("div")
            div05.classList.add('perfil-usuario-rol10');
            div06=document.createElement("h2")
            div06.appendChild(document.createTextNode("Mentor"))
            div05.appendChild(div06)
            usuarioRoles.appendChild(div05)
            entro=1
        }
        if(entro==0){
            div05=document.createElement("div")
            div05.classList.add('perfil-usuario-rol10');
            div06=document.createElement("h2")
            div06.appendChild(document.createTextNode("Sin Rol"))
            div05.appendChild(div06)
            usuarioRoles.appendChild(div05)

        }
        node00=document.createElement("tr")
        node01=document.createElement("th")
        node01.classList.add('tabla11-primero');
        node01.appendChild(document.createTextNode("ID"))
        node02=document.createElement("th")
        node02.classList.add('tabla11-segundo');
        node02.appendChild(document.createTextNode("TITULO"))
        node03=document.createElement("th")
        node03.classList.add('tabla11-tercero');
        node03.appendChild(document.createTextNode("DESCRIPCION"))
        node00.appendChild(node01)
        node00.appendChild(node02)
        node00.appendChild(node03)
        elementos=node00

        let array=data.data.skills

        //console.log(array)
        entro=0;
        for(let i=0;i<array.length;i++){
            if(entro==0){
                tabla11Container.style.display="block";
                entro=1;
            }
            document.getElementById('tabla11').appendChild(elementos)
            node00=document.createElement("tr")
            node01=document.createElement("td")
            node01.classList.add('tabla11-primero');
            node01.appendChild(document.createTextNode(array[i].id))
            node02=document.createElement("td")
            node02.classList.add('tabla11-segundo');
            node02.appendChild(document.createTextNode(array[i].skill))
            node03=document.createElement("td")
            node03.classList.add('tabla11-tercero');
            node03.appendChild(document.createTextNode(array[i].descripcion))
            node00.appendChild(node01)
            node00.appendChild(node02)
            node00.appendChild(node03)

            elementos=node00

        }
        document.getElementById('tabla11').appendChild(elementos)
    }).catch(error => {
        console.error('Error', error);
    })
</script>


@endsection
