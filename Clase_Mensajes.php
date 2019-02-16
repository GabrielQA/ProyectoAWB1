<?php
//Se importa la clase conexion hacia la clase Categorias para asi trabajar en manera simultania
require __DIR__.'/twilio-php-master/Twilio/autoload.php';
require __DIR__.'/twilio-php-master/vendor/autoload.php';
require __DIR__.'/twilio-php-master/Services/Twilio.php';
use Twilio\Rest\Client;
//Se crea Clase Categorias con sus respectivos atributos publicos
class Clase_Usuarios{
    public $variable;
    public $variableM;
    public $Usuario;

    //Metodo Constructor de la clase Canal
    function __construct($variable,$variableM,$Usuario){
        $this->variable= $variable;    
        $this->variableM= $variableM;      
        $this->Usuario= $Usuario;      
    }
   
    //--------------------------------------------------------------------------Seccion Canal---------------------------------------------------------------------------------------
    function EnviarMns(){
        $sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        $token  = "your_auth_token";
        $twilio = new Client($sid, $token);
        
        $message = $twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->channels("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->messages
                                    ->create(array("body" => "MESSAGE"));
        
        print($message->sid);
        
    }
    function ListarMns(){
        $sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        $token  = "your_auth_token";
        $twilio = new Client($sid, $token);
        
        $messages = $twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->channels("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                     ->messages
                                     ->read();
        
        foreach ($messages as $record) {
            print($record->sid);
        }
    }
    function RecuperarMns(){
        $sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        $token  = "your_auth_token";
        $twilio = new Client($sid, $token);
        
        $message = $twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->channels("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->messages("IMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->fetch();
        
        print($message->to);
    }
    function ActualizarMns(){
        $sid    = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
        $token  = "your_auth_token";
        $twilio = new Client($sid, $token);
        
        $message = $twilio->chat->v2->services("ISXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->channels("CHXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->messages("IMXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX")
                                    ->update(array("body" => "MESSAGE"));
        
        print($message->to);
    }
    
    }
?>