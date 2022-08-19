<?php
//declara la funcion session_start()
//Para validar si el usuario ya inicio sesión
session_start();

if(isset($_SESSION["usuario"]))
{
    //muestra la página web index.php
    //cerrar codigo php
?>



<?php
}
else
{
    //regresalo al login.php
    header("Location: login.php");
}


?>


