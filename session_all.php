<?php
session_start();
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

if($usuario=="Admin" and $contraseña=="123"){
    header("Location:admin.php");       
}else{
    header("Location:index.php");       
}
$_SESSION['usuario'] ="Gabriel";       
                                        