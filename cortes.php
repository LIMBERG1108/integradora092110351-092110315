<?php
//declara la funcion session_start()
//Para validar si el usuario ya inicio sesión
session_start();

if(isset($_SESSION["usuario"]))
{
    //muestra la página web index.php
    //cerrar codigo php
?>
<!--Aquí vamos a pegar todo el codigo HTML -->


<!DOCTYPE html>
<html>
    <head>
        <title>
            BARBER FITNNESS
          
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
       
        <!--aqui debe ir la barra de navegación -->
        <?php
            include("encabezado.php");
        ?>



        <section class="container m-5 bg-light">

           <!--registro de platillos-->
           <div class="row">
                
                <div class="col-lg-8">
                    <h3 class="text-center text-muted">Listado de Cortes</h3>
                    
                    <!-- busqueda por un campo -->
                    <form method="GET" action="#" class="m-4">
                        <input class="form-control" type="search" name="condicion" placeholder="Busqueda por descripción">
                    </form>
                 
                    <!--tabla con los platillos disponibles-->
                    <table class="table">
                        <tr>
                            <td>Código</td>
                            <td>Descripción</td>
                            <td>Precio</td>
                            <td>Observaciones</td>
                            <td>Opciones</td>

                            <?php
                            if($_SESSION["tipo"]==1){
                                echo "<td>Opciones</td>";
                            }
                            ?>
                        </tr>
                       
                        <?php
                            include("conexion.php");

                            if(isset($_GET["condicion"]))
                            {
                                //busqueda con la condicion
                                $condicion=$_GET["condicion"];
                                $consulta="SELECT * FROM cortes where descripcion like '%$condicion%' "; 
                            }
                            else
                            {
                                //muestra todos los registros de la tabla
                                $consulta="SELECT * FROM cortes";
                            }
                            
                            
                           
                             

                           

                            $resultado=mysqli_query($conn,$consulta);
                            if(mysqli_num_rows($resultado)>0)
                            {
                                while($fila=mysqli_fetch_assoc($resultado))
                                {
                                    echo "<tr>";
                                    echo "<td>".$fila['codigo']."</td>";
                                    echo "<td>".$fila['descripcion']."</td>";
                                    echo "<td>".$fila['precio']."</td>";
                                    echo "<td>".$fila['observaciones']."</td>";
                                    //echo "<td> <a class='btn btn-danger' href='eliminar_platillo.php?codigo=".$fila['codigo']."'>Eliminar</a> </td>";
                                    //echo "<td><a class='btn btn-success' href='modificar_platillo.php?codigo=".$fila['codigo']."&descripcion=".$fila['descripcion']."&precio=".$fila['precio']."&observaciones=".$fila['observaciones']."'>Modificar</a></td>";

                                    //parte modificada
                                    if($_SESSION["tipo"]==1) {
                                        echo "<td> <a class='btn btn-danger' href='eliminar_corte.php?codigo=".$fila['codigo']."'>eliminar</a> </td>";
                                        echo "<td> <a class='btn btn-success' href='modificar_corte.php?codigo=".$fila['codigo']."&descripcion=".$fila['descripcion']."&precio=".$fila['precio']."&observaciones=".$fila['observaciones']."'>Modificar</a></td>";
                                    } else {
                                        //invitado
                                    }

                                }
                            }
                            else
                            {
                                echo "Sin resultados";
                            }

                        ?>


                    </table>
                    
                </div>
                <div class="col-lg-4">
                    <img src="img/cortes.png" width="400px">
                </div>
                
            </div>




        </section>
        <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
    <!-- Copyright -->
    <div class="text-white mb-3 mb-md-0">
      Copyright © 2022. Todos los Derechos Reservados.
    </div>
    <!-- Copyright -->

    <!-- Right -->
    <div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>
    <!-- Right -->
  </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
</html>



<?php
}
else
{
    //regresalo al login.php
    header("Location: login.php");
}


?>


