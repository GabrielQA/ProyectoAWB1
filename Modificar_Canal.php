<?php 
require "admin.php";
    //Variables con datos adquiridos mediante el metodo POST 
    //Variables con datos adquiridos mediante el metodo POST 
    $variableM = $_POST["nombre"];
    $variable = $_POST["id"];
    $clase = new Clase_Canal($variable,$variableM);
    $clase -> Modificar_Canal();
    echo "<script>location.href='admin.php';</script>";
?>