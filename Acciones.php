<?php 
//Redirecciona al admin una ves creado el canal con los datos insertados en el admin.
    include "admin.php";
    $variableM="a";
    $variable = $_POST["nombre"];  
    $clase = new Clase_Canal($variable,$variableM);
    $clase -> Crear_Canal();
    echo "<script>location.href='admin.php';</script>";
         
?>