<?php 
require "admin.php";
$Nombre=$_POST["nombre"];
echo $Nombre;
/*function Crear_Canal(){
    //Variables con datos adquiridos mediante el metodo POST utilizadas para Crear un nuevo canal
    $Nombre=$_POST["nombre"];
    //Variables con datos adquiridos mediante el metodo POST utilizadas para (Modificar) un canal 
    //$NombreMod=$_POST["nombreMod"];
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);

    $channel = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
                                ->channels
                                ->create(array("friendlyName" => $Nombre));
    //return $Nombre;
   // print($channel->sid);
    //echo $Nombre;
    echo $Nombre;

    //header("Location:admin.php");
}*/

?>