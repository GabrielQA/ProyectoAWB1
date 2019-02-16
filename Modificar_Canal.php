<?php 
require "admin.php";
    $variableM = $_POST["nombre"];
    $variable = $_POST["id"];
    $clase = new Clase_Canal($variable,$variableM);
    $clase -> Modificar_Canal();
    echo "<script>location.href='admin.php';</script>";
?>