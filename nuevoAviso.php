<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Matematicas Turno Matutino</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <script src="https://kit.fontawesome.com/yourcode.js"></script>

        <link rel="stylesheet" href="Style.css">
        <link rel="stylesheet" href="nuevoAviso.css">

        <link rel="stylesheet" href="www/css/generalProfesor.css">
        <link rel="stylesheet" href="www/css/owlcarousel/owl.carousel.min.css" />
        <link rel="stylesheet" href="www/css/owlcarousel/owl.theme.default.css" />
        <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css"/>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>


    </head>
    <body class="bg">
        <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
            <button onclick="w3_close()" class="w3-bar-item w3-large">Cerrar&nbsp;&nbsp;&nbsp;<i class="fas fa-sign-out-alt"></i></button>
            <a href="#" class="w3-bar-item w3-button"><center>Material</center></a>
            <a href="#" class="w3-bar-item w3-button"><center>Módulo para subir archivos</center></a>
        </div>
        <div class="wrapper" id="main">
            <div id="content">
                <nav class="navbar navbar-default">
                    <input type="checkbox" id="check">
                    <label for="check" class="checkbtn">
                        <i class="fas fa-bars"></i>
                    </label> 
                    <span class="text" style="letter-spacing:2px; font-family:Franklin Gothic Medium; color:white; font-weight:550; margin-top: 0px; font-size: 30px;">
                        &nbsp;&nbsp;
                        <img class="img_navbar" src="www/images/CECYT3.png" height="50" weight="50" style="margin-top: -10px;">&nbsp;&nbsp;CECyT 3
                    </span>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <span class="text" style="color:white; font-weight:200; margin-top: -50px; font-size: 20px; font-family:Segoe UI;">
                        Academia de matemáticas
                    </span>
                    <label class="text" style="color:white; font-weight:200; margin-left:250px; margin-top: -50px; font-size: 20px; font-family:Segoe UI;">
                
                    </label>
                    <div class="vl0"></div>
                    <ul>
                        <li>
                            <span class="teacher-icon iconButton material-tooltip-smaller dropbtn" style="margin-right:40px;" data-toggle="tooltip" title="Archivos" data-placement="left" onclick="displayOptions()">
                                <i class="fas fa-file-archive fa-2x dropbtn" style="color: white;"></i>
                                <div id="myDropdown1" class="dropdown-content">
                                    <a href="#material">Nuevo archivo &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-book" style="color: gray;"></i></a>
                                    <a href="#subir">Mi material&nbsp;&nbsp;<i class="fas fa-file-upload" style="color: gray;"></i></a>
                                </div>
                            </span>
                            <p class="" style="color: white;">archivos</p>
                        </li> 
                        <div class="vl1"></div>
                        <li>
                            <span class="graduation-icon iconButton material-tooltip-smaller dropbtn"  style="margin-right: 50px;" data-toggle="tooltip" title="Avisos" data-placement="left" onclick="displayOptions()">
                                <i class="fas fa-comments fa-2x  dropbtn" style="color: white;" ></i> 
                                <div id="myDropdown2" class="dropdown-content">
                                    <a href="#material">Nuevo aviso &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-book" style="color: gray;"></i></a>
                                    <a href="#subir">Todos los avisos&nbsp;&nbsp;<i class="fas fa-file-upload" style="color: gray;"></i></a>
                                </div>
                            </span>
                            <center><p class="" style="color: white;">Avisos</p></center>
                        </li> 
                        <div class="vl2"></div>
                        <li>
                            <span class="teacher-icon iconButton material-tooltip-smaller " style="margin-right:50px;" data-toggle="tooltip" title="Entregas de alumnos" data-placement="bottom" >
                                <i class="fas fa-user-graduate fa-2x " style="color: white;"></i>
                            </span>
                            <p class="" style="color: white;">Entregas</p>
                        </li> 
                        <div class="vl3"></div>
                        <li>
                            <span class="contact-icon iconButton material-tooltip-smaller dropbtn" style="margin-right:50px;" data-toggle="tooltip" title="Cuenta" data-placement="left" onclick="displayOptions()">
                                <i class="fas fa-user-tie fa-2x dropbtn" style="color: white;"></i>
                                <div id="myDropdown4" class="dropdown-content">
                                    <a href="#material">Mi cuenta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-book" style="color: gray;"></i></a>
                                    <a href="#subir">Cerrar sesión&nbsp;&nbsp;<i class="fas fa-file-upload" style="color: gray;"></i></a>
                                </div>
                            </span>
                           <p class="" style="color: white;">Cuenta</p>
                        </li> 
                        <div class="vl4"></div>
                        <img class="img_navbar" src="www/images/ipnBlanco.png" height="50" weight="50" style="margin-top: -50px; margin-left: 80px;">   
                    </ul>
                </nav>
                <!---------------------------------------------------------------------------------------------------------------------------------------->
                
                <div class="background-image">
                    <br />
                    <br />
                    <div class="white-box">   
                        <br />
                        <br />
                        <center>
                            <div class='alert alert-info'>
                                <strong>Información: </strong> Publica un aviso para los alumnos.
                            </div>        
                            <form class='form-horizontal' action='SubirAviso.php' method='post'>   
                                <br/>                     
                                <div class='form-group'> 
                                    <label>Titulo:</label>
                                    <br/>
                                    <input type='text' style='width: 50%;' class='form-control' name="Tit">                 
                                </div>
                                <div class='form-group'>
                                    <label>Contenido del Aviso:</label>
                                    <br/>   
                                    <textarea rows="11" style="width: 50%;" cols="40" name="Aviso"></textarea>
                                </div>            
                                <div class='form-group'>     
                                    <div>
                                        <button style='width: 50%; ' type='submit' class='btn btn-success'>Subir Aviso</button>
                                    </div>
                                </div>    
                            </form>   
                        </center>
                    </div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type='text/javascript'>
    function mostrarPassword(){
        var cambio = document.getElementById('Password');
        if(cambio.type == 'password'){
            cambio.type = 'text';
            $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
        }else{
            cambio.type = 'password';
            $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
        }
    } 
    
    $(document).ready(function () {
        //CheckBox mostrar contraseña
        $('#ShowPassword').click(function () {
        $('#Password').attr('type', $(this).is(':checked') ? 'text' : 'password');
        });
    });
