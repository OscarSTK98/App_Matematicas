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
        
        <link rel="stylesheet" href="estilo.css">
        <link rel="stylesheet" href="www/css/general.css">
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
    <body>
      <br />
      <br />
      <center> 
        <h4 class="text-center text-danger">Descarga de material</h4>
        <br />
        <div class="alert alert-danger">
          Aqui podras descargar material de los profesores de la academia de matemáticas
        </div>
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
                  <th scope="col">Archivo</th>
                  <th scope="col">Asignatura</th>
                  <th scope="col">Grupo</th>
                  <th scope="col">Alumno</th>
                  <th scope="col">Descargar</th>
                  <th scope="col">Eliminar</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">PROBLEMARIO DIFERENCIAL.docx</th>
                  <td><span class="label label-trigonometria round" style="">Geometría y trigonometría</span></td>
                  <td>6IM3</td>
                  <td>Adriana Galván Angeles</td>
                  <td><button type="button" class="btn btn-descargar">Descargar</button></td>
                  <td><button type="button" class="btn btn-eliminar">Eliminar</button></td>
                </tr>
              </tbody>
            </table>

             <center> <a href="/"><button type="submit"  style="width: 200px;" class="btn btn-danger">Regresar</button></a></center>
    </body>
</html>