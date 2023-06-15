<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Programación Orientada a Objetos</title>
</head>

<body>

<?php

include("vehiculos.php");

$mazda=new Coche(); // Instanciar una clase, con este metodo se llama al constructor "function Coche()"

$pegaso=new Camiones();

echo "El Mazda tiene " . $mazda->ruedas . " ruedas<br>";
echo "El Pegaso tiene " . $pegaso->ruedas . " ruedas<br>";

$pegaso->frenar();
?>


</body>

</html>