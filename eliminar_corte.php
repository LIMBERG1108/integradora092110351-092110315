<?php

//llamar a la conexion con Mysql
include("conexion.php");

//recibir via GET e código o ID
$codigo_cortes=$_GET['codigo'];


$consulta="DELETE FROM cortes WHERE codigo='$codigo_cortes' ";

if (mysqli_query($conn, $consulta)) {
    //echo "Platillo eliminado correctamente";
    //regresar a la pagina principal
    header("Location: cortes.php   ");

  } else {
    echo "Error al tratar de eliminar un corte: " . mysqli_error($conn);
  }
  
  mysqli_close($conn);


?>