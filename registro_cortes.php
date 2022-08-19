<?php
//declara la funcion session_start()
//Para validar si el usuario ya inicio sesión
session_start();

if(isset($_SESSION["usuario"]))
{
    //muestra la página web index.php que redirecciona al login.php
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
                    <h3 class="text-center text-muted">Registro de Cortes</h3>
                    <!--formulario de registro-->
                    <form method="GET" action="recibir.php">
                       <div class="row mb-3">
                            <label class="col-sm-2">Código</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo"  class="form-control" required placeholder="Introduce el código del corte">
                            </div>
                       </div>
                       
                       <div class="row mb-3">
                            <label class="col-sm-2">Descripción</label>
                            <div class="col-sm-10">
                                <input type="text" name="descripcion" class="form-control" placeholder="Nombre del corte">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Precio</label>
                            <div class="col-sm-10">
                                <input type="decimal" name="precio" class="form-control" placeholder="Precio del corte">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2">Observaciones</label>
                            <div class="col-sm-10">
                                <input type="text" name="observaciones" class="form-control" placeholder="Comentarios">
                            </div>
                        </div>

                        <button class="btn btn-success">Registrar</button>
                       
                    </form>
                </div>
                <div class="col-lg-4">
                    <img src="img/barber2.png" width="400px">
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


