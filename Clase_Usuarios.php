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
        public $Mensaje;


        //Metodo Constructor de la clase Canal
        function __construct($variable,$variableM,$Usuario,$Mensaje){
            $this->variable= $variable;    
            $this->variableM= $variableM;      
            $this->Usuario= $Usuario;     
            $this->Mensaje= $Mensaje;     
        }
   
    //--------------------------------------------------------------------------Seccion Canal---------------------------------------------------------------------------------------
        function Canal_Usuario(){
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $channels = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8") ->channels ->read(); 
        $output = '';
        foreach ($channels as $record) {
        $output .= "
        <table style='width:30%'>
        <form action='Canal_Mjs.php' method='post'>
        <input type='hidden' id='id' name='id' value='$record->sid'></input>
        <input type='hidden' id='nombre' name='nombre' value='$record->friendlyName'></input>
        <li>$record->friendlyName<a href='' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span><button type='submit' class='btn btn-warning'>Unirme</button></a>
        <ul class='dropdown-menu'>
        <h4><a href='' class='scrollto' value=''>Nombre de Usuario</a></h4>
        <input type='text' class='form-control' id='Usuario' name='Usuario' placeholder='Usuario'>
        <input type='submit' class='btn btn-primary'  value='Unirme'>
        </ul>
        </form>
        </table>
        "; 
        }
        echo $output;
        }
    //        echo"<script type=\"text/javascript\">alert('Re'); window.location='../Vista/Categoria.php';</script>";
    /*
    <form action='Unir_Usu.php' method='post'>
    <li>$record->friendlyName<a href='' class='dropdown-toggle' data-toggle='dropdown'><span class='glyphicon glyphicon-user'></span><button type='submit' class='btn btn-warning'>Unirme</button></a>
    <ul class='dropdown-menu'>
    <h4><a href='' class='scrollto' value=''>Nombre de Usuario</a></h4>
    <input type='text' class='form-control' id='nombre' name='nombre' placeholder='Usuario'>
    <input type='hidden' id='id' name='id' value='$record->sid'></input>
    <input type='submit' class='btn btn-primary'  value='Unirme'>
    </ul>
    </li>
    </form>
     */
    
    //----------------------------------------------------------------------------Seccion Usuarios-------------------------------------------------------------------------

        function Listar_Usuario_Canal(){
        //echo"<script type=\"text/javascript\">alert('Re'); window.location='Canal_Mjs.php';</script>";
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $members = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")->channels("CH3ae7c1b0de004240822b69619aeb84b7")->members->read();
        foreach ($members as $record) {
        print($record->identity."   " );
        }        
        }
        function  Unir_Usuario_Canal(){
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $member = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")->channels($this->variableM)->members->create($this->Usuario);       
        print($member->identity);
        }
        function MostrarFN(){
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $members = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")
        ->channels($this->variableM)
        ->members
        ->read();
        foreach ($members as $record) {
        print($record->identity."--");        
        }    
        }
    //----------------------------------------------------------------------------Seccion Mensajes-------------------------------------------------------------------------
        function EnviarMns(){
      if($this->Mensaje != "H"){
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $message = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")->channels($this->variableM)->messages->create(array("body" => $this->Mensaje, "from"=>$this->Usuario));   
        
            //echo "Bienvenido al chat";
        }//{
       /* if(Empty($this->Mensaje) || $this->Mensaje=null || $this->Mensaje="") {
            echo "basido";
        }else*/
           /*foreach($message->dateCreated as $date){
            echo $date;
            } */
                     
    }
        function ListarMns(){
        $sid    = "ACe3cee161eb435c1458abd6b02678e24f";
        $token  = "232c491053bb1103232a62ecfb1584de";
        $twilio = new Client($sid, $token);
        $messages = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")->channels($this->variableM)->messages->read();
        $message = $twilio->chat->v2->services("IS4450342d288b4f36bf624ae84d0537f8")->channels($this->variableM)->messages->create(array("body" => $this->Mensaje, "from"=>$this->Usuario));
        $fecha = "";
        foreach ($messages as $record){
        $output='';
        $output .= "
        $record->from : $record->body
        ";
        echo $output;
        echo $message->dateCreated->format("d-m-Y H:i:s");
        }
        }

    }
?>
