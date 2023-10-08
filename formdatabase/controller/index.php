<?php
require_once("model/index.php");
require_once("./model/formularioModel.php");

class modeloController{
    private $model;
    private $formulario;
    public function __construct(){
        $this->model = new Modelo();
        $this->formulario = new Formulario();
    }
    // mostrar
    static function index(){
        $producto   = new Modelo();
        $dato       =   $producto->mostrar("estudiante","1");
        require_once("view/index.php");
    }
        //nuevo
        static function nuevo(){        
            require_once("view/formularioView.php");
        }
        //guardar
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
    
    
    
        //editar
        static function editar(){    
            $id = $_REQUEST['id'];
            $producto = new Modelo();
            $dato = $producto->mostrar("estudiante","estudiante_id=".$id);        
            require_once("view/editar.php");
        }
        //actualizar
        static function actualizar(){
            $id = $_REQUEST['id'];
            $nombre = $_REQUEST['nombre'];
            $apellido = $_REQUEST['apellido'];
            $telefono= $_REQUEST['telefono'];
            $direccion = $_REQUEST['direccion'];
            $email = $_REQUEST['email'];
            $usuario = $_REQUEST['usuario'];
            $password = $_REQUEST['password'];
            $data = "nombre='".$nombre."', apellido='".$apellido."', telefono='".$telefono."', direccion='".$direccion."', email='".$email."', usuario='".$usuario."', password='".$password."'";
            $producto = new Modelo();
            $dato = $producto->actualizar("estudiante",$data,"estudiante_id=".$id);
            header("location:index.php");
        }
    
    
        //eliminar
        static function eliminar(){    
            $id = $_REQUEST['id'];
            $producto = new Modelo();
            $dato = $producto->eliminar("estudiante","estudiante_id=".$id);
            header("location:index.php ");
        }
}