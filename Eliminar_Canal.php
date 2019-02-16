<?php 
require "admin.php";
    $variableM-"o";
    $variable = $_POST["eliminar"];
    $clase = new Clase_Canal("$variable","$variableM");
    $clase -> Eliminar_Canal();
    echo "<script>location.href='admin.php';</script>";
?>