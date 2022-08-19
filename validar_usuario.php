<?php
//crear la variable sesion de forma global
session_start();


//recibir las dos variables: Usuario y Contraseña
//Por el método POST
$usuario_web=$_POST["usuario"];
$pass=$_POST["password"];



//llamar al archivo conexion
include("conexion.php");

$sql = "SELECT * FROM persona WHERE usuario='$usuario_web' AND password='$pass' ";

//echo "mi consulta: ".$sql;
$result = mysqli_query($conn, $sql);


//Si el resultado es mayor a cero, significa que el usuario existe
if (mysqli_num_rows($result) > 0) {
  // output data of each row
    header("Location: registro_cortes.php");
   
    //crear una variable de sesión
    $_SESSION["usuario"]=1;
    //obtener el nombre completo de la persona que inicia sesión
    while($fila=mysqli_fetch_assoc($result))
    {

      //creamos una variable de sesión llamada nombre, que obtiene el nombre completo del usuario
      $_SESSION["nombre"]=$fila['nombre']." ".$fila['apellidos'];
      //agregar una variable de sesión para obtener el tipo de usuario
      $_SESSION["tipo"]=$fila['tipo'];

    }



    //echo "Sesion iniciada correctamente";
} else//Si el resultado es cero, el usuario no existe
{
  //echo "Error al consultar los datos";
  header("Location: login.php");

}

mysqli_close($conn);

?>