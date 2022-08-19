<?php

//recibir las variables del formulario y actualizar

//echo "Aca voy a actualizar los datos";
$codigo=$_POST["codigo"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$observaciones=$_POST["observaciones"];
//echo "valor del codigo".$codigo;

//llamar al archivo conexión
include("conexion.php");

$sql = "UPDATE cortes SET descripcion='$descripcion', precio=$precio, observaciones='$observaciones' WHERE codigo='$codigo' ";

echo "consulta: ".$sql;
if (mysqli_query($conn, $sql)) {
  //echo "Record updated successfully";
  header("Location: cortes.php");
} else {
  echo "Error al modificar un campo: " . mysqli_error($conn);
}

mysqli_close($conn);



?>