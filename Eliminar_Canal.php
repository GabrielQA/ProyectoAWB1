<?php 
require "admin.php";

    $variable = $_POST["eliminar"];
    $clase = new Clase_Canal("$variable");
    $clase -> Eliminar_Canal();
    echo "<script>location.href='admin.php';</script>";
?>