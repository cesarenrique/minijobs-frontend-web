@extends('app')

@section('content')
<table id="tabla">
</table>
<h2>Escoge tu Rol</h2>
<div class="grid grid-cols-2 sm:grid-cols-4">
    <div id="rolEstudianteContainer" class="colorcito-opciones text-center p-4 " style="height: 15rem;  display:none; ">
        <a id="rolEstudiante" href='#' style="height: 15rem;">
            <h2 id="rolEstudianteh2"></h2>
         <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Estudiante</h2>
        </a>
    </div>
    <div id="rolProfesorContainer" class="colorcito-opciones text-center p-4 " style="height: 15rem;  display:none; ">
        <a id="rolProfesor" href='#' style="height: 15rem;">
            <h2 id="rolProfesorh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Profesor</h2>
        </a>
    </div>
    <div id="rolReclutadorContainer" class="colorcito-opciones text-center p-4 " style="height: 15rem;  display:none; ">
        <a id="rolReclutador" href='#' style="height: 15rem;">
            <h2 id="rolReclutadorh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Reclutador</h2>
        </a>
    </div>
    <div id="rolEncargadoContainer" class="colorcito-opciones text-center p-4 " style="height: 15rem;  display:none; ">
        <a id="rolEncargado" href='#' style="height: 15rem;">
            <h2 id="rolEncargadoh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Empresario</h2>
        </a>
    </div>
    <div id="rolAdministradorContainer" class="colorcito-opciones text-center p-4 " style="height: 15rem; display:none; ">
        <a id="rolAdministrador" href='#' style="height: 15rem;">
            <h2 id="rolAdministradorh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Administrador</h2>
        </a>
    </div>
</div>
<script>
    let nombreUsuario5= localStorage.getItem('minijobs-usuario')
    let rolUsuario5= localStorage.getItem('minijobs-rol-usuario')
    let rolAdministradorOpcion=document.getElementById('rolAdministradorContainer');
    if(rolUsuario5==5){
        rolAdministradorOpcion.style.display="block";
    }

    let userid=0;
    let rolEstudiantechoice=1
    let rolProfesorchoice=1
    let rolReclutadorchoice=1
    let rolEncargadochoice=1
    let rolAdministradorchoice=1

    let rolEstudiante=document.getElementById('rolEstudianteContainer');
    let rolProfesor=document.getElementById('rolProfesorContainer');
    let rolReclutador=document.getElementById('rolReclutadorContainer');
    let rolEncargado=document.getElementById('rolEncargadoContainer');
    let rolAdministrador=document.getElementById('rolAdministradorContainer');


    fetch('{{$urls["principal"]}}').then(response =>{

        if(!response.ok){
            throw new Error('API no responde');
        }
        return response.json();
    }).then(data =>{
        console.log(data)
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
        if(data.data.alumno==1){
            rolEstudiante.style.display="block";
            rolEstudiantechoice=0
        }
        if(data.data.profesor==1){
            rolProfesor.style.display="block";
            rolProfesorchoice=0
        }

        if(data.data.encargado==1){
            rolEncargado.style.display="block";
            console.log("funciona");
            rolEncargadochoice=0
        }
        if(data.data.reclutador==1){
            rolReclutador.style.display="block";
            rolReclutadorchoice=0
        }
        if(data.data.administrador==1){
            rolAdministrador.style.display="block";
            rolAdministradorchoice=0
        }

        userid=data.data.user.id
        if(data.data.user.ultimo_rol==1){
            document.getElementById('rolEstudianteh2').appendChild(document.createTextNode("Rol Activo"));
        }else if(data.data.user.ultimo_rol==2){
            document.getElementById('rolProfesorh2').appendChild(document.createTextNode("Rol Activo"));
        }else if(data.data.user.ultimo_rol==3){
            document.getElementById('rolReclutadorh2').appendChild(document.createTextNode("Rol Activo"));
        }else if(data.data.user.ultimo_rol==4){
            document.getElementById('rolEncargadoh2').appendChild(document.createTextNode("Rol Activo"));
        }else if(data.data.user.ultimo_rol==5){
            document.getElementById('rolAdministradorh2').appendChild(document.createTextNode("Rol Activo"));
        }
    }).catch(error => {
        console.error('Error', error);
    })



    let rolEstudiante2=document.getElementById('rolEstudiante');
    let rolProfesor2=document.getElementById('rolProfesor');
    let rolReclutador2=document.getElementById('rolReclutador');
    let rolEncargado2=document.getElementById('rolEncargado');
    let rolAdministrador2=document.getElementById('rolAdministrador');

    rolEstudiante2.onclick=function estudiante(e){
        e.preventDefault();
        fetch('{{$urls["api2"]}}'+'/1').then(response =>{
            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
            localStorage.setItem('minijobs-rol-usuario',data.data.user.ultimo_rol)
            location.reload();
        }).catch(error => {
            console.error('Error', error);
        })
    }

    rolProfesor2.onclick=function profesor(e){
        e.preventDefault();
        fetch('{{$urls["api2"]}}'+'/2').then(response =>{
            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
            localStorage.setItem('minijobs-rol-usuario',data.data.user.ultimo_rol)
            location.reload();
        }).catch(error => {
            console.error('Error', error);
        })
    }

    rolReclutador2.onclick=function reclutador(e){
        e.preventDefault();
        fetch('{{$urls["api2"]}}'+'/3').then(response =>{
            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
            localStorage.setItem('minijobs-rol-usuario',data.data.user.ultimo_rol)
            location.reload();
        }).catch(error => {
            console.error('Error', error);
        })
    }

    rolEncargado2.onclick=function encargado(e){
        e.preventDefault();
        fetch('{{$urls["api2"]}}'+'/4').then(response =>{
            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
            localStorage.setItem('minijobs-rol-usuario',data.data.user.ultimo_rol)
            location.reload();
        }).catch(error => {
            console.error('Error', error);
        })
    }
    rolAdministrador2.onclick=function administrador(e){
        e.preventDefault();
        fetch('{{$urls["api2"]}}'+'/5').then(response =>{
            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
            localStorage.setItem('minijobs-rol-usuario',data.data.user.ultimo_rol)
            location.reload();
        }).catch(error => {
            console.error('Error', error);
        })
    }

</script>

@endsection
