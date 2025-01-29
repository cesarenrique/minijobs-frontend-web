@extends('app')

@section('content')

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
</div>
<script>
    let unavez=0;
    let userid=0;
    let rolEstudiantechoice=1
    let rolProfesorchoice=1
    let rolReclutadorchoice=1
    let rolEncargadochoice=1

    let rolEstudianteh2=document.getElementById('rolEstudianteh2');
    let rolProfesorh2=document.getElementById('rolProfesorh2');
    let rolReclutadorh2=document.getElementById('rolReclutadorh2');
    let rolEncargadoh2=document.getElementById('rolEncargadoh2');
    let texto1=document.createTextNode('Ya Tienes este Rol')
    let texto2=document.createTextNode('Ya Tienes este Rol')
    let texto3=document.createTextNode('Ya Tienes este Rol')
    let texto4=document.createTextNode('Ya Tienes este Rol')
    if(unavez===0){
        fetch('{{$urls["principal"]}}').then(response =>{

            if(!response.ok){
                throw new Error('API no responde');
            }
            return response.json();
        }).then(data =>{
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

            userid=data.data.user.id
            unavez=1
            let formData = new FormData()
            formData.append('user_id',userid)
            let rolEstudiante=document.getElementById('rolEstudiante');
            let rolProfesor=document.getElementById('rolProfesor');
            let rolReclutador=document.getElementById('rolReclutador');
            let rolEncargado=document.getElementById('rolEncargado');
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
        }).catch(error => {
            console.error('Error', error);
        })
    }

</script>

@endsection
