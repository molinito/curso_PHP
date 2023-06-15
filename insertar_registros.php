<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar datos BD desde la pagina</title>
</head>

<body>
<?php


    // $busqueda=$_GET["buscar"];

    //llamar a la conexion de la BBDD de nombre datosBD.php
    require("datosBD.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);


    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD: " . mysqli_connect_error() . " - " . mysqli_connect_errno();
        exit();
    }

    mysqli_set_charset($conexion, "utf8"); // para que se reconozcan los acentos latinos y caracteres especiales

    $query="INSERT INTO Hoja1 (Item, Descripción) VALUES (7010010086, 'HARINA TRIGO')"; // para que busque la palabra en cualquier parte de la descripción

    $resultados=mysqli_query($conexion, $query);


    mysqli_close($conexion);

    
    ?>

</body>
</html>
