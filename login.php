<!DOCTYPE html>
<html>
    <head>
        <title>Inicio Sesion</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>
    
    <body>

    <section class="container m-5 bg-light">

        <div class="container p-5">

            <h1 class="text-center text-muted">Bienvenidos</h1>

            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <img src="img/barber.png" class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5">
                </div>

                <div class="col-lg-8 col-md-6" >
                    <form method="POST" action="validar_usuario.php">
                        <div class="mb-3">
                            <label class="form-label">Usuario</label> 
                            <input type="text" name="usuario" class="form-control" required placeholder="Usuario">      
                        </div>
    
                        <div class="mb-3">
                            <label class="form-label">Contraseña</label> 
                            <input type="password" name="password" class="form-control" required placeholder="Tu contraseña">      
                        </div>
                        <button class="btn btn-success">Entrar</button>
                        
                        
    
                    </form>
                </div>


                
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