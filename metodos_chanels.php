<?php 
use Twilio\Rest\Client;
//Especificamos el directorio en donde se encuentra la libreria 
function creatChanel(){
    

    // Update the path below to your autoload.php,
    // see https://getcomposer.org/doc/01-basic-usage.md

    
   
    
    // Find your Account Sid and Auth Token at twilio.com/console
    $sid    = "ACfe9f0eaa00455beb7332a7f64b058411";
    $token  = "d726de51b5616c1bc21ca35d2e2f6ab1";
    $twilio = new Client($sid, $token);
    
    $channel = $twilio->chat->v2->services("ACfe9f0eaa00455beb7332a7f64b058411")
                                ->channels
                                ->create(array("friendlyName" => "MyChannel"));
    
    print($channel->sid);
}
?>