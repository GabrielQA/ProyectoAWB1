<?php
session_start();
$_SESSION['usuario'] ="Gabriel";     
$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

if($usuario=="Admin" and $contraseña=="123"){
    header("Location:admin.php");       
}else{
    header("Location:index.php");       
}
  
                                        