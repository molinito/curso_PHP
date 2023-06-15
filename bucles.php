<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Bucles while o do while</title>
</head>

<body>

<?php

$var1=7;
/* while ($var1<6) {// Mientras la variable sea menor que 6
    echo "Estamos ejecutando el código del bucle <br>";
    $var1++;

} */

do { // Ejecuta el código al menos una vez si la condición no se cumple($var1=7)
    echo "Estamos ejecutando el código del bucle <br>";
    $var1++;
} while ($var1<6);

echo "Hemos salido del bucle <br>";

?>
</body>

</html>