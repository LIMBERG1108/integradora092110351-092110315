<?php
//traer o recolectar las variables de sesion que ya existe
session_start();

//destruir las variables de sesión.
session_destroy();

header("Location: login.php");



?>