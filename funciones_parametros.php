<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Funciones con parámetros</title>
</head>

<body>

    <?php
    /* Funciones con parámetros por valor. Ejemplos
    function cambia_mayus($param) // Función con parámetros
    {
        $param = strtolower($param); // strtolower() convierte a minúsculas
        $param = ucwords($param); // ucwords() convierte a mayúsculas la primera letra de cada palabra
        return $param;
    }
    $cadena = "hOlA mUnDo";
    echo cambia_mayus($cadena) . "<br>";
    echo $cadena; // No se modifica la variable original */


     // Funciones con parámetros por referencia. Ejemplos
     function cambia_mayus(&$param) // Función con parámetros
     {
         $param = strtolower($param); // strtolower() convierte a minúsculas
         $param = ucwords($param); // ucwords() convierte a mayúsculas la primera letra de cada palabra
         return $param;
     }
     $cadena = "hOlA mUnDo";
     echo cambia_mayus($cadena) . "<br>";
     echo $cadena; // No se modifica la variable original

    ?>

</body>

</html>