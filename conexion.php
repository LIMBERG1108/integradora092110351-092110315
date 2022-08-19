<?php
//otorgamos los datos de la base de datos de nuestro localhost
$servidor="localhost";
$usuario="root";
$password="";
$base="barber";

//crear una variable para la conexión
$conn=mysqli_connect($servidor,$usuario,$password,$base);

//probar la conexión
if(!$conn)
{
    die("Erro al realizar la conexión".mysqli_connect_error());

}

//echo "Conexion realizada correctamente"; este comando se usa para hacer la prueba 


?>