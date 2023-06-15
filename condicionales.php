<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Condicionales</title>
</head>

<body>

<?php

$var1 = true;
$var2 = false;
$resultado = $var1 && $var2; //aqui el resultado sera false porque las dos variables no son true
// $resultado = $var1 || $var2; //aqui el resultado sera true porque una de las dos variables es true
// $resultado = !$var1; //aqui el resultado sera false porque la variable es true y con el ! se invierte
// $resultado = $var1 xor $var2; //aqui el resultado sera true porque solo una de las dos variables es true
// $resultado = $var1 and $var2; //aqui el resultado sera false porque las dos variables no son true
// $resultado = $var1 or $var2; //aqui el resultado sera true porque una de las dos variables es true
// SE RECOMIENDA USAR && Y || EN LUGAR DE AND Y OR
// VER TABLA DE OPERADORES LOGICOS Y SUS PRIORIDADES EN https://www.php.net/manual/es/language.operators.logical.php

if ($resultado == true) {
    echo "Correcto";
} else {
    echo "Incorrecto";
}


?>


</body>