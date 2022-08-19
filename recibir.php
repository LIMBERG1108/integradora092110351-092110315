<?php
//aqui se almacenara toda la informacion que el usuario coloque
echo "<h2>Recibiendo informacion del formulario de registro</h2>";

$codigo=$_GET["codigo"];
echo "El código del producto escrito es:".$codigo."<br>";
$descripcion=$_GET['descripcion'];
echo "La descripción es:".$descripcion."<br>";
$precio=$_GET['precio'];
echo "El precio es:".$precio."<br>";
$observaciones=$_GET['observaciones'];
echo "Las observaciones son:".$observaciones;
$ine="123456789";

//incluimos nuestra conexion de mysql
include("conexion.php");

$sql="INSERT INTO cortes VALUES('$codigo','$descripcion',$precio,'$observaciones','123456')";

//condicion para evaluar si se registro correctamente el corte y redireccionarnos al archivo cortes.php
if(mysqli_query($conn,$sql))
{
    echo "corte registrado correctamente";
    header("Location: cortes.php");
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}


?>