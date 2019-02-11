<?php 
include "admin.php";

        $variable = $_POST["nombre"];  
            $clase = new Clase_Canal($variable);
            $clase -> Crear_Canal();
            header("location:admin.php");
        /*if($nombremod!=" " && $nombremod==" " && $nombreD==" "){
         $clase = new Clase_Canal($nombre,$nombremod,$nombreD);
         $clase -> Crear_Canal();
         }else if($nombre==" " && $nombremod!=" " && $nombreD==" "){
         $clase = new Clase_Canal($nombre,$nombremod,$nombreD);
         $clase -> Crear_Canal();
         }else if($nombremod==" " && $nombremod==" " && $nombreD!=" "){
         $clase = new Clase_Canal($nombre,$nombremod,$nombreD);
         $clase -> Crear_Canal();
         }*/
         
?>