</script>

<script>
    function Afirma(){       
        var sel = document.getElementById('but');
        if(confirm("La carga de tu archivo se esta ejecutando, puede que tarde dependiendo del tamaño de tu archivo o calidad de imagenes, por favor no presiones de nuevo el botón, la carga se esta realizando y se desplegara un anuncio cuando se complete.")){
            sel.disabled = true; 
            document.getElementById("f1").submit();
        }  
    }    
</script>
<script>
    function Afirma(idArchivo){     
        if(confirm("Este archivo es restringido, ten a la mano la clave del profesor")){    
            var Seleccion = document.getElementById('txt_idArchivo');
            Seleccion.value = idArchivo;
            document.getElementById("Formulario").submit();
        }
    }               
</script>
<script>
    $(function () {
        $('.material-tooltip-smaller').tooltip({
        template: '<div class="tooltip md-tooltip"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner"></div></div>'
        });
    })
</script>

        <script>
       function displayOptions() {
        [].slice.call(document.getElementsByClassName("dropdown-content")).map(function(el){
        if (this.event.target.nextElementSibling !== el)
          el.classList.remove("show");
        });
        this.event.target.nextElementSibling.classList.toggle("show");
        }

      // Close the dropdown menu if the user clicks outside of it
      window.onclick = function (event) {
        if (!event.target.matches('.dropbtn')) {
          [].slice.call(document.getElementsByClassName("dropdown-content")).map(function(el){
          el.classList.remove("show");
          });
        }
      }
        </script>

    </body>
</html>