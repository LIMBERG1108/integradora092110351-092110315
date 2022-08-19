<?php
//declara la funcion session_start()
//Para validar si el usuario ya inicio sesión
session_start();

if(isset($_SESSION["usuario"]))
{
    //muestra la página web registro_corte.php
    //cerrar codigo php
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            BARBERIA FITNNESS
          
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    <body>
       
        <!--aqui debe ir la barra de navegación includia con cofigo php-->
        <?php
            include("encabezado.php");
        ?>

        <section class="container m-5 bg-light">

           <!--registro de cortes-->
           <div class="row">
                
                <div class="col-lg-8">
                    <h3 class="text-center text-muted">Actualizar Corte</h3>
                    <!--formulario de registro-->
                    <form method="POST" action="actualizar_corte.php">
                       <!-- aca vamos a recibir las variables por Php--> 
                       <?php

                            $codigo=$_GET["codigo"];
                            $descripcion=$_GET["descripcion"];
                            $precio=$_GET["precio"];
                            $observaciones=$_GET["observaciones"];

                       ?>


                       <div class="row mb-3">
                            <label class="col-sm-2">Código</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo"  class="form-control" readonly value="<?php echo $codigo; ?>">
                            </div>
                       </div>
                       
                       <div class="row mb-3">
                            <label class="col-sm-2">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="descripcion" class="form-control" value="<?php echo $descripcion; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Precio</label>
                            <div class="col-sm-10">
                                <input type="number" name="precio" class="form-control" value="<?php echo $precio; ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Observaciones</label>
                            <div class="col-sm-10">
                                <input type="text" name="observaciones" class="form-control" value="<?php echo $observaciones; ?>">
                            </div>
                        </div>

                        <button class="btn btn-success">Actualizar</button>
                       
                    </form>
                </div>
                <div class="col-lg-4">
                    <img src="img/barber3.png" width="400px">
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
    //de no haber iniciado sesion nos regresa al login.php esto como un metodo de seguridad
    header("Location: login.php");
}


?>