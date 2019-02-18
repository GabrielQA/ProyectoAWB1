<?php
//Se importa la clase conexion hacia la clase Categorias para asi trabajar en manera simultania
require __DIR__.'/twilio-php-master/Twilio/autoload.php';
require __DIR__.'/twilio-php-master/vendor/autoload.php';
require __DIR__.'/twilio-php-master/Services/Twilio.php';
use Twilio\Rest\Client;
//Se crea Clase Categorias con sus respectivos atributos publicos
class Clase_Canal{
    public $variable;
    public $variableM;
    //Metodo Constructor de la clase Canal
    function __construct($variable,$variableM){
        $this->variable= $variable;    
        $this->variableM= $variableM;      
    }
    //-----------------------------------------------------------------------Seccion Servicios------------------------------------------------------------------------
    //Crear Servicio
    function Crear_Servicio(){
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);

    $service = $twilio->chat->v2->services
                        ->create("Servicio_Twilio");

    print($service->sid);
    }

    //Vista de los servicios creados
    function Ver_Servicio(){
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);

    $services = $twilio->chat->v2->services
                        ->read();

    foreach ($services as $record) {
    print($record->friendlyName);
    }
}

    //--------------------------------------------------------------------------Seccion Canal---------------------------------------------------------------------------------------
    //        echo"<script type=\"text/javascript\">alert('Registro Exitoso'); window.location='../Vista/Categoria.php';</script>";
    //Mostramos todos los canales
    function Ver_Canal(){
    $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
    $token  = "232c491053bb1103232a62ecfb1584de";
    $twilio = new Client($sid, $token);
    $channels = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
    ->channels
    ->read();
    $output = '';
    foreach ($channels as $record) {
    $output .= "
    <table style='width:100%'>
    <tr>
    <th><td>$record->friendlyName</td></th>
    
    <form action='Modificar_Canal.php' method='post'>
    <th><td><input type='hidden' id='id' name='id' value='$record->sid'></input></td></th>
    
    <td>
    <li><a href='' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span><button type='button' class='btn btn-primary btn-xs'>Modificar</button></a>
    <ul class='dropdown-menu'>
    <h5><a href='' class='scrollto'><span>Nombre</span> del</a><span>Canal</span></h5>
    <input type='text' class='form-control' id='nombre' name='nombre'>
    <input type='submit' class='btn btn-primary'  value='Actualizar'>
    </ul>
    </li>
    </td>



    </form> 
    <form action='Eliminar_Canal.php' method='post'>
    <th><td><input type='hidden' id='eliminar' name='eliminar' value='$record->sid'></input></td></th>
    <th><td><button type='submit' class='btn btn-danger'>Eliminar</button></td></th>            
    </form>           
    </tr>
    </table>
    ";   
    }
    echo $output;
    }
    //Metodo eliminar canal
    function Eliminar_Canal(){
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        
        $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
                         ->channels($this->variable)
                         ->delete();
    } 
    //Metodo crear canal
    function Crear_Canal(){ 
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $channel = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
                                    ->channels
                                    ->create(array("friendlyName" => $this->variable));
    }
    //Metodo modificar canal
    function Modificar_Canal(){
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $channel = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")->channels("$this->variable")->update(array("friendlyName" => "$this->variableM"));

    
    }
        }
?>
