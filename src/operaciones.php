<?php

namespace Clases;
use Clases\Producto;

class Operaciones {

    public function getPVP($nc) {

        $prod = new Producto();
        $pvp = $prod->consultarPrecio($nc);

        if($pvp) {
            return "el precio del artículo es de: " .$pvp;
        }
        return "no existe producto con ese código"; 
    }

    public function suma($a, $b) {
        return $a + $b;
    }
   
}