<?php

//recibir las variables del formulario y actualizar

//actualizacion de los datos
$codigo=$_POST["codigo"];
$descripcion=$_POST["descripcion"];
$precio=$_POST["precio"];
$observaciones=$_POST["observaciones"];


//llamamos al archivo conexion de nuestra base de datos
include("conexion.php");

//incluimos una consulta que nos permitira actualizar datos
$sql = "UPDATE cortes SET descripcion='$descripcion', precio=$precio, observaciones='$observaciones' WHERE codigo='$codigo' ";

echo "consulta: ".$sql;
if (mysqli_query($conn, $sql)) {
  
  header("Location: cortes.php");
} else {
  echo "Error al modificar un campo: " . mysqli_error($conn);
}

mysqli_close($conn);



?>