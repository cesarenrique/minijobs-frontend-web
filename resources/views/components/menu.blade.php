<div>
    <div style="width:90%; margin:5%;">
        <ul>
            <li><a class="active" href="{{route("home")}}">Home</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="#about">About</a></li>
            <li id="login-link" style="float: right;"><a href="#about">Login</a></li>
            <li id="registrar-link"  style="float: right;"><a href="{{route('registro')}}">Registro</a></li>
            <li id="rol-link" style="float: right;"><a href="#about">Rol:Anonimo</a></li>


        </ul>
    </div>
    <script>
        let loginLink=document.getElementById("login-link");
        let registrarLink=document.getElementById("registrar-link");
        let rolLink=document.getElementById("rol-link");

        //loginLink.style.display="none";
        //registrarLink.style.display="none";
    </script>
</div>
