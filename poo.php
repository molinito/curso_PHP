<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Programación Orientada a Objetos</title>
</head>

<body>

<?php

class Coche {// Definición de una clase

    public $ruedas;
    public $color;
    public $motor;

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

$renault=new Coche(); // Instanciar una clase, con este metodo se llama al constructor "function Coche()" */
$mazda=new Coche();
$seat=new Coche();

/* $renault->establece_color("Rojo", "Renault"); */


$mazda->girar();// esto es un método //
// mostrar en el navegador el valor de la propiedad "ruedas" del objeto $mazda
echo "El Mazda tiene " . $mazda->ruedas . " ruedas<br>";

?>

</body>

</html>