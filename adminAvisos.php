<!DOCTYPE html>
<html>
     <head>
        <meta charset="UTF-8">
        <title>Inicio de Sesión</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../../Style.css">
        <link rel="stylesheet" href="estilo.css">
    </head>

    <script>
        function Afirma(idArchivo){
         
            if(confirm("Este archivo es restringido, ten a la mano la clave del profesor")){
        
                var Seleccion = document.getElementById('txt_idArchivo');
                Seleccion.value = idArchivo;

                document.getElementById("Formulario").submit();
            }
        }               
    </script>

      <br />
      <br />
   
      <center> 
          <h4 class="text-center text-danger">Administración de archivos subidos</h4>
          <br />
      </center>
    
    <div id="accordion">

    @php($i = 0);

        @foreach($Materiales as $item)
    
        <div class="card">
        
        <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapse{{$i}}">
   

      <table class="table table-striped table-responsive-md btn-table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Título</th>
            <th scope="col">Contenido</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>

        <tbody>
          <tr>
                <th scope="row">CURSOS DE RECUPERACIÓN</th>
                <td>A todos los alumnos que están inscritos en los cursos de recuperación se les informa que los contactos de los profesores´estarán publicados en la página oficial del CECyT 3.</td>
                <td><button type="button" class="btn btn-eliminar">Eliminar</button></td>
          </tr>
        </tbody>
      </table>

       <center> <a href="/"><button type="submit"  style="width: 200px;" class="btn btn-danger">Regresar</button></a></center>


    </body>
</html>