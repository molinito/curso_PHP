<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Constantes</title>
</head>

<body>
    <?php
    define("AUTOR", "Juan", true);//define crea una constante, el true es para que no sea case sensitive
    echo "El autor es: " . AUTOR . "<br>";
    /*echo "El autor es: " . Autor . "<br>"; aqui dará error porque no es case sensitive
    echo "El autor es: " . autor . "<br>"; aqui dará error */
    echo "La línea de esta instrucción es: " . __LINE__ . "<br>";//muestra la linea de la instrucción
    echo "Estamos trabajando con este fichero: " . __FILE__ . "<br>";//muestra el fichero en el que estamos
    echo "Estamos trabajando con este fichero: " . __DIR__ . "<br>";//muestra el directorio en el que estamos
    echo "Estamos trabajando con este fichero: " . __FUNCTION__ . "<br>";//muestra la función en la que estamos
    echo "Estamos trabajando con este fichero: " . __CLASS__ . "<br>";//muestra la clase en la que estamos
    echo "Estamos trabajando con este fichero: " . __METHOD__ . "<br>";//muestra el método en el que estamos
    echo "Estamos trabajando con este fichero: " . __NAMESPACE__ . "<br>";//muestra el namespace en el que estamos
    

    ?>

    </body>
</html>
