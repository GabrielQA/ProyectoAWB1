<?php 
//cuando cerramos sesion en el administrador 
//se nos impide ingresar al administrador a menos de que iniciemos nuevamente
session_start();
session_destroy();
header("Location:index.php");
?>