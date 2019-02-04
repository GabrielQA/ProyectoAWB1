<?php
// Update the path below to your autoload.php,
// see https://getcomposer.org/doc/01-basic-usage.md
require __DIR__.'/twilio-php-master/Twilio/autoload.php';
use Twilio\Rest\Client;
function Conexion(){
// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "ACfe9f0eaa00455beb7332a7f64b058411";
$token  = "d726de51b5616c1bc21ca35d2e2f6ab1";
$twilio = new Client($sid, $token);

$services = $twilio->chat->v2->services
                             ->read();


}
function CrearServicio(){
// Find your Account Sid and Auth Token at twilio.com/console
$sid    = "ACfe9f0eaa00455beb7332a7f64b058411";
$token  = "d726de51b5616c1bc21ca35d2e2f6ab1";
$twilio = new Client($sid, $token);

$service = $twilio->notify->v1->services
                              ->create();


}