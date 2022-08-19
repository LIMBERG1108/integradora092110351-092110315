<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        
                        <img src="img/logo.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                        BARBER FITNNESS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul  class="navbar-nav me-auto">
                            <li  class="nav-item"><a class="nav-link " href="registro_cortes.php">Registro de Cortes</a></li>
                            <li  class="nav-item"><a class="nav-link " href="cortes.php">Cortes</a></li>
                            
                            <?php
                                //validar si existe la sesión
                                if(isset($_SESSION["usuario"]))
                                {
                                    //existe la sesion
                                    echo '<li  class="nav-item"><a class="nav-link " href="cerrar_sesion.php">Cerrar sesión</a></li>';
                                }
                                else
                                {
                                    //no existe la sesion
                                    echo ' <li  class="nav-item"><a class="nav-link " href="login.php">Cerrar Sesion</a></li>';
                                }

                            ?>
                            
                           
                        </ul>
                          <!-- Colocar el nombre del usuario que inicio sesión-->          
                          <span class="navbar-text">
                            <?php
                            echo "Bienvenido: ".$_SESSION["nombre"];
                            ?>
                        </span>
              
                    </div>  

                </div>

                
            </nav>
        </header>