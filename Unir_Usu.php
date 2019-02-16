<?php 
include "index.php";
    //$cat = new Clase_Usuarios("varibale","variableM");
    $variableM = $_POST["id"];
    $variable = $_POST["nombre"];  
    //$Canal=$variableM;
    $clase = new Clase_Usuarios($variable,$variableM);
    $clase -> Unir_Usuario_Canal();
    //echo $Canal;
    
   

?>
<html>
    <body>
    <?php //echo "<script>location.href='Mostrar_Usu.php';</script>"; 
 ?>
    <!--<form action='Canal_Mjs.php' method='post'>
    <input type="hidden" id='id' name='id' value='<?php //echo $Canal ?>'></input>
    <Center><input type='submit' class='btn btn-primary'  value='Ingresar al Canal'></Center>
    </form>-->
    </body>
 </html> 
