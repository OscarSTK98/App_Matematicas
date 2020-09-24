<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Matematicas Turno Matutino</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="www/css/general.css">
    <link rel="stylesheet" href="www/css/index.css">
    <link rel="stylesheet" href="www/css/owlcarousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="www/css/owlcarousel/owl.theme.default.css" />
    <link rel="stylesheet" href="fontawesome-free-5.14.0-web/css/all.css"/>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
              <img class="img_navbar" src="www/images/ipnBlanco.png" height="50" weight="50" style="margin-top: -30px; margin-left: 95px;">
            </li>
          </ul>  
        </nav>

        <!---------------------------------------------------------------------------------------------------------------------------------------->

      <div class="background-image">
        <a class="index-text-1"><center>Centro de Estudios Científicos y Tecnológicos no. 3<center></a>

        <a class="index-text-2"><center>"Estanislao Ramírez Ruíz"<center></a>

        <a class="index-text-3">¡Bienvenid@ al sitio oficial de la academia de matemáticas turno matutino!<center><center></a>
        <div>
          <img src="www/images/escudo.png" class ="escudo" alt="#" />
        </div>
      </div>
      <div class="line"></div>
        <div class="card-footer text-muted footer__main">
          <div class="row">
            <div class="column mr_web" id="footer1">
              <div class="mb_ fontWeight">
                Instituto Politécnico Nacional
              </div>
              <div class="text_j">
                Academia de Matemáticas Turno Matutino del Centro de Estudios Científicos y Tecnológicos #3 "Estanislao Ramírez Ruíz"
              </div>
            </div>
            <div class="column" id="footer1">
              <div class="mb_ mt_app fontWeight">
                Contacto
              </div>
              <div class="text_j">
              Para información de contacto, dirígase a la opción "Contacto" que se encuentra en la barra de navegación
              </div>
            </div>
          </div>    
          <div class="footer__bottom footer__textAlign">
            © <span class="currentYear"></span> Copyright: <span class="fontWeight">Sistema creado por alumnos de la Escuela Superior de Cómputo.</span>
          </div>
        </div>
      </div>


      <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script>
        $(function () {
          $('.material-tooltip-smaller').tooltip({
            template: '<div class="tooltip md-tooltip"><div class="tooltip-arrow md-arrow"></div><div class="tooltip-inner md-inner"></div></div>'
          });
        })
      </script>
      <script>
          /* When the user clicks on the button, 
          toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }
          // Close the dropdown if the user clicks outside of it
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

      <script>
        function open_bar() {
          document.getElementById("main").style.marginLeft = "10%";
          document.getElementById("mySidebar").style.width = "10%";
          document.getElementById("mySidebar").style.display = "block";
          document.getElementById("sidebarCollapse").style.display = 'none';
        }
        function w3_close() {
          document.getElementById("main").style.marginLeft = "0%";
          document.getElementById("mySidebar").style.display = "none";
          document.getElementById("sidebarCollapse").style.display = "inline-block";
        }
      </script>
    </body>
</html>