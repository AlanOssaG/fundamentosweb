<?php

class Formulario{
    private $Modelo;
    private $db;    
    private $datos;    
    public function __construct(){
        $this->Modelo = array();
        $this->db = new PDO('mysql:host=localhost;dbname=calificaciones',"root","");
    }
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla."(nombre, apellido, telefono, direccion, email, usuario, password) values(". $data .")";
        echo $consulta;
        $resultado=$this->db->query($consulta);
        if ($resultado) {
            return true;
        }else {
            return false;
        }
     }

}