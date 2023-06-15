<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexion BD</title>
    
</head>

<body>

    <?php

    //llamar a la conexion de la BBDD de nombre datosBD.php
    require("prueba2.php");

    $conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);

    // mysqli_connect_errno() devuelve el código de error generado por la última llamada a mysqli_connect()
    // imprime en pantalla el error generado por la conexión a la BBDD
    if(mysqli_connect_errno()){
        echo "Fallo al conectar con la BBDD: " . mysqli_connect_error() . " - " . mysqli_connect_errno();
        exit();
    }

    mysqli_set_charset($conexion, "utf8"); // para que se reconozcan los acentos latinos y caracteres especiales

    $query="SELECT * FROM Hoja1";

    $resultados=mysqli_query($conexion, $query);

    // PARA VER LOS DATOS DE LA PRIMER FILA DE LA TABLA
    $fila=mysqli_fetch_row($resultados); // muestra la primera fila de la tabla

    echo $fila[0] . " ";

    // PARA VER TODOS LOS DATOS DE LA TABLA CON UN BUCLE WHILE
    /* while(($fila=mysqli_fetch_row($resultados))==true){
        echo $fila[0] . " ";
        echo $fila[1] . " ";
        echo $fila[2] . " ";
        echo $fila[3] . " ";
        echo "<br>";
    } */

    // otro metodo para ver todas las filas de la tabla


    foreach(mysqli_fetch_all($resultados) as $fila) {
        echo implode(" ", $fila) . "<br>";
    } 

    // para cerrar la conexión a la BBDD
    mysqli_close($conexion);


    ?>


</body>