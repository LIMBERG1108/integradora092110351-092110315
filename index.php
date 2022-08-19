<?php
//declara la funcion session_start()
//Para validar si el usuario ya inicio sesión
session_start();

if(isset($_SESSION["usuario"]))
{
    //muestra la página web index.php
    //cerrar codigo php
?>

<!-- este codigo lo anexamo con el proposito de que al acceder de modo local lo que nos aparezca sea directamente el login-->

<?php
}
else
{
    //regresalo al login.php
    header("Location: login.php");
}


?>


