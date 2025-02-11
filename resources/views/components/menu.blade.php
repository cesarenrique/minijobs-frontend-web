<div>
    <div style="width:100%; ">
        <ul style="width:100%; ">
            <li><a id="home-link-a" class="active" href="{{route("home")}}">Home</a></li>
            <li id="login-link" style="float: right;"><a href="{{route('login')}}">Login</a></li>
            <li id="registrar-link"  style="float: right;"><a href="{{route('registro')}}">Registro</a></li>
            <li id="nombre-Usuario-link" style="float: right;"><a  id="nombre-Usuario-link-a" href="#about">Username</a></li>
            <li id="rol-link" style="float: right;"><a id="rol-link-a" href="#about">Rol:Anonimo</a></li>
            <li id="logout-link" style="float: right; display: none; "><a id="rol-link-a" href="{{route('logout')}}">Logout</a></li>

        </ul>
    </div>
    <script>
        let loginLink=document.getElementById("login-link");
        let logoutLink=document.getElementById("logout-link");
        let registrarLink=document.getElementById("registrar-link");
        let rolLink=document.getElementById("rol-link");
        let nombreUsuarioLinkA=document.getElementById("nombre-Usuario-link-a");
        let rolLinkA=document.getElementById("rol-link-a");
        let homeLinkA=document.getElementById("home-link-a");
        let nombreUsuarioLink=document.getElementById("nombre-Usuario-link");
        let nombreUsuario= localStorage.getItem('minijobs-usuario')
        let rolUsuario= localStorage.getItem('minijobs-rol-usuario')

        if(nombreUsuario!=null){
            logoutLink.style.display="block";
            loginLink.style.display="none";
            registrarLink.style.display="none";
            nombreUsuarioLinkA.innerHTML=nombreUsuario;
            if(rolUsuario==5){
                rolLinkA.innerHTML="Rol:Administrador";
                homeLinkA.setAttribute("href",'{{route("home.administrador")}}')
            }else if(rolUsuario==4){
                rolLinkA.innerHTML="Rol:Encargado";
                homeLinkA.setAttribute("href",'{{route("home.encargado")}}')
            }else if(rolUsuario==3){
                rolLinkA.innerHTML="Rol:Reclutador";
                homeLinkA.setAttribute("href",'{{route("home.reclutador")}}')
            }else if(rolUsuario==2){
                rolLinkA.innerHTML="Rol:Profesor";
                homeLinkA.setAttribute("href",'{{route("home.reclutador")}}')
            }else if(rolUsuario==1){
                rolLinkA.innerHTML="Rol:Alumno";
                homeLinkA.setAttribute("href",'{{route("home.alumno")}}')
            }else if(rolUsuario==0){
                rolLinkA.innerHTML="Rol:Sin Rol";
                homeLinkA.setAttribute("href",'{{route("home.sinrol")}}')
            }
        }

    </script>
</div>
