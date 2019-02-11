<?php
//session_start();

// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require __DIR__.'/twilio-php-master/Twilio/autoload.php';
require __DIR__.'/twilio-php-master/vendor/autoload.php';
//require "admin.php";
use Twilio\Rest\Client;

//$Nombre=$_POST["nombre"];

//Servicio CRUD

//Crear Servicio
/*function Crear_Servicio(){
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);
    
    $service = $twilio->chat->v2->services
                                ->create("Servicio_Twilio");
    
    print($service->sid);
}*/

//Vista de los servicios creados
/*function Ver_Servicio(){
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
$token  = "232c491053bb1103232a62ecfb1584de";
$twilio = new Client($sid, $token);

$services = $twilio->chat->v2->services
                             ->read();

foreach ($services as $record) {
    print($record->friendlyName);
}


}*/

//Vista de los canales creados
function Ver_Canal(){
$sid    = "ACe3cee161eb435c1458abd6b02678e24f";
$token  = "232c491053bb1103232a62ecfb1584de";
$twilio = new Client($sid, $token);

$channels = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
                             ->channels
                             ->read();

foreach ($channels as $record) {
    print($record->friendlyName);
}
}

//Crear un canal
function Crear_Canal(){
    //Variables con datos adquiridos mediante el metodo POST utilizadas para Crear un nuevo canal
    //Variables con datos adquiridos mediante el metodo POST utilizadas para (Modificar) un canal 
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);

    $channel = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
                                ->channels
                                ->create(array("friendlyName" => $Nombre));
    print($channel->friendlyName);
    //header("Location:admin.php");
}

//Modificar un Canal

function Modificar_Canal(){
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);
    
    $channel = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
                                ->channels("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                ->update(array(
                                             "friendly_name" => "Canal X"
                                         )
                                );
    
    print($channel->friendlyName);
}

//Eliminar un Canal
function Eliminar_Canal(){
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);
    
    $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
                     ->channels("CHe690aaebfd8a400ea9d902464c25c298")
                     ->delete();
}