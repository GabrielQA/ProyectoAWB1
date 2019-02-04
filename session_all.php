<?php
session_start();

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

if($usuario=="Admin" and $contraseña=="123"){
    header("Location:admin.php");       
}else{
    echo"Usuario"." ";
    echo $usuario;
}
$_SESSION['usuario'] ="Gabriel";       
                                           
?>