<?php

//llamar a la conexion con Mysql
include("conexion.php");

//recibir via GET el código o ID
$codigo_cortes=$_GET['codigo'];


$consulta="DELETE FROM cortes WHERE codigo='$codigo_cortes' ";

if (mysqli_query($conn, $consulta)) {
    //se ha llevado con exito la eliminacion y nos direcciona a la tabla de cortes para su visualizacion
    header("Location: cortes.php   ");

  } else {
    echo "Error al tratar de eliminar un corte: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);


?>