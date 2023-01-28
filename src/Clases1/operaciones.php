<?php
namespace Clases1;
use Clases1\Producto;
use Clases1\Familia;

class Operaciones {

    public function getPVP($nc) {

        $prod = new Producto();
        $pvp = $prod->consultarPrecio($nc);

        if($pvp) {
            return $pvp;
        }
        return "no existe producto con ese código"; 
    }

    public function getFamilias() {
        $fam = new Familia();
        $familias = $fam->consultarFamilias();
        if($familias) {
            return ($familias);
        }
        return -1; 
    }

}