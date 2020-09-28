<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Matematicas Turno Matutino</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <link rel="stylesheet" href="www/css/generalProfesor.css">
    <link rel="stylesheet" href="www/css/indexProfesor.css">
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
        <a class="index-text-1"><center>Centro de Estudios Científicos y Tecnológicos no. 3<center></a>

        <a class="index-text-2"><center>"Estanislao Ramírez Ruíz"<center></a>

        <a class="index-text-3">Profesor de academia<center><center></a>
        <div>
          <img src="www/images/P.png" class ="escudo" alt="#" />
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
              Av. Carlos Hank González s/n, Col, Valle de Ecatepec, 55119 Ecatepec de Morelos, Méx.
            </div>
            <div class="text_j">
              Tel. 55 5624 2000
              academia-matematicas@outlook.com
            </div>
          </div>
        </div>    
        <div class="footer__bottom footer__textAlign">
          © <span class="currentYear"></span> Copyright: <span class="fontWeight">Sistema creado por alumnos de la Escuela Superior de Cómputo.</span>
        </div>
      </div>
    </div>
  </div>


        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
       <!-- <script src="www/css/owlcarousel/owl.carousel.min.js"></script>-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--<script src="www/js/index.js"></script>-->
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