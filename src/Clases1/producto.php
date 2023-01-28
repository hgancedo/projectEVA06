<?php

namespace Clases1;
use Exception;

class Producto extends Conexion {

    private $nombre;
    private $nombre_corto;
    private $descripcion;
    private $pvp;
    private $familia;

    public function __construct() {
        parent::__construct();
    }

    public function setNombre($nom) {
        $this->nombre = $nom;
    }
    public function getNombre() {
        return $this->nombre;;
    }
    public function setNombreCorto($nc) {
        $this->nombre_corto = $nc;
    }
    public function getNombreCorto() {
        return $this->nombre_corto;
    }
    public function setDescripcion($des) {
        $this->descripcion = $des;
    }
    public function getDescripcion() {
        return $this->descripcion;
    }
    public function setPvp($pvp) {
        $this->pvp = $pvp;
    }
    public function getPvp() {
        return $this->pvp;
    }
    public function setFamilia($fam) {
        $this->familia = $fam;
    }
    public function getFamilia() {
        return $this->familia;
    }

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