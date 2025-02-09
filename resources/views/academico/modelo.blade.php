@extends('app')

@section('content')

<form class=""   id="registro" method="POST">

    <div id="formulario-registro-container" class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px; ">

        <div class="bg-blue-400 m-auto" style="width: 80%; padding-top: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">
           <h2 style="margin: 5%; width: 90%;">Carrera Modelo</h2>

           <div class="" style="margin: 5%; width: 90%;">
               <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fnombreAnyoPlanAcademico">Nombre</label>
               <br>
               <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fnombreAnyoPlanAcademico" name="nombreAnyoPlanAcademico" placeholder="Nombre"/>
           </div>
       </div>
   </div>
   <div id="formulario-registro-container2" class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px; ">
        <div class="bg-blue-400 m-auto" style="width: 80%; padding-top: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">
            <h2 style="margin: 5%; width: 90%;">Año Plan Academico</h2>

            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fnombreAnyoPlanAcademico">Nombre</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fnombreAnyoPlanAcademico" name="nombreAnyoPlanAcademico" placeholder="Nombre"/>
            </div>
        </div>
    </div>
    <div id="formulario-registro-container3" class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px; ">
        <div class="bg-blue-400 m-auto" style="width: 80%; padding-top: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">
            <h2 style="margin: 5%; width: 90%;">Asignaturas</h2>

            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura01">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura01" name="asignatura01" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura02">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura02" name="asignatura02" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura03">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura03" name="asignatura03" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura04">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura04" name="asignatura04" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura05">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura05" name="asignatura05" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura06">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura06" name="asignatura06" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura07">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura07" name="asignatura07" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura08">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura08" name="asignatura08" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura09">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura09" name="asignatura09" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <label class="" style="margin: auto; padding-top: 10px; padding-bottom: 10px; " for="fasignatura10">Asignatura</label>
                <br>
                <input class="bg-white " style="width:100%; margin: auto;  padding-top: 10px; padding-bottom: 10px;" type="text"   id="fasignatura10" name="asignatura10" placeholder="Asignatura"/>
            </div>
            <div class="" style="margin: 5%; width: 90%;">
                <button id="boton-registro" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" >
                    Mas Asignaturas
                </button>
            </div>


        </div>
    </div>
    <div id="formulario-registro-container" class="bg-cyan-200" style="width: 90%; margin:5%; padding-top: 50px; padding-bottom: 50px; ">
        <div class="bg-blue-400 m-auto" style="width: 80%; padding-top: 50px; padding-bottom: 50px; margin-top: 50px; margin-bottom: 50px;">
            <h2 style="margin: 5%; width: 90%;">Registro</h2>
            <div class="" style="margin: 5%; width: 90%;">
                <button id="boton-registro" type="submit"  class="bg-slate-400" style="width:100%; margin: auto;  margin-top: 30px; padding-top: 10px; padding-bottom: 10px;" >
                    Registrar
                </button>
            </div>
        </div>
    </div>
</form>

@endsection
