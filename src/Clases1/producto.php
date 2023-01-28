<?php

require "conexion.php";

class Producto extends Conexion {

    //private $nombre;
    private $nombre_corto;
    //private $descripcion;
    private $pvp;
   // private $familia;

    public function __construct() {
        parent::__construct();
    }

    public function setNombreCorto($nc) {
        $this->nombre_corto = $nc;
    }

    /*
        TO DO GETTERS Y SETTERS
    }*/

    //podría haber usado aquí getPVP()
    public function consultarPrecio($nombre_corto) {

        $sql = "SELECT pvp FROM productos WHERE nombre_corto = :c";
        $stm = $this->conexion->prepare($sql);

        try {
           $stm->execute([":c"=>$nombre_corto]);
          
        } catch (Exception $ex) {
            "Error en la consulta del pvp" .$ex->getMessage();
        }
        
        if($stm->rowCount() > 0) {
            $res = $stm->fetch();
            $pvp = $res[0];
            $this->conexion = null;
            $stm = null;
            return $pvp;
        } 
        
        $this->conexion = null;
        $stm = null;
        return false;
    }
}