<?php

class Coche {// Definición de una clase

    var $ruedas;
    var $color;
    var $motor;

    function Coche() { // Método constructor siempre que esté dentro de una clase
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;  
    }

    function arrancar() {
        echo "Estoy arrancando<br>";
    }

    function girar() {
        echo "Estoy girando<br>";
    }

    function frenar() {
        echo "Estoy frenando<br>";
    }

    function establece_color($color_coche, $nombre_coche) {
        $this->color = $color_coche;
        echo "El color de " . $nombre_coche . " es: " . $this->color . "<br>";
    } 

}


?>






<?php

class Camiones {// Definición de una clase

    var $ruedas;
    var $color;
    var $motor;

    function Camion() { // Método constructor siempre que esté dentro de una clase
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor = 2600;  
    }

    function arrancar() {
        echo "Estoy arrancando<br>";
    }

    function girar() {
        echo "Estoy girando<br>";
    }

    function frenar() {
        echo "Estoy frenando<br>";
    }


}


?>
