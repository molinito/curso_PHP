<?php

class Compra_vehiculo {
    private $precio_base;

    static $ayuda=4500;// variable estática
   
    function __construct($gama)
    {
        if ($gama == "urbano") {
            $this->precio_base = 10000;
        } else if ($gama == "compacto") {
            $this->precio_base = 20000;
        } else if ($gama == "berlina") {
            $this->precio_base = 30000;
        }
    }// fin constructor

    function climatizador() {
        $this->precio_base+=2000;
    }// fin climatizador

    function navegador_gps() {
        $this->precio_base+=2500;
    }// fin navegador_gps

    function tapiceria_cuero($color) {
        if ($color=="blanco") {
            $this->precio_base+=3000;
        } else if ($color=="beige") {
            $this->precio_base+=3500;
        } else {
            $this->precio_base+=5000;
        }
    }// fin tapiceria_cuero

    function precio_final() {
        $valor_final=$this->precio_base;
        $valor_final-=self::$ayuda;// self:: es como this-> pero para variables estáticas
        return $valor_final;
    }
} // fin clase Compra_vehiculo

?>