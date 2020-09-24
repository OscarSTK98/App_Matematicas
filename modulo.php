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
        <link rel="stylesheet" href="modulo.css">
        <link rel="stylesheet" href="www/css/general.css">
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
        <nav class="navbar navbar-default">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>  
            <label class="text" style="letter-spacing:2px; font-family:Franklin Gothic Medium; color:white; font-weight:550; margin-top: 0px; font-size: 30px;">
                &nbsp;&nbsp;
                <img class="img_navbar1" src="www/images/CECYT3.png" height="50" weight="50" style="margin-top: -10px;">&nbsp;&nbsp;CECyT 3
            </label>
            &nbsp;
            <label class="text academia" style="color:white; font-weight:200; margin-top: -50px; font-size: 20px; font-family:Segoe UI;">
                Academia de matemáticas
            </label>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <label class="text" style="color:white; font-weight:200; margin-left:300px; margin-top: -50px; font-size: 20px; font-family:Segoe UI;">  
            </label>
            <div class="vl1"></div>
            <ul>
            <li>
                <span class="graduation-icon iconButton material-tooltip-smaller dropbtn"  style="margin-right:38px;" data-toggle="tooltip" title="Opciones de alumno" data-placement="left" onclick="myFunction()">
                    <center><i class="fas fa-graduation-cap fa-lg dropbtn" style="color: white;" ></i> </center>
                    <p class="dropbtn" style="color: white;">alumno</p>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#material">material &nbsp;&nbsp;<i class="fas fa-book" style="color: gray;"></i></a>
                        <a href="#subir">Módulo para subir archivos&nbsp;&nbsp;<i class="fas fa-file-upload" style="color: gray;"></i></a>
                    </div>
                  </span>
            </li>
            <div class="vl2"></div>
            <li>
                <span class="teacher-icon iconButton material-tooltip-smaller " style="margin-right:38px;" data-toggle="tooltip" title="Iniciar sesión como profesor" data-placement="bottom" >
                    <center><i class="fas fa-chalkboard-teacher fa-lg" style="color: white;"></i></center>
                    <p style="color: white;">profesor</p>
                </span>
            </li>
            <div class="vl3"></div>
            <li>
                <span class="contact-icon iconButton material-tooltip-smaller" style="margin-right:38px;" data-toggle="tooltip" title="Contacto" data-placement="bottom" >
                    <center><i class="fas fa-tty fa-lg" style="color: white;"></i><center>
                    <p style="color: white;">contacto</p>
                </span>
            </li>
            <div class="vl4"></div>
            <li>
                <img class="img_navbar" src="www/images/ipnBlanco.png" height="50" weight="50" style="margin-top: -30px; margin-left: 95px;"></li>
            </ul>  
        </nav>
                <!---------------------------------------------------------------------------------------------------------------------------------------->
                
        <div class="background-image">
            </br>
            <div class="white-box">
                <center>
                </br>
                </br>
                <div class='alert alert-warning'>
                    <strong>Información: </strong> Módulo provisional para súbir archivos debido a la contingencia COVID-19.
                </div>
                <form class='form-horizontal' action='CargaAlumno.php' method='post' name='f1' id='f1' enctype='multipart/form-data'>
                <br />      
                <div class='form-group'>
                    <label class="encabezado-cuadro-texto">Asignatura:</label>                
                    <br/>                
                    <select name='Asignatura' style='width: 50%;' >
                        <option value='Algebra'>Álgebra</option>
                        <option value='Geometria y Trigonometria'>Geometría y Trigonometría</option>
                        <option value='Geometria Analítica'>Geometría Analítica</option>
                        <option value='Calculo Diferencial'>Cálculo Diferencial</option>
                        <option value='Calculo Integral'>Cálculo Integral</option>
                        <option value='Probabilidad y Estadística'>Probabilidad y Estadística</option>
                    </select>
                </div>
                <div class='form-group'>
                    <label class="encabezado-cuadro-texto">Grupo:</label>
                    <div>
                        <input type='text' style='width: 50%;' class='form-control' id='Grupo' required name='Grupo' placeholder='Ejemplo: 2IM7'>
                    </div>
                </div>
                <div class='form-group'>
                    <input type='text' value='$id' name='idP' hidden>
                    <label class="encabezado-cuadro-texto">Nombre del alumno:</label>
                    <div>
                        <input type='text' style='width: 50%;' class='form-control' id='Nombre' required name='Nombre' >
                    </div>
                </div>
                <div class='form-group'>
                    <label class="encabezado-cuadro-texto">Contraseña:</label>
                    <div> 
                        <input type='password' style='width: 50%;' class='form-control' id='Password' required name='Password'>
                    </div>  
                    <br>
                    <div class='input-group-append'> 
                        <button id='show_password' class='btn btn-primary' type='button' onclick='mostrarPassword()'> Mostrar Clave </button>
                    </div>
                </div>
                <div class='alert alert-warning' style='width: 50%; '>                    
                    La <strong >contraseña</strong> debe ser proporcionada por tu profesor para que puedas subir un archivo<strong>
                </div>
                <div class='form-group'>
                    <label class="encabezado-cuadro-texto">Archivo:</label>
                    <div> 
                        <input type='file' style='width: 50%;' class='form-control' id='Archivo' name='Archivo'>
                    </div>
                </div>
                <br >    
                <div class='alert alert-warning'>
                    <strong>Atención: </strong> Si tu archivo pesa más de 10 MB considera bajarle la calidad de imagen, ya que tardará en subirse.
                </div>
                <div class='form-group'>     
                    <div>
                        <button style='width: 200px; ' onclick='Afirma()' id='but' class='btn btn-success'>Subir Archivo</button>
                    </div>
                </div>   
            </form>  
        </center>




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
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
    }
    window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
      }
    }
</script>

    </body>
</html>