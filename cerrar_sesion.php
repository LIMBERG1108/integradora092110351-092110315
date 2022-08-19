<?php
//llamamos las variables de sesion que ya existen
session_start();

//destruimos las variables de sesines.
session_destroy();

header("Location: login.php");



?>