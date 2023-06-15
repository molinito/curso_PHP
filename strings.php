<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Curso PHP</title>

    <style>
        .resaltar {
            color:#F00;
            font-weight:bold;
        }
    </style>
</head>

<body>
    <?php
    echo "<p class='resaltar'>Esto es un ejemplo de frase</p>";// notar la diferencia con las comillas simples, puede habar doble comilla dentro de las comillas simples, sino el codigo no funciona
    // tambien se puede hacer con barras invertidas, por ejemplo:
    // echo "<p class=\"resaltar\">Esto es un ejemplo de frase</p>";
    ?>
    <?php
    // vamos a comparar strings usando strcmp y strcasecmp
    $variable1 = "Casa";
    $variable2 = "CASA";
    $resultado = strcmp($variable1, $variable2); // devuelve 1 si son diferentes y 0 si son iguales
    $resultado = strcasecmp($variable1, $variable2);// devuelve 0 si son iguales, 1 si son diferentes y -1 si son iguales pero con distinta capitalizacion
    echo "El resultado es " . $resultado
    ?>

</body>