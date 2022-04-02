<!----- CODIGO HTML NATALIA HOYOS Y LOGICA DE LA BUSQUEDA  LEANDRO AMADO ROJAS---->
<?php header ('Content-type: text/html; charset=utf-8'); ?>
<!DOCTYPE html>
<html>
    <HEAD>
        <meta charset="utf-8">
        <title>Empleados</title>
        <!-- apartado para la carga de depandencias -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
        <link rel="stylesheet"  type="text/css" href="lib\css\estilos.css" >
        <!-- apartado para cargar script -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.15.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js//bootstrap.min.js"></script>
        <!--script para detectar anotaciones de los botenes -->
       <script>
            $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();    
            });
        </script>   
    </HEAD>
    <body>
    <div class="wrapper">
        <div class="container-fliud">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 md-3 clearfix">
                        <h2 class="pull-left">Empleados</h2>
                        <a href="paginas/crear.php"  class="btn btn-primary pull-right ">
                            <i class="fa fa-plus mr-2"></i>Crear empleado
                        </a>
                    </div>
                </div>
            </div>
             <!-- BUSQUEDA DE EL EMPLEADOS CODIGO HTML -->
            <div class="card-search">
              <p class="black paragraph font-semibold m-0 mb-1">Buscador</p>
              <div class="form-row">
                  <div class="form-group col-md-6">
                      <div class="d-flex">
                          <input class="form-control search-input" type="search"
                              placeholder="Busque por cedula del empleado" aria-label="Buscar" id="nombreEmpleado"  size="4" />
                          <button class="button-secondary" (click)="buscar()" type="submit">
                              <i class="align-middle material-icons ">Buscar</i>
                          </button>
                      </div>
                   </div>
              </div>
            </div> 
            <?php
        //archivo de coneccion
        require_once "lib/config/conexion.php";
        $sql="SELECT * FROM `empleados`";
        if ($result=mysqli_query($link,$sql)) {
          if (mysqli_num_rows($result)>0) {  
            echo '<table class="table table-sm table-bordered table-striped">';
            echo '<thead>';
            echo '<tr>';
                  echo '<th>Cedula</th>';
                  echo '<th>Nombre</th>';
                  echo '<th>Nacimiento</th>';
                  echo '<th>Ingreso</th>';
                  echo '<th>Dirección</th>';
                  echo '<th>Fijo</th>';
                  echo '<th>Movil</th>';
                  echo '<th>Email</th>';
                  echo '<th>Acciones</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
             while ($row=mysqli_fetch_array($result)) {
                 echo"<tr>";
                 echo"<td fs-6>".$row['Cedula']."</th>";
                 echo"<td fs-6>".$row['Nombre']." ".$row['Apelllido']."</th>";
                 echo"<td fs-6>".$row['FechaNacimiento']."</th>";
                 echo"<td fs-6>".$row['FechaIngreso']."</th>";
                 echo"<td fs-6>".$row['Direccion']."</th>";
                 echo"<td fs-6>".$row['Fijo']."</th>";
                 echo"<td fs-6>".$row['Movil']."</th>";
                 echo"<td fs-6>".$row['Email']."</th>";
                 echo"<td fs-6";
                 echo'<a href="paginas\editar.php?id='.$row['IdEmpleado'].'" class="mr-3" title="Editar"
                 data-toggle="tooltip"><span class=""></span> </a>';

                 echo'<a href="paginas\editar.php?id='.$row['IdEmpleado'].'" class="mr-2" title="Editar"
                 data-toggle="tooltip"><span class="fa fa-pencil"></span> </a>';
                 echo'<a href="paginas\eliminar.php?id='.$row['IdEmpleado'].'" class="mr-2" title="Eliminar"
                 data-toggle="tooltip"><span class="fa fa-trash"></span> </a>';
                 
                 echo"</td>";
                 echo"</tr>";
             }
          }   
         }
         echo '</tbody>';
         echo '</table>';
         mysqli_close($link);
        ?>              
        </div>
    </div> 

       
    </body>
      <!----- CODIGO HTML PIE DE PAGUINA  ---->
    <footer>
      <div class="card-footer text-muted">
         <div class="card-footer bg-transparent border-success">
            <h2>Grupo 3</h2>
            <h6>JOHN FREDY BEDOYA, JUAN GABRIEL RIVERA TAMAYO, LEANDRO AMADO ROJAS, MANUELA VILLEGAS Y NATALIA HOYOS DURANGO</h6>
         </div>    
      </div>
    </footer>
</html>