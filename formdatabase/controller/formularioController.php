<?php
require_once("./model/formularioModel.php");
class formularioController{
    private $formulario;
    public function __construct(){
        $this->formulario = new Formulario();
    }
    
    static function index(){        
        require_once("./view/formularioView.php");
    }

    static function guardar(){
        
        $nombre = $_REQUEST['nombre'];
        $apellido = $_REQUEST['apellido'];
        $telefono= $_REQUEST['telefono'];
        $direccion = $_REQUEST['direccion'];
        $email = $_REQUEST['email'];
        $usuario = $_REQUEST['usuario'];
        $password = $_REQUEST['password'];
        $data = "'".$nombre."','".$apellido."','".$telefono."','".$direccion."','".$email."','".$usuario."','".$password."'";
                 // ejemplo en java --- > System.out.println("'ronal','tamayo','3116184030'");


        $estudiante = new Formulario();
        $dato = $estudiante->insertar("estudiante",$data);
        
        header("location:./");
    }



   


}