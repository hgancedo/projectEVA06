<?php
namespace Clases1;
use Exception;

class Familia extends Conexion {

    private $cod;
    private $nombre;

    public function __construct() {
        parent::__construct();
    }

    public function setCod($cod) {
        $this->cod = $cod;
    }
    public function getCod() {
        return $this->cod;
    }
    public function setNombre($nom) {
        $this->nombre = $nom;
    }
    public function getNombre() {
        return $this->nombre;;
    }
    
    public function consultarFamilias() {
        $sql = "SELECT cod FROM familias";
        $stm = $this->conexion->prepare($sql);
        try {
            $stm->execute();
        } catch (Exception $ex) {
            echo "Error en la consulta a la tabla familias" .$ex->getMessage();
        }

        if($stm->rowCount() > 0) {
            $res = $stm->fetchAll();
            $this->conexion = null;
            $stm = null;
            return $res;
        } 
        
        $this->conexion = null;
        $stm = null;
        return false;
    }
}