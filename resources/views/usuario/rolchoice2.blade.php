@extends('app')

@section('content')
<table id="tabla">
</table>
<h2>Escoge tu Rol</h2>
<div class="grid grid-cols-2 sm:grid-cols-4">
    <div class="bg-indigo-200 text-center p-4 " style="height: 15rem;">
        <a id="rolEstudiante" href='#' style="height: 15rem;">
            <h2 id="rolEstudianteh2"></h2>
         <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Estudiante</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 15rem;">
        <a id="rolProfesor" href='#' style="height: 15rem;">
            <h2 id="rolProfesorh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Profesor</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 15rem;">
        <a id="rolReclutador" href='#' style="height: 15rem;">
            <h2 id="rolReclutadorh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Reclutador</h2>
        </a>
    </div>
    <div class="bg-indigo-200 text-center p-4 " style="height: 15rem;">
        <a id="rolEncargado" href='#' style="height: 15rem;">
            <h2 id="rolEncargadoh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Empresario</h2>
        </a>
    </div>
    <div id="rolAdministradorOpcion" class="bg-indigo-200 text-center p-4 " style="height: 15rem; display:none">
        <a id="rolAdministrador" href='#' style="height: 15rem;">
            <h2 id="rolAdministradorh2"></h2>
            <h2 class="text-lg font-sans font-bold" style="margin-top:8rem;">Administrador</h2>
        </a>
    </div>
</div>
<script>
    let nombreUsuario5= localStorage.getItem('minijobs-usuario')
    let rolUsuario5= localStorage.getItem('minijobs-rol-usuario')
    let rolAdministradorOpcion=document.getElementById('rolAdministradorOpcion');
    if(rolUsuario5==5){
        rolAdministradorOpcion.style.display="block";
    }
    let unavez=0;
    let userid=0;
    let rolEstudiantechoice=1
    let rolProfesorchoice=1
    let rolReclutadorchoice=1
    let rolEncargadochoice=1
    let rolAdministradorchoice=1

    let rolEstudianteh2=document.getElementById('rolEstudianteh2');
    let rolProfesorh2=document.getElementById('rolProfesorh2');
    let rolReclutadorh2=document.getElementById('rolReclutadorh2');
    let rolEncargadoh2=document.getElementById('rolEncargadoh2');
    let rolAdministradorh2=document.getElementById('rolAdministradorh2');
    let texto1=document.createTextNode('Ya Tienes este Rol')
    let texto2=document.createTextNode('Ya Tienes este Rol')
    let texto3=document.createTextNode('Ya Tienes este Rol')
    let texto4=document.createTextNode('Ya Tienes este Rol')
    let texto5=document.createTextNode('Ya Tienes este Rol')
    if(unavez===0){
        fetch('{{$urls["principal"]}}').then(response =>{

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
            if(data.data.alumno==1){
                rolEstudianteh2.appendChild(texto1)
                rolEstudiantechoice=0
            }
            if(data.data.profesor==1){
                rolProfesorh2.appendChild(texto2)
                rolProfesorchoice=0
            }
            if(data.data.encargado==1){
                rolEncargadoh2.appendChild(texto3)
                rolEncargadochoice=0
            }
            if(data.data.reclutador==1){
                rolReclutadorh2.appendChild(texto4)
                rolReclutadorchoice=0
            }
            if(data.data.administrador==1){
                rolAdministradorh2.appendChild(texto5)
                rolAdministradorchoice=0
            }

            userid=data.data.user.id
            unavez=1
            let formData = new FormData()
            formData.append('user_id',userid)
            let rolEstudiante=document.getElementById('rolEstudiante');
            let rolProfesor=document.getElementById('rolProfesor');
            let rolReclutador=document.getElementById('rolReclutador');
            let rolEncargado=document.getElementById('rolEncargado');
            let rolAdministrador=document.getElementById('rolAdministrador');
            if(rolEstudiantechoice===1){
                rolEstudiante.onclick=function colocarRolEstudiante(e){
                    e.preventDefault()
                    location.replace('{{$urls["alumno"]."/"}}'+userid.toString())
                }
            }
            if(rolProfesorchoice===1){
                rolProfesor.onclick=function colocarRolProfesor(e){
                    e.preventDefault()
                    location.replace('{{$urls["profesor"]."/"}}'+userid.toString())
                }
            }
            if(rolReclutadorchoice===1){
                rolReclutador.onclick=function colocarRolReclutador(e){
                    e.preventDefault()
                    location.replace('{{$urls["reclutador"]."/"}}'+userid.toString())
                }
            }
            if(rolEncargadochoice===1){
                rolEncargado.onclick=function colocarRolEncargado(e){
                    e.preventDefault()
                    location.replace('{{$urls["encargado"]."/"}}'+userid.toString())
                }
            }
            if(rolAdministradorchoice===1){
                rolAdministrador.onclick=function colocarRolEncargado(e){
                    e.preventDefault()
                    location.replace('{{$urls["administrador"]."/"}}'+userid.toString())
                }
            }
        }).catch(error => {
            console.error('Error', error);
        })
    }

</script>

@endsection
